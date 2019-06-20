<?php

namespace Modules\Admin\Http\Controllers\Shopping;

use Auth;
use Mockery\Exception;
use Modules\Admin\Entities\BrandCountry;
use Modules\Shopping\Entities\ConfirmationBanner;
use Modules\Shopping\Entities\ConfirmationBannerCountry;
use Modules\Shopping\Entities\ConfirmationPurpose;
use Modules\Shopping\Entities\ConfirmationType;
use Modules\Shopping\Entities\Promo;
use Modules\Shopping\Entities\PromoProd;
use View;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\ACL\User;
use Modules\Shopping\Entities\GroupCountry;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Entities\Language;
use Modules\Admin\Entities\LanguageTranslation;

use Modules\Admin\Http\Controllers\AdminController as Controller;


class PromoProdsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {

        $promos  = Promo::where('delete',0)->get();




        $this->layoutData['content'] = View::make('admin::shopping.promoprods.index', compact('promos'));

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $countriesUser = Auth::user()->countries;
        $countries = [];
        foreach ($countriesUser as $uc){

            $countries[$uc->id] = $uc->name;


        }
        $locale     = Auth::user()->language->locale_key;
        $title      = trans('admin::shopping.promoprods.add.view.form-countries');
        $languages = Language::where('delete', 0)->orderBy('active','desc')->get();


        //$countriesUser = \GuzzleHttp\json_encode($countriesUser);



        $this->layoutData['content'] = View::make('admin::shopping.promoprods.create', compact('locale', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request) {




            if(!empty($request->promo_key)){

                try{
                    DB::beginTransaction();

                            $idPromo = $this->savePromo($request->promo_key,$request->active);
                                if ($idPromo > 0) {

                                    $resTransPromo = $this->saveTranslationPromo($idPromo, $request);

                                    if ($resTransPromo != 1) {
                                        return ['success' => false, 'message' => $resTransPromo, 'data' => ''];
                                    }


                                } else {
                                    return ['success' => false, 'message' => trans('admin::shopping.promoprods.add.error.controller-country'), 'data' => ''];
                                }


                             DB::commit();


                        return ['success' => true, 'message' => trans('admin::shopping.promoprods.add.error.controller-success'), 'data' => $idPromo];



                }
                catch (Exception $e){
                DB::rollback();
                return back()->withInput()->withErrors(array('msg' => trans('admin::shopping.promoprods.add.error.controller-country')));

            }
            }


              return ['success' => false, 'message' => trans('admin::shopping.promoprods.add.error.empty-key'), 'data' => ''];











    }


    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function saveProdPromo(Request $request) {




        if(!empty($request->productcode)){

            try{
                DB::beginTransaction();

                $idPromoProd = $this->savePromoProd($request->promo_id_p,$request->productcode,$request);

                if ($idPromoProd != 1) {
                    return ['success' => false, 'message' => trans('admin::shopping.promoprods.add.error.controller-country'), 'data' => ''];
                }



                DB::commit();


                return ['success' => true, 'message' => trans('admin::shopping.promoprods.add.error.controller-success'), 'data' => ''];



            }
            catch (Exception $e){
                DB::rollback();
                return back()->withInput()->withErrors(array('msg' => trans('admin::shopping.promoprods.add.error.controller-country')));

            }
        }


        return ['success' => false, 'message' => trans('admin::shopping.promoprods.add.error.empty-key'), 'data' => ''];











    }



    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id) {

        $promo = Promo::where('id',$id)->first();
        $locale     = Auth::user()->language->locale_key;
        $languages = Language::where('delete', 0)->orderBy('active','desc')->get();


        $this->layoutData['content'] = View::make('admin::shopping.promoprods.edit', compact('confirmationsByCountry', 'promo','locale','languages'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {

        if(!empty($request->purpose) && !empty($request->type)){
            $purpose_old = $request->purpose_old;
            $type_old = $request->type_old;
            //Se almacena en la tabla principal
            try{
                DB::beginTransaction();
                foreach (Auth::user()->countries as $uC)
                {

                    $active       = "active_".$uC->id;
                    $link         = "link_".$uC->id;

                    $infoConfirmation = ConfirmationBanner::where('country_id', $uC->id)->where(['type_id' => $type_old,'purpose_id' => $purpose_old])->first();

                    if (isset($infoConfirmation)) {
                        //Actualizamos la tabla confirmation banner
                        ConfirmationBanner::where('id', $infoConfirmation->id)->update(['link' => $request->$link, 'type_id' => $request->type,'purpose_id' => $request->purpose, 'active' => $request->$active]);


                        foreach ($uC->languages as $countryLang) {

                            $image = 'image_'.$uC->id.'_'.$countryLang->language->id;

                            if (!empty($request->$image)) {
                                $infoConfirmation->translateOrNew($countryLang->language->locale_key)->image         = $request->$image;
                                $infoConfirmation->translateOrNew($countryLang->language->locale_key)->active        = $active;
                            }
                        }

                        $infoConfirmation->update();
                    } else {
                        if ($request->$active != null) {

                            $idBan = $this->saveConfirmationCountry($uC->id,$request->type,$request->purpose,$request->$link, $request->$active);
                            if ($idBan > 0) {

                                $resTransBanner = $this->saveTranslationBanners($uC->id, $idBan, $request,$request->$active);

                                if ($resTransBanner != 1) {
                                    return back()->withInput()->withErrors(array('msg' => $resTransBanner));
                                }


                            } else {
                                return back()->withInput()->withErrors(array('msg' => trans('admin::shopping.promoprods.edit.error.controller-country')));
                            }
                        }
                    }
                }
                DB::commit();
                return redirect()->route('admin.promoprods.index')->with('msg', trans('admin::shopping.promoprods.edit.error.controller-success'));
            }catch(Exception $e){
                DB::rollback();
                return back()->withInput()->withErrors(array('msg' => trans('admin::shopping.promoprods.add.error.controller-country')));
            }
        }

        return back()->withInput()->withErrors(array('msg' => trans('admin::shopping.promoprods.add.error.empty-params')));
    }

    /**
     * Remove the specified resource from storage.
     * @return boolean
     */
    public function destroy(Request $request)
    {

        $promo = Promo::where('id',$request->id)->get();
        foreach ($promo as $c){
            $c->last_modifier_id = Auth::user()->id;
            $c->active = 0;
            $c->delete = 1;
            $c->save();
        }
        return redirect()->route('admin.promoprods.index')->with('msg', trans('admin::shopping.promoprods.edit.error.controller-success'));
    }


    public function changeStatus(Request $request) {
        if ($request->has('new-status')) {
            $promoProd = Promo::where('id',$request->id)->get();

            $newStatus           = 0;

            if ($request->input('new-status') == 'activate') {
                $newStatus = 1;
            }

            foreach ($promoProd as $c){
                $c->last_modifier_id = Auth::user()->id;
                $c->active = $newStatus;
                $c->save();
            }

            return redirect()->route('admin.promoprods.index')->with('msg', trans('admin::shopping.promoprods.edit.error.controller-success'));
        }
    }

    /** Save promo
     * @param $promo_key
     * @return int
     */
    private function savePromo($promo_key,$active)
    {


        $data = Promo::updateOrCreate(
            ['clv_promo' => $promo_key],
            ['clv_promo' => $promo_key,'active' => $active]
        );

        return $data->id;



    }

    /** Save promoProd
     * @param $promo_key,$clv_prod
     * @return int
     */
    private function savePromoProd ($promo_key,$productcode,$request)
    {


        foreach ($productcode as $key => $pc){

            $data = PromoProd::updateOrCreate(
                ['promo_id' => $promo_key,'clv_producto' => $pc],
                ['clv_promo' => $promo_key,'clv_producto' => $pc ,'active' => 1]
            );

            if($data->id > 0){
                //inserciones de traducciones


                    $resTransPromo = $this->saveTranslationPromoProd($data->id,$key,$request);



                    if ($resTransPromo != 1) {
                        return ['success' => false, 'message' => $resTransPromo, 'data' => ''];
                    }



            }
        }



        return 1;



    }

    /** Sve promo translations
     * @param $promo_id
     * @param $request
     * @return int|string
     */

    private function saveTranslationPromo($promo_id,$request)
    {

        $promoconf = Promo::find($promo_id);

        //dd($request->all());
        foreach($request->local_key as $key => $langCountry) {




            if (!empty($request->promo_name)) {
                $promoconf->translateOrNew($langCountry)->promo_id         = $promo_id;
                $promoconf->translateOrNew($langCountry)->name_header         = $request->promo_name[$key];
                $promoconf->translateOrNew($langCountry)->description_header         = $request->promo_desc[$key];
                $promoconf->translateOrNew($langCountry)->active         = 1;
                $idPrompranslation = $promoconf->id;
            } else {
                $idPrompranslation = 0;
            }

            $promoconf->save();


        }
        return 1;
    }

    /** Sve promo translations
     * @param $promo_id
     * @param $request
     * @return int|string
     */

    private function saveTranslationPromoProd($promo_id,$pos,$request)
    {
        //dd($promo_id,$pos,$request->all());
        $promoprodconf = PromoProd::find($promo_id);

        //dd($request->all());
        foreach($request->local_key as $key => $langCountry) {

            $name = 'nameprod_'.$pos.'_'.$langCountry;;
            $desc = 'descprod_'.$pos.'_'.$langCountry;
            if (!empty($request->$name)) {
                $promoprodconf->translateOrNew($langCountry)->promo_prod_id         = $promo_id;
                $promoprodconf->translateOrNew($langCountry)->name         = $request->$name;
                $promoprodconf->translateOrNew($langCountry)->description         = $request->$desc;
                $promoprodconf->translateOrNew($langCountry)->active         = 1;
                $idPrompranslation = $promoprodconf->id;
            } else {
                $idPrompranslation = 0;
            }

            $promoprodconf->save();


        }
        return 1;
    }
}

<?php

/*  === ADMIN ROUTES === */
Route::prefix('cms')->group(function() {


        /*  === GENERAL ROUTES === */

        Route::get('/', ['uses' => 'HomeController@getIndex', 'as' => 'home']); // default home route

        Route::get('logout', ['uses' => 'AuthController@logout', 'as' => 'logout']);

        Route::get('account', ['uses' => 'AccountController@getIndex', 'as' => 'account.index']);
        Route::get('account/password', ['uses' => 'AccountController@getPassword', 'as' => 'account.password']);
        Route::post('account/password', ['uses' => 'AccountController@postPassword', 'as' => 'account.password.post']);
        Route::get('account/blog', ['uses' => 'AccountController@getBlog', 'as' => 'account.blog']);
        Route::post('account/blog', ['uses' => 'AccountController@postBlog', 'as' => 'account.blog.post']);
        Route::get('account/language', ['uses' => 'AccountController@getLanguage', 'as' => 'account.language']);
        Route::post('account/language', ['uses' => 'AccountController@postLanguage', 'as' => 'account.language.post']);
        Route::post('account/page-state', ['uses' => 'AccountController@postPageState', 'as' => 'account.page-state']);
        Route::get('account/name', ['uses' => 'AccountController@getName', 'as' => 'account.name']);
        Route::post('account/name', ['uses' => 'AccountController@postName', 'as' => 'account.name.post']);

        Route::get('testSession', ['uses' => 'AccountController@testSession', 'as' => 'testSession']);

        Route::get('home', ['uses' => 'HomeController@getIndex', 'as' => 'home.index']);
        Route::get('home/logs', ['uses' => 'HomeController@getLogs', 'as' => 'home.logs']);
        Route::get('home/requests', ['uses' => 'HomeController@getRequests', 'as' => 'home.requests']);
        Route::get('home/your-requests', ['uses' => 'HomeController@getYourRequests', 'as' => 'home.your-requests']);

        /*  === CMS ROUTES === */

        /*===Brands routes==*/
        Route::get('brands',['uses'=>'BrandController@showListBrands','as'=>'brand.list']);
        Route::get('brands/addBrand/{message?}/{validacion?}',['uses'=>'BrandController@indexBrand', 'as' => 'brand.add']);
        Route::get('brands/edit/{bread_id?}/{message?}/{validacion?}',['uses'=>'BrandController@getBrand', 'as' => 'brand.editBrand']);
        Route::post('brands/edit/{bread_id}',['uses'=>'BrandController@updataBrand', 'as' => 'brand.editBrand']);
        Route::post('brands/addBrand/{message?}',['uses'=>'BrandController@saveBrand', 'as'=>'brand.add']);
        Route::post('brands/activeBrand',['uses'=>'BrandController@activeBrand','as'=> 'bread.activeBrand']);

        Route::post('brands/delete/{brand}', 'BrandController@delete')->name('brand.delete');


        Route::get('system', ['uses' => 'CMS\SystemController@getIndex', 'as' => 'system.index']);
        Route::post('system', ['uses' => 'CMS\SystemController@postIndex', 'as' => 'system.index.post']);
        Route::get('system/wp-login', ['uses' => 'CMS\SystemController@getWpLogin', 'as' => 'system.wp-login']);
        Route::get('system/search', ['uses' => 'CMS\SystemController@getSearch', 'as' => 'system.search']);
        Route::get('system/validate-db/{fix?}', ['uses' => 'CMS\SystemController@getValidateDb', 'as' => 'system.validate-db']);
        Route::get('system/upgrade/{update?}', ['uses' => 'CMS\SystemController@getUpgrade', 'as' => 'system.upgrade']);
        Route::post('system/keys/{key?}', ['uses' => 'CMS\SystemController@postKeys', 'as' => 'system.keys']);

        Route::get('pages/list', ['uses' => 'CMS\PagesController@getPages', 'as' => 'pages.list']);
        Route::post('pages/get', ['uses' => 'CMS\PagesController@getPagesByParameters', 'as' => 'pages.get.pages']);
        Route::post('pages/search', ['uses' => 'CMS\PagesController@searchPages', 'as' => 'pages.search']);
        Route::post('pages/showPreviewPage', ['uses' => 'CMS\PagesController@goToPreviewPage', 'as' => 'pages.preview']);

        Route::get('pages', ['uses' => 'CMS\PagesController@getIndex', 'as' => 'pages.index']);
        Route::get('pages/add/{pageId?}/{groupId?}', ['uses' => 'CMS\PagesController@getAdd', 'as' => 'pages.add']);
        Route::post('pages/add/{pageId?}/{groupId?}', ['uses' => 'CMS\PagesController@postAdd', 'as' => 'pages.add.post']);
        Route::get('pages/edit/{pageId}/{version?}/{language?}', ['uses' => 'CMS\PagesController@getEdit', 'as' => 'pages.edit'])->where(['pageId' => '\w+', 'version' => '\w+']);
        Route::post('pages/edit/{pageId}/{version?}/{language?}', ['uses' => 'CMS\PagesController@postEdit', 'as' => 'pages.edit.post']);
        Route::post('pages/sort', ['uses' => 'CMS\PagesController@postSort', 'as' => 'pages.sort']);
        Route::post('pages/delete/{pageId}', ['uses' => 'CMS\PagesController@postDelete', 'as' => 'pages.delete']);
        Route::post('pages/versions/{pageId}', ['uses' => 'CMS\PagesController@postVersions', 'as' => 'pages.versions']);
        Route::post('pages/version-schedule/{pageId}', ['uses' => 'CMS\PagesController@postVersionSchedule', 'as' => 'pages.version-schedule']);
        Route::post('pages/version-rename/{pageId}', ['uses' => 'CMS\PagesController@postVersionRename', 'as' => 'pages.version-rename']);
        Route::post('pages/version-publish/{pageId}', ['uses' => 'CMS\PagesController@postVersionPublish', 'as' => 'pages.version-publish']);
        Route::post('pages/requests/{pageId}', ['uses' => 'CMS\PagesController@postRequests', 'as' => 'pages.requests']);
        Route::post('pages/request-publish/{pageId}', ['uses' => 'CMS\PagesController@postRequestPublish', 'as' => 'pages.request-publish']);
        Route::post('pages/request-publish-action/{pageId}', ['uses' => 'CMS\PagesController@postRequestPublishAction', 'as' => 'pages.request-publish-action']);
        Route::get('pages/tinymce-page-list', ['uses' => 'CMS\PagesController@getTinymcePageList', 'as' => 'pages.tinymce-page-list']);

        Route::get('groups/pages/{groupId}', ['uses' => 'CMS\GroupsController@getPages', 'as' => 'groups.pages']);
        Route::get('groups/edit/{groupId}', ['uses' => 'CMS\GroupsController@getEdit', 'as' => 'groups.edit']);
        Route::post('groups/edit/{groupId}', ['uses' => 'CMS\GroupsController@postEdit', 'as' => 'groups.edit.post']);

        Route::get('menus', ['uses' => 'CMS\MenusController@getIndex', 'as' => 'menus.index']);
        Route::get('menus/filters', ['uses' => 'CMS\MenusController@getIndex', 'as' => 'menus.index.filters']);
        Route::post('menus/add', ['uses' => 'CMS\MenusController@postAdd', 'as' => 'menus.add']);
        Route::post('menus/delete/{itemId}', ['uses' => 'CMS\MenusController@postDelete', 'as' => 'menus.delete']);
        Route::post('menus/sort', ['uses' => 'CMS\MenusController@postSort', 'as' => 'menus.sort']);
        Route::post('menus/get-levels', ['uses' => 'CMS\MenusController@postGetLevels', 'as' => 'menus.get-levels']);
        Route::post('menus/save-levels', ['uses' => 'CMS\MenusController@postSaveLevels', 'as' => 'menus.save-levels']);
        Route::post('menus/rename', ['uses' => 'CMS\MenusController@postRename', 'as' => 'menus.rename']);
        Route::post('menus/renamev2', ['uses' => 'CMS\MenusController@postRenameV2', 'as' => 'menus.renamev2']);

        Route::post('menus/hide-page', ['uses' => 'CMS\MenusController@postHidePage', 'as' => 'menus.hide-page']);
        Route::get('menus/testStats', ['uses' => 'CMS\MenusController@getDataStatsMenus', 'as' => 'menus.testStats']);

        Route::get('blocks/testStats', ['uses' => 'CMS\BlocksController@getDataStatsBlocks', 'as' => 'blocks.testStats']);
        Route::get('blocks', ['uses' => 'CMS\BlocksController@getIndex', 'as' => 'blocks.index']);
        Route::post('blocks/filters', ['uses' => 'CMS\BlocksController@getIndex', 'as' => 'blocks.index.filters']);
        Route::post('blocks', ['uses' => 'CMS\BlocksController@postIndex', 'as' => 'blocks.index.post']);

        Route::post('selecFiltersUpdate', ['uses' => 'CMS\BlocksController@postChangeSelectFilter', 'as' => 'blocks.selecFiltersUpdate']);

        Route::get('filemanager', ['uses' => 'CMS\FilemanagerController@getIndex', 'as' => 'filemanager.index']);

        Route::get('redirects', ['uses' => 'CMS\RedirectsController@getIndex', 'as' => 'redirects.index']);
        Route::post('redirects', ['uses' => 'CMS\RedirectsController@postIndex', 'as' => 'redirects.index.post']);
        Route::get('redirects/url-decode', ['uses' => 'CMS\RedirectsController@getUrlDecode', 'as' => 'redirects.url-decode']);
        Route::post('redirects/edit', ['uses' => 'CMS\RedirectsController@postEdit', 'as' => 'redirects.edit']);
        Route::get('redirects/import', ['uses' => 'CMS\RedirectsController@getImport', 'as' => 'redirects.import']);

        Route::get('themes', ['uses' => 'CMS\ThemesController@getIndex', 'as' => 'themes.index']);
        Route::get('themes/list', ['uses' => 'CMS\ThemesController@getList', 'as' => 'themes.list']);
        Route::post('themes/manage', ['uses' => 'CMS\ThemesController@postManage', 'as' => 'themes.manage']);
        Route::get('themes/export/{themeId}/{withPageData?}', ['uses' => 'CMS\ThemesController@getExport', 'as' => 'themes.export'])->where(['themeId' => '\w+', 'withPageData' => '\w+']);
        Route::get('themes/beacons', ['uses' => 'CMS\ThemesController@getBeacons', 'as' => 'themes.beacons']);
        Route::post('themes/beacons', ['uses' => 'CMS\ThemesController@postBeacons', 'as' => 'themes.beacons.post']);
        Route::get('themes/edit/{themeId}', ['uses' => 'CMS\ThemesController@getEdit', 'as' => 'themes.edit']);
        Route::post('themes/edit/{themeId}', ['uses' => 'CMS\ThemesController@postEdit', 'as' => 'themes.edit.post']);
        Route::post('themes/loadtemplatefile', ['uses' => 'CMS\ThemesController@loadTemplateFile', 'as' => 'themes.edit.loadfile']);
        Route::get('themes/update/{themeId}', ['uses' => 'CMS\ThemesController@getUpdate', 'as' => 'themes.update']);
        Route::post('themes/update/{themeId}', ['uses' => 'CMS\ThemesController@postUpdate', 'as' => 'themes.update.post']);
        Route::get('themes/forms/{template?}', ['uses' => 'CMS\ThemesController@getForms', 'as' => 'themes.forms']);
        Route::post('themes/forms/{template}', ['uses' => 'CMS\ThemesController@postForms', 'as' => 'themes.forms.post']);
        Route::get('themes/selects/{blockId?}/{import?}', ['uses' => 'CMS\ThemesController@getSelects', 'as' => 'themes.selects'])->where(['blockId' => '\w+', 'import' => '\w+']);
        Route::post('themes/selects/{blockId}/{import?}', ['uses' => 'CMS\ThemesController@postSelects', 'as' => 'themes.selects.post'])->where(['blockId' => '\w+', 'import' => '\w+']);

        Route::get('gallery/list/{pageId?}', ['uses' => 'CMS\GalleryController@getList', 'as' => 'gallery.list']);
        Route::get('gallery/edit/{pageId?}/{blockId?}', ['uses' => 'CMS\GalleryController@getEdit', 'as' => 'gallery.edit'])->where(['pageId' => '\w+', 'blockId' => '\w+']);
        Route::get('gallery/update/{pageId?}/{blockId?}', ['uses' => 'CMS\GalleryController@getUpdate', 'as' => 'gallery.update'])->where(['pageId' => '\w+', 'blockId' => '\w+']);
        Route::post('gallery/caption/{pageId?}/{blockId?}', ['uses' => 'CMS\GalleryController@postCaption', 'as' => 'gallery.caption'])->where(['pageId' => '\w+', 'blockId' => '\w+']);
        Route::post('gallery/sort/{pageId?}/{blockId?}', ['uses' => 'CMS\GalleryController@postSort', 'as' => 'gallery.sort'])->where(['pageId' => '\w+', 'blockId' => '\w+']);;
        Route::post('gallery/update/{pageId?}/{blockId?}', ['uses' => 'CMS\GalleryController@postUpdate', 'as' => 'gallery.update'])->where(['pageId' => '\w+', 'blockId' => '\w+']);
        Route::delete('gallery/update/{pageId?}/{blockId?}', ['uses' => 'CMS\GalleryController@deleteUpdate', 'as' => 'gallery.update.post'])->where(['pageId' => '\w+', 'blockId' => '\w+']);

        Route::get('forms/list/{pageId?}', ['uses' => 'CMS\FormsController@getList', 'as' => 'forms.list']);
        Route::get('forms/submissions/{pageId?}/{blockId?}', ['uses' => 'CMS\FormsController@getSubmissions', 'as' => 'forms.submissions'])->where(['pageId' => '\w+', 'blockId' => '\w+']);
        Route::get('forms/csv/{pageId?}/{blockId?}', ['uses' => 'CMS\FormsController@getCsv', 'as' => 'forms.csv'])->where(['pageId' => '\w+', 'blockId' => '\w+']);

        Route::post('backups/undo', ['uses' => 'CMS\BackupsController@postUndo', 'as' => 'backups.undo']);

        Route::post('repeaters', ['uses' => 'CMS\RepeatersController@postIndex', 'as' => 'repeaters.index']);

        Route::get('search', ['uses' => 'CMS\SearchController@getIndex', 'as' => 'search.index']);

        Route::get('import/wp-blog', ['uses' => 'CMS\ImportWpController@getImport', 'as' => 'wpimport']);
        Route::post('import/wp-blog', ['uses' => 'CMS\ImportWpController@postImport', 'as' => 'wpimport.post']);

        Route::post('adminsearch', ['uses' => 'CMS\AdminSearchController@search', 'as' => 'adminsearch.index']);

        /*  === ACL ROUTES === */

        Route::get('users', ['uses' => 'ACL\UsersController@getIndex', 'as' => 'users.index']);
        Route::get('users/edit/{userId?}/{action?}', ['uses' => 'ACL\UsersController@getEdit', 'as' => 'users.edit'])->where(['userId' => '\w+', 'action' => '\w+']);
        Route::post('users/edit/{userId?}/{action?}', ['uses' => 'ACL\UsersController@postEdit', 'as' => 'users.edit.post'])->where(['userId' => '\w+', 'action' => '\w+']);
        Route::get('users/add', ['uses' => 'ACL\UsersController@getAdd', 'as' => 'users.add']);
        Route::post('users/add', ['uses' => 'ACL\UsersController@postAdd', 'as' => 'users.add.post']);
        Route::post('users/delete/{userId?}', ['uses' => 'ACL\UsersController@postDelete', 'as' => 'users.delete']);

        Route::post('selecFiltersBrandsUpdate', ['uses' => 'ACL\UsersController@postChangeSelectBrandFilter', 'as' => 'users.selecFiltersBrandsUpdate']);
        Route::post('users/remove/{user}', 'ACL\UsersController@remove')->name('users.remove');

        /*  === ROLES ROUTES === */
        Route::get('roles', ['uses' => 'ACL\RolesController@getIndex', 'as' => 'roles.index']);
        Route::post('roles/actions/{roleId?}', ['uses' => 'ACL\RolesController@postActions', 'as' => 'roles.actions']);
        Route::post('roles/add', ['uses' => 'ACL\RolesController@postAdd', 'as' => 'roles.add']);
        Route::get('roles/editTranslates/{roleId}', ['uses' => 'ACL\RolesController@getEditRoleTranslation', 'as' => 'roles.edit.translates']);
        Route::post('roles/editRole', ['uses' => 'ACL\RolesController@postEditRoleTranslations', 'as' => 'roles.editRole']);
        Route::post('roles/delete', ['uses' => 'ACL\RolesController@postDelete', 'as' => 'roles.delete']);
        Route::post('roles/active', ['uses' => 'ACL\RolesController@postActivated', 'as' => 'roles.active']);
        Route::post('roles/edit', ['uses' => 'ACL\RolesController@postEdit', 'as' => 'roles.edit']);
        Route::get('roles/pages/{roleId}', ['uses' => 'ACL\RolesController@getPages', 'as' => 'roles.pages']);
        Route::post('roles/pages/{roleId}', ['uses' => 'ACL\RolesController@postPages', 'as' => 'roles.pages.post']);

        /*  === LANGUAGES ROUTES === */
        Route::get('languages', ['uses' => 'LanguagesController@getIndex', 'as' => 'languages.list']);
        Route::get('languages/add', ['uses' => 'LanguagesController@getAdd', 'as' => 'languages.add']);
        Route::post('languages/add', ['uses' => 'LanguagesController@postAdd', 'as' => 'languages.add.post']);
        Route::get('languages/edit/{langId?}', ['uses' => 'LanguagesController@getEdit', 'as' => 'languages.edit'])->where(['langId' => '\w+']);
        Route::post('languages/edit/{langId?}/{action?}', ['uses' => 'LanguagesController@postEdit', 'as' => 'languages.edit.post'])->where(['langId' => '\w+', 'action' => '\w+']);

        Route::post('languages/delete/{lang}', 'LanguagesController@delete')->name('languages.delete');
        /*====Menus Routes===*/

        Route::get('menuAdmin/add/{mensage?}', ['uses' => 'MenusController@indexMenu', 'as' => 'menuadmin.add']);
        Route::get('menuAdmin/update/{id_menu}/{mensage?}', ['uses' => 'MenusController@getMenu', 'as' => 'menuadmin.update']);
        Route::post('menuAdmin/update/{id_menu}', ['uses' => 'MenusController@updateMenu', 'as' => 'menuadmin.update']);
        Route::post('menuAdmin/add', ['uses' => 'MenusController@saveMenu', 'as' => 'menuadmin.add']);
        Route::post('menuAdmin/order', ['uses' => 'MenusController@getMenuById', 'as' => 'menuadmin.order']);
        Route::get('menuAdmin', ['uses' => 'MenusController@getListMenus', 'as' => 'menuadmin.list']);
        Route::post('menuAdmin/active', ['uses' => 'MenusController@activeMenu', 'as' => 'menuadmin.active']);

        /*===Controllers Routes===*/
        Route::get('controllers/add/{message?}', ['uses' => 'ControlController@getIndex', 'as' => 'controller.add']);
        Route::get('controllers', ['uses' => 'ControlController@getListController', 'as' => 'controller.list']);
        Route::post('controllers/active', ['uses' => 'ControlController@activateController', 'as' => 'controller.active']);
        Route::get('controllers/update/{controller_id}/{mesage?}', ['uses' => 'ControlController@getController', 'as' => 'controller.update']);
        Route::post('controllers/update/{controller_id}', ['uses' => 'ControlController@updateController', 'as' => 'controller.update']);
        Route::post('controllers/add', ['uses' => 'ControlController@saveController', 'as' => 'controller.add']);

        /*====Actions Routes ===*/
        Route::get('actions/add/{message?}', ['uses' => 'ActionController@indexFunction', 'as' => 'action.add']);
        Route::get('actions', ['uses' => 'ActionController@listFunction', 'as' => 'action.list']);
        Route::post('actions/active', ['uses' => 'ActionController@activateFunction', 'as' => 'action.active']);
        Route::get('actions/update/{controller_id}/{mesage?}', ['uses' => 'ActionController@getFunction', 'as' => 'action.update']);
        Route::post('actions/update/{controller_id}', ['uses' => 'ActionController@updateFunction', 'as' => 'action.update']);
        Route::post('actions/add', ['uses' => 'ActionController@saveFunction', 'as' => 'action.add']);

        /**/
        Route::get('templates/add/{message?}', ['uses' => 'TemplateController@indexTemplate', 'as' => 'template.add']);
        Route::post('templates/add', ['uses' => 'TemplateController@addTemplate', 'as' => 'template.add.save']);
        Route::get('templates', ['uses' => 'TemplateController@listTemplates', 'as' => 'template.list']);
        Route::post('templates/active', ['uses' => 'TemplateController@activateTemplate', 'as' => 'template.active']);
        Route::get('templates/update/{template_id}/{mesage?}', ['uses' => 'TemplateController@getTemplate', 'as' => 'template.update']);
        Route::post('templates/update/{template_id}', ['uses' => 'TemplateController@updateTemplate', 'as' => 'template.update']);

        /*  === COUNTRIES ROUTES === */
        Route::get('countries', ['uses' => 'CountriesController@getIndex', 'as' => 'countries.list']);
        Route::get('countries/add/{mensage?}/{validacion?}', ['uses' => 'CountriesController@getAdd', 'as' => 'countries.add']);
        Route::post('countries/add', ['uses' => 'CountriesController@postAdd', 'as' => 'countries.add']);
        Route::get('countries/edit/{countryId?}/{mensage?}', ['uses' => 'CountriesController@getEdit', 'as' => 'countries.edit'])->where(['countryId' => '\w+']);
        Route::post('countries/edit/{countryId?}', ['uses' => 'CountriesController@postEdit', 'as' => 'countries.edit']);
        Route::post('countries/active',['uses' => 'CountriesController@activeCountry', 'as' => 'countries.active']);

        Route::post('countries/delete/{country}', 'CountriesController@delete')->name('countries.delete');

        /*  === VARS SETTINGS ROUTES === */
        Route::get('vars/', ['uses' => 'VarsSettingController@getSettings', 'as' => 'vars.list']);
        Route::post('vars', ['uses' => 'VarsSettingController@postSettings', 'as' => 'vars.save']);
        Route::post('vars/delete', ['uses' => 'VarsSettingController@deleteSettings', 'as' => 'vars.delete']);
        Route::get('load_traslate', ['uses' => 'VarsSettingController@uploadFileSVG', 'as' => 'vars.saveFile']);


        # DISTRIBUTORS POOL ROUTES INIT
        Route::get('/distributors-pool', 'DistributorsPoolController@index')->name('pool.index');
        Route::get('/distributors-pool/add', 'DistributorsPoolController@add')->name('pool.add');
        Route::get('/distributors-pool/edit/{code}/{country}', 'DistributorsPoolController@edit')->name('pool.edit');

        Route::post('/distributors-pool/save', 'DistributorsPoolController@save')->name('pool.save');
        Route::post('/distributors-pool/update/{code}/{country}', 'DistributorsPoolController@update')->name('pool.update');
        Route::post('/distributors-pool/delete/{code}/{country}', 'DistributorsPoolController@delete')->name('pool.delete');

        Route::post('/distributors-pool/upload-file', 'DistributorsPoolController@uploadFile')->name('pool.upload_file');
        Route::post('/distributors-pool/validate-sponsor', 'DistributorsPoolController@validateSponsor')->name('pool.validate_sponsor');
        # DISTRIBUTORS POOL ROUTES END

});



/*  === ADMIN-GUEST ROUTES === */


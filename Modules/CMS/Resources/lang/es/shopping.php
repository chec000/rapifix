<?php

/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 16/04/2018
 * Time: 02:47 PM
 */
return [
    /*
      |--------------------------------------------------------------------------
      | Pagination Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines are used by the paginator library to build
      | the simple pagination links. You are free to change them to anything
      | you want to customize your views to better match your application.
      |
     */

    'products' => [
        'index' => [
            'title'=>'Lista de productos',
            'form-add-button'=>'Agregar nuevo producto',
            'thead-product-key'=>'Codigo de pais ',
            'thead-product-sku'=>'Producto SKU',
            'thead-product-brand'=>'Marca',
            'thead-product-countries'=>'Paises en los cuales el producto esta activo',
            'thead-product-languages'=>'Idioma del Producto',
            'thead-product-active'=>'Estado',
            'thead-product-actions'=>'Acciones',
            'product_active'=>'Activo',
            'product_inactive'=>'Inactivo',
            'edit_product'=>'Editar producto',
            'enable_product'=>'Habilitar producto',
            'disable_product'=>'Deshabilitar producto',
            'delete_product'=>'Eliminar producto',
            'delete_product_message'=>'El producto ha sido eliminado exitosamente',
            'thead-product-global_name' => 'Nombre Global (support)'
        ],
        'add' => [
            'input' => [
                'product'                   => 'Seleccionar un producto ',
            ],
            'first_general_tab' => [
                'title'                     => 'Información básica',
                'form-global-name-label'    => 'Nombre Global (support)',
                'form-sku-label'            =>'Producto SKU',
                'form-is-kit-label'         =>'El producto KIT es para inscripción?',
                'select-country-label'      =>'Por favor seleccione en cuales paises el producto estara activo',
                'select-brand-label'        =>'Por favor seleccione las marcas en las cuales el producto estara activo ',
                'form-next-button'          => 'Siguiente ',
                'form-cancell-button'       => 'Cancelar',
                'Product'                   => 'Producto',
            ],
            'second_general_tab' => [
                'title'=>'Detalles de información del pais',
                'first-text'=>'Por favor ingrese la información del producto como el precio y los puntos especificos para cada pais. ',
                'country-tab-title'=>'Editar información para:',
                'country-form-price-label'=>'Precio:',
                'country-form-points-label'=>'Puntos:',
                'country-form-category-label'=>'Categoria:',
                'second-text'=>'Porfavor ingrese la información de producto en los idiomas disponibles para el pais, tome en cuenta que si no completa los campos completamente, la información no se mostrará correctamente. ',
                'country-language-title'=>'Editar para idioma:',
                'form-product-name-label'=>'Nombre de producto:',
                'form-product-description-label'=>'Descripción del producto:',
                'form-product-comments-label'=>'Comentarios del producto:',
                'form-product-short-description-label'=>'Descripción corta del producto:',
                'form-product-benefits-label'=>'Beneficios del producto:',
                'form-product-ingredients-label'=>'Ingredientes de producto:',
                'form-product-image-label'=>'Imagen del producto:',
                'form-product-nutritional-info-label'=>'Imagen del producto nutrimental:',
                'form-save-button'=>'Guardar',
                'form-cancell-button'=>'Cancelar',
                'country-form-active-product'=>'Activar producto'
            ],
            'alerts'=>[
                'empty-sku'=>'Debe ingresar un SKU valido ',
                'empty-sku-exist'               => 'El SKU ya existe',
                'empty-global-name'             => 'Debe escribir un nombre global',
                'empty-brand'=>'Debe seleccionar la marca ',
                'empty-country'=>'Debe seleccionar por lo menos un pais',
                'empty-country-price'=>'Debe ingresar un precio valido para el pais',
                'empty-country-points'=>'Debe ingresar puntos validos para el pais',
                'empty-country-category'=>'Debe seleccionar por lo menos una categoria de producto para el pais',
                'empty-country-language-item'=>'Informacion faltante en el campo de pais, pais:',
                'product-saved'=>'El producto ha sido agregado exitosamente',
                'error-saving-product'=>'Ocurrio un error mientras se guardaba el producto, por favor verificar la información e intentar de nuevo, si el problema persiste, por favor contactar a centro del servicio.',
                'errorQuantityRelated'=>'Debe seleccionar los productos relacionados. ',
                'error-info'=>'Debe ingresar toda la informacion en por lo menos un idioma por pais.',
                'cancell-dialog-title'=>'Confirmar',
                'cancell-dialog-content'=>'Esta seguro que quiere cancelar?',
                'cancell-dialog-button-yes'=>'Si',
                'cancell-dialog-button-no'=>'No',
                'warning-limit-chars'           => 'Limitado a 140 caracteres',
            ],
        ],
        'updateproduct' => [
            'label' => [
                'select_country' => 'Seleccionar país',
                'inst_01'   => 'Descargar archivo CSV de prueba haciendo click debajo',
                'file_demo' => 'Archivo base',
                'inst_02'   => 'Edite la información correspondiente en las columnas de Código de producto, Precio, Puntos y Estado.
                               Dependiendo de la cantidad de productos será el número de filas que tendrá el archivo.',
                'inst_03'   => 'Guarde los cambios y cargue el archivo actualizado desde aquí',
                'success'   => 'El producto ha sido actualizado correctamente.',
                'load_csv'     => 'Cargar CSV de precios',
            ],
            'error' => [
                'empty_file' => 'El archivo cargado no contiene registros',
                'incomplete' => 'Los datos son incompletos',
                'price'      => 'El precio debe ser un valor numerico mayor a 0',
                'point'      => 'Los puntos deben ser representados por un valor numerico',
                'status'     => 'El estatus debe ser: 1 activo o 0 inactivo',
                'notexist'   => 'El SKU del registro no existe',
            ]
        ],
    ],
    'categories' => [
        'index' => [
            'title'=>'Lista de categoria',
            'form-add-button'=>'Agregar categoria',
            'thead-category-name'=>'Categoria:',
            'thead-category-name-global' => 'Nombre global de categoría (support)',
            'thead-category-brand'=>'Marca',
            'thead-category-countries'=>'Pais',
            'thead-category-languages'=>'Idiomas',
            'thead-category-active'=>'Estado',
            'thead-category-actions'=>'Acciones',
            'category_active'=>'Activo',
            'category_inactive'=>'Inactivo',
            'edit_category'=>'Editar categoria',
            'enable_category'=>'Habilitar categoria',
            'disable_category'=>'Inhabilitar categoria',
            'delete_category'=>'Eliminar categoria',
            'btn_return'=>'Regresar'
        ],
        'add' => [
            'view' => [
                'title-add'=>'Agregar nuevas categorias',
                'title-edit'=>'Editar nuevas categorias',
                'form-brand'=>'Seleccionar marca que pertenece a la categoria',
                'form-country'=>'Pulsar en el nombre de pais y despues en el idioma para ingresar su informacion',
                'form-active'=>'Activar categoria',
                'form-product-select'=>'Agregar productos relacionados al producto',
                'form-product-list'=>'Lista de productos agregados al producto',
                'form-error'=>'Debe de ingresar por lo menos la informacion obligatoria de un idioma por pais',
                'form-list-banner'=>'Producto para banner',
                'form-list-home'=>'Producto para seccion de inicio',
                'form-list-category'=>'Productos para sección de categoria',
                'form-banner-link'=>'Enlace para banner',
                'form-list-delete'=>'Eliminar',
                'form-add-button'=>'Agregar',
                'form-save-button'=>'Guardar',
                'form-next-button'=>'Siguiente',
                'form-cancell-button'=>'Cancelar',
                'form-brands'=>'Marcas',
                'form-countries'       => 'Seleccione paises para editar',
                'form-list-id'         => 'ID',
                'form-list-sku'        => 'SKU',
            ],
            'input' => [
                'category'               => 'Nombre de la categoría',
                'yes'                    => 'Si',
                'no'                     => 'No',
                'title'                  => 'Titulo',
                'subtitle'               => 'Subtitulo',
                'description'            => 'Descripción',
                'product'                => 'Seleccionar producto',
                'select_banner'          => 'Seleccionar el banner principal',
                'banner-link'            => 'Ingresar enlace para el banner',
            ],
            'error'=>[
                'select-product-error'  => 'Seleccionar un producto.',
                'select-category'       => 'Solo puede agregar un maximo de 3 productos.',
                'select-banner'         => 'Solo puede agregar 1 articulo principal.',
                'select-home'           => 'Solo puede agregar '. config('settings::categories.home') .' articulo principal.',
                'category-error'        => 'Error al actualizar la categoría',
                'controller-success'    => 'Categoría creada correctamente',
                'controller-country'    => 'Error al intentar guardar la categoría en el país',
                'controller-info'       => 'Error al guardar la información de la categoría',
                'controller-product'    => 'Error al guardar el producto en la categoría',
            ],
        ],
        'edit' => [
            'error'=>[
                'controller-success'    => 'La categoría se actualizo correctamente',
                'controller-category-info'       => 'Error al editar información de la categoría',
                'controller-category-product'    => 'Error al editar producto en la categoría',
            ],
        ]
    ],
    'systems' => [
        'index' => [
            'title'=>'Lista de sistemas',
            'form-add-button'=>'Agregar sistema',
            'thead-category-name'=>'Sistemas',
            'thead-category-name-global' => 'Nombre global de sistemas (support)',
            'thead-category-brand'=>'Marca',
            'thead-category-countries'=>'Pais',
            'thead-category-languages'=>'Idiomas',
            'thead-category-active'=>'Estado',
            'thead-category-actions'=>'Acciones',
            'category_active'=>'Activo',
            'category_inactive'=>'Inactivo',
            'edit_category'=>'Editar sistema',
            'enable_category'=>'Habilitar sistema',
            'disable_category'=>'Inhabilitar sistema',
            'delete_category'=>'Eliminar sistema',
            'btn_return'=>'Regresar'
        ],
        'add' => [
            'view' => [
                'title-add'=>'Agregar sistema',
                'title-edit'=>'Editar sistema',
                'form-brand'=>'Seleccionar marca que pertenece al sistema',
                'form-country'=>'Hacer click en el nombre del pais y luego en el idioma para ingresar su ingormacion ',
                'form-active'=>'Activar sistema',
                'form-product-select'=>'Agregar productos al sistema',
                'form-product-list'=>'Lista de productos agregada al sistema',
                'form-error'=>'Debe ingresar minimo la informacion obligatoria (*) de un idioma para cada pais',
                'form-error-prod-sys'=>'Debe seleccionar por lo menos un producto para el sistema',
                'form-list-banner'=>'Producto para banner',
                'form-list-home'=>'Producto para seccion de inicio',
                'form-list-category'=>'Producto para seccion de sistema',
                'form-link-one'=>'Enlace para banner principal',
                'form-link-two'=>'Enlace para banner de sistema',
                'form-list-delete'=>'Eliminar',
                'form-add-button'=>'Agregar',
                'form-save-button'=>'Guardar',
                'form-next-button'=>'Siguiente',
                'form-cancell-button'=>'Cancelar',
                'form-list-id'         => 'ID',
                'form-list-sku'        => 'SKU',
            ],
            'input' => [
                'category'=>'Nombre del sistema',
                'yes'=>'Si',
                'no'=>'No',
                'title'=>'Titulo',
                'benefit'=>'Beneficio',
                'description'=>'Descripción',
                'product'=>'Seleccionar un producto ',
                'select_banner_one'=>'Seleccionar banner principal',
                'select_banner_two'=>'Seleccionar banner de sistema',
                'link_one'=>'Enlazar banner principal',
                'link_two'=>'Enlazar banner de sistema',
                'banner-link'=>'Ingreasar el enlace para el banner'
            ],
            'error'=>[
                'select-product'=>'Seleccionar producto',
                'select-category'=>'Solo puede agregar un maximo de 3 productos',
                'select-banner'=>'Solo puede agregar 1 articulo principal',
                'select-home'=>'Solo puede agregar'. config('settings::categories.home'),
                'category-error'=>'Error al actualizar el sistema',
                'controller-success'=>'Sistema creado correctamente',
                'controller-country'=>'Error al intentar guardar el sistema en el pais',
                'controller-info'=>'Error al guardar la informacion del sistema',
                'controller-product'=>'Error al guardar el producto en el sistema'
            ],
        ],
        'edit' => [
            'error'=>[
                'controller-success'=>'El sistema se actualizo correctamente',
                'controller-category-info'=>'Error al editar la información del sistema',
                'controller-category-product'=>'Error al editar el producto en el sistema'
            ],
        ]
    ],
    'filters' => [
        'view' => [
            'title_add'        => 'Add new filter',
            'title_edit'       => 'Edit filter',
            'title_rel'        => 'Relate filters with brands',
            'title_popup'      => 'Select brand and countries with that belongs to the filters',
            'form-country'     => 'Click on the name of the country and then in the language to enter your information',
            'filter'           => 'Filter',
            'product'          => 'Products',
            'delete'           => 'Delete',
            'brand'            => 'Brands',
            'country'          => 'Countries',
        ],
        'input' => [
            'label' => [
                'filter'  => 'Enter the name of the filter',
                'active'  => 'Select if the filter will be active',
                'country'  => 'Select a country to upload your information',
                'category'  => 'Select the category',
                'product'  => 'Select the product',
            ],
            'placeholder' => [
                'filter'  => 'Filter name',
                'yes'     => 'Yes',
                'no'      => 'No',
            ]
        ],
        'buttons' => [
            'back_list'   => 'Back List',
            'save' => 'Save'
        ],
        'message' => [
            'success' => [
                'filter_category' => 'The information is saved correctly',
            ],
            'error'=> [
                'brand' => 'Select a brand and minimum one country',
                'not_countries' => 'You do not have permits in any country of the assigned filters',
            ],
        ],

        'index' => [
            'title'=>'Lista de filtros',
            'form-add-button'=>'Agregar filtro',
            'thead-name'=>'Filtros',
            'thead-name-global' => 'Filtro de nombre global(support)',
            'thead-brand'=>'Marca',
            'thead-country'=>'Pais',
            'thead-languages'=>'Idiomas',
            'thead-active'=>'Estado',
            'thead-actions'=>'Acciones',
            'category_active'=>'Activo',
            'category_inactive'=>'Inactivo',
            'edit_category'=>'Editar filtro',
            'enable_category'=>'Habilitar filtro',
            'disable_category'=>'Inhabilitar filtro',
            'delete_category'=>'Eliminar filtro',
            'btn_return'=>'Regresar'
        ],
        'add' => [
            'label' =>[
                'title1'=>'Agregar filtro nuevo',
                'brands'=>'Seleccionar marca que permanece al sistema',
                'categories'=>'Seleccionar categoria',
                'button-next'=>'Siguiente',
                'title'=>'Agregar nuevo filtro para la categoria',
                'filter'=>'Nombre de filtro ',
                'active'=>'Activar filtro',
                'select'=>'Agregar productos al filtro',
                'button-add'=>'Agregar',
                'product-list'=>'Lista de productos agregados al filtro',
                'list-id'=>'Id',
                'list-sku'=>'SKU',
                'list-delete'=>'Eliminar',
                'button-save'=>'Guardar',
            ],
            'input' => [
                'filter'=>'Filter',
                'categories'=>'Select a category...',
                'yes'=>'Yes',
                'no'=>'No',
                'product'=>'Select a product of the category'
            ],
        ],
        'edit' => [
        ],
        'error' => [
            'bd'=>'Error en la base de datos',
            'brands'=>'Seleccionar una marca',
            'categories'=>'Seleccionar una categoria',
            'select'=>'Primero seleccione un producto ',
            'required-fields'=>'Debe ingresar minimo la informacion obligatoria (*) de un idioma para cada pais',
            'product-filter'=>'Debe seleccionar por lo menos un producto para el filtro',
            'controller-success'=>'El filtro se actualizo correctamente',
            'controller-category-info'=>'Error al editar informacion de filtro',
            'controller-category-product'=>'Error al editar el producto en el filtro'
        ],
    ],
    'warehouses' => [
        'index' => [
            'title'                          => 'Warehouses list',
            'form-add-button'                => 'Add warehouse',
            'thead-name'                     => 'Warehouses',
            'thead-country'                  => 'Country',
            'thead-active'                   => 'Status',
            'thead-actions'                  => 'Actions',
            'active'                         => 'Enable',
            'inactive'                       => 'Disable',
            'edit'                           => 'Edit warehouse',
            'enable'                         => 'Enable warehouse',
            'disable'                        => 'Disable warehouse',
            'delete'                         => 'Delete warehouse',
            'btn_return'                     => 'Return'
        ],
        'add' => [
            'label' =>[
                'title'                      => 'Add new warehouse',
                'title-edit'                 => 'Edit warehouse',
                'legend_add'                 => 'Global fields',
                'back_list'                  => 'Back list',
                'warehouse'                  => 'Name warehouse',
                'country'                    => 'Countries',
                'button-save'                => 'Save',
            ],
            'input' => [
                'warehouse'                  => 'Name warehouse',
            ],
        ],
        'product' => [
            'label' =>[
                'title'        => 'Add warehouses to the product',
                'countries'    => 'Select a country to load the warehouses',
                'product'      => 'Selected product',
                'wherehouses'  => 'Warehouses of',
                'wherehouse'   => 'Warehouse',
                'status'       => 'Status',
                'action'       => 'Actions',
            ],
        ],
        'error' => [
            'bd'                             => 'Error in the database',
            'country'                        => '*Select a country minimum',
            'controller-success'             => 'The information is saved correctly',
            'controller-category-info'       => 'Error editing filter information',
            'controller-category-product'    => 'Error editing the product in the filter',
        ],
    ],
    'bulkload' => [
        'views' => [
            'title_index' => 'Initial bulk charge',
            'load-product' => 'Products load',
            'load-related' => 'Related products load',
            'load-category' => 'Categories load',
            'load-system' => 'Systems load',
            'response' => 'Response',
        ],
        'inputs' => [
            'labels' => [
                'product' => 'Select the file to load the products',
                'related' => 'Select the file to load the related products',
                'category' => 'Select the file to load the categories',
                'system' => 'Select the file to load the systems',
            ],
            'placeholders' => [
                'file' => 'Select your .csv file',
            ],
        ],
        'buttons' =>[
            'save' => 'Save',
            'submit' => 'Submit',
        ],
        'messages' => [
            'success' => [
                'product' => 'The product is saved correctly',
            ],
            'errors' => [
                '500' => 'Contact the system administrator',
                'empty_file' => 'The file does not contain records'
            ],
        ],
    ],
    'reports' => [
        'views' => [
            'title_index' => 'Reports',
            'title_order' => 'Order report',
            'order' => 'Order report',
            'filter' => 'Filters',

        ],
        'modals' => [
            'title' => 'Reports',
            'select' => 'Select the report you want to download:',
        ],
        'inputs' => [
            'labels' => [
                'from' => 'Orders From',
                'to' => 'Orders To',
                'eo' => 'EO Number',
                'country' => 'Country',
            ],
            'placeholders' => [
                'from' => '2018-06-01',
                'to' => '2018-06-01',
                'eo' => 'EO Number',
            ],
        ],
        'buttons' =>[
            'save' => 'Save',
            'submit' => 'Submit',
        ],
        'messages' => [
            'success' => [
                'exportFile' => 'The .xlsx file was generated',
            ],
            'errors' => [
                'noInfo' => 'No data',
            ],
        ],
    ],
    'productsrestriction' => [
        'label' => [
            'title' => 'Products restricted by country',
            'fieldset_tit' => 'Products',
            'countries' => 'Select a country',
            'state' => 'Select a state',
            'delete' => 'Delete search',
            'product' => 'Select a product',
            'button-save' => 'Save',
            'back_list' => 'Back list',
            'table' => [
                'product' => 'Product',
                'state' => 'State',
                'delete' => 'Delete',
            ],
        ],
    ],
    'orderestatus' => [
        'index' => [
            'list_estatus'              => 'Lista de estatus de ordenes',
            'add_new_orderestatus'      => 'Agregar nuevo estado de orden',
            'key_estatus'               => 'Clave de Estados de Orden',
            'countries'                 => 'Paises',
            'actions'                   => 'Acciones',
            'status'                    => 'Estados',
            'enable'                    => 'Habilitar',
            'disable'                   => 'Inhabilitar',
            'delete'                    => 'Eliminar',
        ],
        'add' => [
            'new_orderestatus' => 'Agregar nuevo estado de orden',
            'key'              => 'Clave Estados',
            'country'          => 'País',
            'countries'        => 'Paises',
            'oe_translates'    => 'Traducciones de estados de orden',
            'oe_disclaimer'    => 'Por favor ingrese la información del estado de orden en los idiomas disponibles, tome en cuenta que si no completa todos los campos, la información no se mostrará correctamente.',
            'name_orderestatus'=> 'Nombre',
            'description'      => 'Descripción',
            'btn_add'          => 'Agregar estado de orden',
            'back_list'        => 'Regresar',
            'legend_add'       => 'Campos globales',
            'comment'          => 'Comentario',
            'keyempty'         => 'Clave vacia',
            'success'          => 'Estado de orden creado exitosamente',
            'failed'           => 'No se puede actualizar el estado del pedido, intente de nuevo',
        ],
        'update' => [
            'updateoe'         => 'Actualizar estado de pedido',
            'btn_update'       => 'Actualizar',
            'keyempty'        => 'Clave vacia',
            'success'          => 'Estado de pedido actualizado exitosamente',
            'failed'           => 'No se puede actualizar el estado del pedido, intente de nuevo',
        ]

    ],
    'registrationreferences' => [
        'index' => [
            'list_estatus'              => 'Lista de referencias de registro',
            'add_new_registrationreferences'      => 'Agregar nueva referencia de registro',
            'key_estatus'               => 'Clave de referencia',
            'countries'                 => 'Paises',
            'actions'                   => 'Acciones',
            'status'                    => 'Estado',
            'enable'                    => 'Habilitar',
            'disable'                   => 'Inhabilitar',
            'delete'                    => 'Eliminar',
            'close'                     => 'Cerrar',
            'save'                      => 'Guardar cambios',
        ],
        'add' => [
            'new_registrationreferences' => 'Agregar nueva referencia de registro',
            'key'              => 'Clave de referencia',
            'countries'        => 'Paises',
            'oe_translates'    => 'Traducciones de referencias de registro',
            'oe_disclaimer'    => 'Por favor ingresa la información de referencia de registro en los idiomas disponibles, si no son llenados todos los campos la información de las referencias no será mostrada correctamente.',
            'name'             => 'Nombre referencia',
            'description'      => 'Descripción',
            'btn_add'          => 'Agregar referencia de registro',
            'back_list'        => 'Regresar',
            'legend_add'       => 'Campos globales',
            'comment'          => 'Comentario',
            'keyempty'         => 'Clave vacia',
            'success'          => 'Referencia de registro creada exitosamente',
            'failed'           => 'No fue posible crear el registro, intente de nuevo',
        ],
        'update' => [
            'updateoe'         => 'Actualize referencia de registro',
            'btn_update'       => 'Actualizar',
            'keyempty'        => 'Clave vacia',
            'success'          => 'Referencia de registro actualizada exitosamente',
            'failed'           => 'No se pudo actualizar la referencia de registro, intente de nuevo',
        ]

    ],
    'securityquestions' => [
        'index' => [
            'list_estatus'              => 'Lista de preguntas de seguridad',
            'add_new_securityquestions'      => 'Agregar pregunta de seguridad',
            'key_question'               => 'Pregunta clave',
            'countries'                 => 'Paises',
            'actions'                   => 'Acciones',
            'status'                    => 'Estado',
            'enable'                    => 'Habilitar',
            'disable'                   => 'Inhabilitar',
            'delete'                    => 'Eliminar',
        ],
        'add' => [
            'new_securityquestions' => 'Agregar nueva pregunta de seguridad',
            'key'              => 'Pregunta clave',
            'countries'        => 'Paises',
            'oe_translates'    => 'Traducciones de preguntas de seguridad',
            'oe_disclaimer'    => 'Por favor ingresa la información de preguntas de seguridad en los idiomas disponibles, si no son llenados todos los campos la información de las preugntas no será mostrada correctamente.',
            'name'             => 'Preguntas',
            'btn_add'          => 'Agregar pregunta de seguridad',
            'back_list'        => 'Regresar',
            'legend_add'       => 'Campos globales',
            'comment'          => 'Comentario',
            'keyempty'         => 'Clave vacia',
            'success'          => 'La pregunta de seguridad se ha creado exitosamente',
            'failed'           => 'No se pudo crear la pregunta de seguridad, intente de nuevo',
        ],
        'update' => [
            'updateoe'         => 'Actualizar pregunta de seguridad',
            'btn_update'       => 'Actualizar',
            'keyempty'        => 'Clave vacia',
            'success'          => 'La pregunta de seguridad se actualizo exitosamente',
            'failed'           => 'No se pudo actualizar la pregunta de seguridad, intente de nuevo',
        ]

    ],
    'registrationparameters' => [
        'index' => [
            'list_estatus'              => 'Lista de parametros de registro',
            'add_new_registrationparameters'      => 'Agregar nuevo parametro de registro',
            'key_question'              => 'Pregunta clave',
            'countries'                 => 'Paises',
            'actions'                   => 'Acciones',
            'status'                    => 'Estado',
            'enable'                    => 'Habilitar',
            'disable'                   => 'Inhabilitar',
            'delete'                    => 'Eliminar',
            'country'                   => 'Páis',
            'min_age'                   => 'Edad minima',
            'max_age'                   => 'Edad máxima',
            'has_documents'             => '¿Tiene documentos?',
        ],
        'add' => [
            'new_registrationparameters' => 'Agregar nuevo parametro de registro',
            'key'              => 'Pregunta clave',
            'country'          =>'País',
            'min_age'          => 'Edad minima',
            'max_age'          => 'Edad máxima',
            'has_documents'    => '¿Tiene documentos?',
            'has_documents_yes'=> 'Si',
            'has_documents_no' => 'No',
            'btn_add'          => 'Agregar parametro de registro',
            'back_list'        => 'Regresar',
            'legend_add'       => 'Campos globales',
            'comment'          => 'Comentario',
            'keyempty'         => 'Clave vacia',
            'success'          => 'Perimetro de registro creado exitosamente',
            'failed'           => 'No se puede crear parametro de registro, intente de nuevo',
            'max_age_validation' => 'La edad minimia no puede ser igual o mayor a la máxima y viceversa',
            'countryempty'    => 'País debe ser seleccionado',
            'minageempty'     => 'Edad minima',
            'maxagempty'      => 'Edad máxima',
            'hundredvalidation' => 'La edad minima y máxima no pueden ser menores que 1 ni mayores a 100',
        ],
        'update' => [
            'updateoe'         => 'Actualizar parametro de registro',
            'btn_update'       => 'Actualizar',
            'keyempty'         => 'Clave vacia',
            'success'          => 'Parametro de registro actualizado exitosamente',
            'failed'           => 'No se pudo actualizar el parametro de registro, intente de nuevo',
        ]

    ],
    'blacklist' => [
        'index' => [
            'list_estatus'              => 'Lista negra',
            'add_new_blacklist'      => 'Agregar a lista negra',
            'eo_number'                 =>'Numero de distribuidor',
            'country'                   => 'Páis',
            'countries'                 => 'Paises',
            'actions'                   => 'Acciones',
            'status'                    => 'Estado',
            'enable'                    => 'Habilitar',
            'disable'                   => 'Inhabilitar',
            'delete'                    => 'Eliminar',
            'eo_numberempty'           => 'Numero de distribuidor vacío ',
        ],
        'add' => [
            'new_blacklist'    => 'Agregar a lista negra',
            'eo_number'        => 'Numero de distribuidor',
            'country'          => 'País',
            'min_age'          => 'Edad minima',
            'max_age'          => 'Edad maxima',
            'has_documents'    => '¿Tiene documentos?',
            'btn_add'          => 'Agregar a la lista negra',
            'back_list'        => 'Regresar',
            'legend_add'       => 'Campos globales',
            'comment'          => 'Comentario',
            'eo_numberempty'   => 'Número de distribuidor vacio',
            'success'          => 'Agregado exitosamente',
            'failed'           => 'No se puede agregar al distribuidor, intente de nuevo',
            'option'           => 'Seleccione una opción',
        ],
        'update' => [
            'updateoe'         => 'Actualizar lista negra',
            'btn_update'       => 'Actualizar',
            'eo_numberempty'   => 'Numero de distribuidor vacío ',
            'success'          => 'Se actualizo exitosamente',
            'failed'           => 'No se puede actualizar la lista negra, intente de nuevo'
        ]

    ],
    'banks' => [
        'index' => [
            'list_estatus'              => 'Bancos',
            'add_new_banks'              => 'Agregar banco',
            'bank_key'                 =>  'Identificador de banco',
            'instructions'              => 'Marca la casilla para activar el país. desmarcarla para inactivarlo',
            'url'                       => 'Url',
            'logo'                      => 'Logo',
            'actions'                   => 'Acciones',
            'status'                    => 'Estatus',
            'enable'                    => 'Activar',
            'disable'                   => 'Desactivar',
            'delete'                    => 'Eliminar',
            'countries'                   => 'País',
            'bank_keyempty'             =>  'Identificador de banco vacío',
            'country_idempty'           => 'País Vacio',
            'urlempty'                  => 'Url vacia',
            'countriesupdated'          => 'El estatus de los paises fue modificado correctamente',
            'failedcountries'           => 'No se pudo actualizar el estatus de los paises, intente de nuevo',
            'close'                     => 'Cerrar',
            'save'                      => 'Guardar cambios',


        ],
        'add' => [
            'new_banks'                 => 'Agregar Banco',
            'countries'                 => 'País',
            'bank_key'                  => 'Identificador banco',
            'url'                       => 'Url',
            'logo'                      => 'Logo',
            'btn_add'                   => 'Agregar banco',
            'back_list'                 => 'Regresar a lista',
            'legend_add'                => 'Campos globales',
            'comment'                   => 'Comment',
            'translates'                => 'Traducciones bancos',
            'disclaimer'                => 'Please enter the banks information in the available languages, please note that if you do not fill in all the fields the banks information will not be displayed correctly.',
            'success'                   => 'Agregado correctamente',
            'failed'                    => 'No se puedo agregar el registro, intente de nuevo',
            'option'                    => 'Elige un opción',
            'bank_keyempty'             =>  'Identificado de banco vacio',
            'country_idempty'           => 'País vacio',
            'urlempty'                  => 'Url vacia',
            'image'                     => 'Imagen',
            'name'                      => 'Nombre',
            'description'               => 'Descripción',

        ],
        'update' => [
            'updateoe'         => 'Actualziar banco',
            'btn_update'       => 'Actualizar',
            'bank_keyempty'             =>  'Identificador de banco vacio',
            'country_idempty'           => 'País vacio',
            'urlempty'                  => 'Url vacia',
            'success'          => 'Actualizado correctamente',
            'failed'           => 'No fue posible actualiza, intente nuevamente',
        ]

    ],
    'orders' => [
        'index' => [
            'distributor_number' => 'Número distribuidor',
            'order_number'       => 'Número de orden',
            'corbiz_order_number' => 'Orden Corbiz',
            'date_created'        => 'Fecha de la orden',
            'payment_type'        => 'Tipo de pago',
            'status'              => 'Estatus',
            'actions'             => 'Acciones',
            'countries'           => 'País',
            'list_orders'         => 'Ordenes',
            'payment_trans'       => 'Transacción Banco',
            'corbiz_transaction'  => 'Transacción Corbiz',
            'order_type'          => 'Tipo de Orden',
            'activate'            => 'Activar reintentos',
            'detail'              => 'Ver detalles',
            'activated'           => 'Reintentos activados correctamente',
            'notactivated'        => 'No se pudo activa, intente de nuevo',
            'list_orders_detail'  => 'Detalle de ordenes',
            'list_orders_logs'    => 'Estatus log',
            'inscription'         => '(Inscripción)',
            'source'              => 'Origen',
            'country'              => 'País',

        ],
        'detail' => [
            'ord_date' => 'Fecha de orden',
            'save_changes' => 'Guardar cambios',
            'added'      => 'producto agregado',
            'change_status' => 'Cambiar estatus',
            'payment_log'   => 'Log de estatus',
            'qty'           => 'Cant',
            'product'       => 'Producto',
            'sku'           => 'Sku',
            'description'   => 'Descripción',
            'points'        => 'Puntos',
            'subtotal'      => 'Subtotal',
            'Action'        => 'Acciones',
            'corbiz_error'  => 'Error corbiz',
            'user_error'    => 'Error usuario',
            'oid'           => 'Id orden',
            'corbiz_transaction' => 'Transacción corbiz',
            'phone'         => 'Télefono',
            'cellphone'     => 'Celular',
            'email'         => 'Email',
            'sponsor'       => 'Patrocinador',
            'sponsor_name'  => 'Nombre patrocinador',
            'status'        => 'Estatus',
            'corbiz_order'  => 'Orden Corbiz',
            'bank_transaction' => 'Transacción banco',
            'tax'           => 'Impuestos',
            'total'         => 'Total',
            'last_modifier' => 'Último en modificar',
            'change_products' => 'Cambiar productos',
            'payment_methods' => 'Métodos de pago',
            'add_product'       => 'Agregar producto',
            'system'            => 'Sistemas',
            'action'        => 'Acción',
            'zip'           => 'Código postal: ',
            'suburb'        => 'Colonia: ',
            'city'          => 'Ciudad: ',
            'state'         => 'Estado: ',
            'bank_auth'         => 'Autorización bancaria',
            'go_back'           => 'Regresar',
            'log_date'          => 'Fecha de log',
            'id'                => 'Identificador',
            'empty-qty'         => 'La cantidad es requerida',
            'empty-prod'        => 'Debes seleccionar al menos un producto',
            'product-error-saving' => 'La orden no pudo ser guardada, intenta nuevamente',
            'product-saved' => 'Orden actualizada correctamente',
            'birth' => 'Fecha nacimiento: ',
            'gender' => 'Genero: ',
            'logs' => 'Estatus Log',
            'chooseoption'      => [
                0 => 'País',
                1 => 'Orden',
                2 => 'Eo',
                3 => 'Tipo',
                4 => 'Origen',
                5 => 'Estatus',
            ],





        ]
    ],
    'customer' => [
        'index' => [
            'id' => 'Id',
            'country' => 'Páis',
            'sponsor' => 'Patrocinadpr',
            'sponsor_name' => 'Nombre patrocinador',
            'customer_code' => 'Código cliente',
            'name' => 'Nombre cliente',
            'date_created' => 'Fecha creación',
            'actions' => 'Acciones',
            'detail' => 'Detalles de cliente',
            'list_orders' => 'Listado de clientes',
            'status' => 'Estatus',
        ],
        'detail' => [
            'phone' => 'Télefono',
            'cellphone' => 'Celular',
            'email' => 'Correo',
            'sponsor' => 'Patrocinador',
            'sponsor_name' => 'Nombre patrocinador',
            'suburb' => 'Colonia: ',
            'zip' => 'Código postal:',
            'city' => 'Ciudad: ',
            'state' => 'Estado: ',
            'corbiz_transaction' => 'Transacción corbiz',
            'go_back' => 'Regresar',
            'birth' => 'Fecha nacimiento: ',
            'gender' => 'Genero: ',
            'ord_date' => 'Fecha de registro',
            'chooseoption'  => [
                0 => 'Country',
                1 => 'Sponsor',


            ],
        ]
    ],
    'legals' => [
        'index' => [
            'thead-legals-countries' => 'País',
            'thead-legals-activecontract' => 'Contrato Activo',
            'thead-legals-activedisclaimer' => 'Disclaimer Activo',
            'thead-legals-activepolicies' => 'Politicas Activas',
            'thead-legals-active' => 'Activo',
            'legal_active' => 'Activo',
            'legal_inactive' => 'Inactivo',
            'thead-legals-actions' => 'Acciones',
            'form-add-button' => 'Agregar documentos',
            'title' => 'Documentos legales',
            'btn_return' => 'Regresar',
            'disable' => 'Inactivar',
            'enable' => 'Activar',
            'delete' => 'Eliminar',
            'edit' => 'Editar',
        ],
        'add' => [
            'view' => [
                'form-countries' => 'Elige los países donde agregar los documentos legales',
                'title-add' => 'Agregar documentos legales',
                'form-country' => 'Paises seleccionados',
                'form-save-button' => 'Guardar',
                'form-active' => 'Activo',
                'form-error' => 'Es necesario completar los campos requeridos',
                'form-error-pdf' => 'El contrato y las politicas deben ser archivos pdf',
                'title-edit' => 'Editar documentos legales',
            ],
            'input' => [
                'contract' => 'Contrato legal',
                'contractvars' => 'Información contrato',
                'disclaimer' => 'Disclaimer',
                'yes' => 'Si',
                'no' => 'No',
                'activecontract' => 'Contrato Activo',
                'activedisclaimer' => 'Disclaimer activo',
                'activepolicies' => 'Politicas activas',
                'see_example' => 'preview example',
                'btn-pdf' => 'Select PDF',
                'contract-pdf' => 'Contract pdf',
                'examplecontract' => 'Example contract',
                'terms-pdf' => 'Policies and Cookies pdf',
                'instructions' => 'Es necesario que use la siguiente estructura de los contratos para una creación correcta cuando el contrato se genere de manera automática.',

            ],
            'error' => [
                'controller-success' => 'Legal document added succesfully',
                'controller-pdfextension' => 'The contract must be a PDF',
            ]
        ],
        'edit' => [
            'error' => [
                'controller-success' => 'Legal document updated successfully',
                'controller-pdfextension' => 'The contract must be a PDF',
            ]
        ],
    ],
    'confirmationbanners' => [
        'index' => [
            'btn_return' => 'Return',
            'link' => 'Link',
            'purpose' => 'Purpose of the banner (example : Success)',
            'type' => 'Type of banner (Inscription, Shopping, Customer)',
            'image' => 'Image',
            'choose_option' => 'choose',
            'shopping_option' => 'Shopping',
            'inscription_option' => 'Inscription',
            'customer_option' => 'Customer',
            'success_option' => 'Success',
            'error_option' => 'Error',
            'warning_option' => 'Warning',
            'thead-confirmation-type' => 'Type',
            'thead-confirmation-purpose' => 'Case',
            'thead-confirmation-countries' => 'Countries',
            'thead-confirmation-link' => 'Link',
            'thead-confirmation-active' => 'Status',
            'thead-confirmation-actions' => 'Actions',
            'disable' => 'Disable',
            'enable' => 'Enable',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'title' => 'Confirmation Banners',
            'form-add-button' => 'Add Confirmation banner',



        ],
        'add' => [
            'view' =>  [
                'title-add' => 'Add Confirmation banners',
                'form-active' => 'Active',
                'form-save-button' => 'Save',
                'form-countries' => 'Choose the countries where you want to add the banners',
                'form-country' => 'Countries',
                'form-error' => 'It\'s neccesary complete the required fields',
                'title-edit' => 'Edit confirmation banners',
            ],
            'input' => [
                'yes' => 'Yes',
                'no' => 'No',
                'image' => 'Image',
            ],
            'error' => [
                'controller-success' => 'Confirmation banner added succesfully',
            ]

        ],
        'edit' => [
            'error' => [
                'controller-success' => 'Confirmation banner updated successfully',
            ]
        ]

    ],
    'promoprods' => [
        'index' => [
            'btn_return' => 'Return',
            'name' => 'Nombre',
            'desription' => 'Description',
            'parentid' => 'Parent id',
            'choose_option' => 'choose',
            'shopping_option' => 'Shopping',
            'inscription_option' => 'Inscription',
            'customer_option' => 'Customer',
            'success_option' => 'Success',
            'error_option' => 'Error',
            'warning_option' => 'Warning',
            'thead-confirmation-type' => 'Type',
            'thead-confirmation-purpose' => 'Case',
            'thead-confirmation-countries' => 'Countries',
            'thead-confirmation-link' => 'Link',
            'thead-confirmation-active' => 'Status',
            'thead-confirmation-actions' => 'Actions',
            'disable' => 'Disable',
            'enable' => 'Enable',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'title' => 'Confirmation Banners',
            'form-add-button' => 'Add Confirmation banner',
            'product_code' => 'Product Code'



        ],
        'add' => [
            'view' =>  [
                'title-add' => 'Add Confirmation banners',
                'form-active' => 'Active',
                'form-save-button' => 'Save',
                'form-countries' => 'Choose the countries where you want to add the banners',
                'form-country' => 'Countries',
                'form-error' => 'It\'s neccesary complete the required fields',
                'title-edit' => 'Edit confirmation banners',
                'form-ismain' => 'Is main product',
            ],
            'input' => [
                'yes' => 'Yes',
                'no' => 'No',
                'image' => 'Image',
            ],
            'error' => [
                'controller-success' => 'Confirmation banner added succesfully',
            ]

        ],
        'edit' => [
            'error' => [
                'controller-success' => 'Confirmation banner updated successfully',
            ]
        ]

    ]
];

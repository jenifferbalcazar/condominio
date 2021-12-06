<?php

class Tipos_Entradas
{
    function __construct()
    {
        // Añadir departamentos
        $this->agregarDepartamentos();
        // Añadir Copropietarios
        $this->agregarCopropietarios();
        // Añadir Generar_QR
		$this->GenerarQr();
        // Añadir Validar_QR
		$this->ValidarQr();
		//Guardar qr
		add_action('save_post_generarqr', $this, 'guardarQR', 10, 3);
    }

   //Registrando la función para añadir departamentos
    public function agregarDepartamentos() {

		$etiquetas_departamento = array(
			'name'                  => 'Departamentos',
			'singular_name'         => 'Departamento',
			'menu_name'             => 'Departamento',
			'name_admin_bar'        => 'Departamento',
			'archives'              => 'Archivo del Departamento',
			'attributes'            => 'Atributos del Departamento',
			'parent_item_colon'     => 'Padre del Departamento',
			'all_items'             => 'Todos los Departamentos',
			'add_new_item'          => 'Añadir nuevo',
			'add_new'               => 'Añadir Departamento',
			'new_item'              => 'Nuevo Departamento',
			'edit_item'             => 'Editar Departamento',
			'update_item'           => 'Actualizar Departamento',
			'view_item'             => '',
			'view_items'            => '',
			'search_items'          => 'Buscar Departamento',
			'not_found'             => 'Departamento no encontrado',
			'not_found_in_trash'    => 'Departamento no encontrado en la papelera',
			'featured_image'        => '',
			'set_featured_image'    => '',
			'remove_featured_image' => '',
			'use_featured_image'    => '',
			'insert_into_item'      => 'Insertar en el Departamento',
			'uploaded_to_this_item' => 'Subido a este Departamento',
			'items_list'            => 'Lista de Items',
			'items_list_navigation' => 'Lista de navegación',
			'filter_items_list'     => 'Filtro de la lista',
		);
		$argumentos_departamento = array(
			'label'                 => 'Departamento',
			'description'           => 'Descripción del Departamento',
			'labels'                => $etiquetas_departamento,
			'supports'              => array('editor', 'custom-fields' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-building',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'departamento', $argumentos_departamento );

	}


    //Registrando la función para añadir copropietarios
    function agregarCopropietarios() {

		$etiquetas_copropietarios = array(
			'name'                  => 'Copropietarios',
			'singular_name'         => 'Copropietario',
			'menu_name'             => 'Copropietario',
			'name_admin_bar'        => 'Copropietario',
			'archives'              => 'Archivo del Copropietario',
			'attributes'            => 'Atributos del Copropietario',
			'parent_item_colon'     => 'Padre del Copropietario',
			'all_items'             => 'Todos los Copropietarios',
			'add_new_item'          => 'Añadir nuevo',
			'add_new'               => 'Añadir Copropietario',
			'new_item'              => 'Nuevo Copropietario',
			'edit_item'             => 'Editar Copropietario',
			'update_item'           => 'Actualizar Copropietario',
			'view_item'             => '',
			'view_items'            => '',
			'search_items'          => 'Buscar Copropietario',
			'not_found'             => 'Copropietario no encontrado',
			'not_found_in_trash'    => 'Copropietario no encontrado en la papelera',
			'featured_image'        => '',
			'set_featured_image'    => '',
			'remove_featured_image' => '',
			'use_featured_image'    => '',
			'insert_into_item'      => 'Insertar en el Copropietario',
			'uploaded_to_this_item' => 'Subido a este Copropietario',
			'items_list'            => 'Lista de Items',
			'items_list_navigation' => 'Lista de navegación',
			'filter_items_list'     => 'Filtro de la lista',
		);
		$argumentos_copropietario = array(
			'label'                 => 'Copropietario',
			'description'           => 'Descripción del Copropietario',
			'labels'                => $etiquetas_copropietarios,
			'supports'              => array('editor', 'custom-fields' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-businessperson',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'copropietarios', $argumentos_copropietario);

	}

   // public function agregarGenerarQr()
	function GenerarQr() {

	$etiquetas_generarqr = array(
		'name'                  => 'generarqr',
		'singular_name'         => 'Generar QR',
		'menu_name'             => 'Generar QR',
		'name_admin_bar'        => 'Generar QR',
		'archives'              => 'Archivo del QR',
		'attributes'            => 'Atributos del QR',
		'parent_item_colon'     => 'Padre del QR',
		'all_items'             => 'Todos los QR',
		'add_new_item'          => 'Añadir nuevo QR',
		'add_new'               => 'Generar QR',
		'new_item'              => 'Generar QR',
		'edit_item'             => 'Editar QR',
		'update_item'           => 'Actualizar QR',
		'view_item'             => 'Ver QR',
		'view_items'            => 'Ver QR',
		'search_items'          => 'Buscar QR',
		'not_found'             => 'QR no encontrado',
		'not_found_in_trash'    => 'QR no encontrado en la papelera',
		'featured_image'        => '',
		'set_featured_image'    => '',
		'remove_featured_image' => '',
		'use_featured_image'    => '',
		'insert_into_item'      => 'Insertar en el QR',
		'uploaded_to_this_item' => 'Subido a este QR',
		'items_list'            => 'Lista de Items',
		'items_list_navigation' => 'Lista de navegación',
		'filter_items_list'     => 'Filtro de la lista',
	);
	$capacidades_generarqr = array(
		'edit_post'             => 'editar_qr',
		'read_post'             => 'leer_qr',
		'delete_post'           => 'eliminar_qr',
		'edit_posts'            => 'editar_qr',
		'edit_others_posts'     => 'editar_otros_qr',
		'publish_posts'         => 'publicar_qr',
		'read_private_posts'    => 'leer_qr_privados',
	);
	$arguementos_generarqr = array(
		'label'                 => 'Generar QR',
		'description'           => 'Descripción del QR',
		'labels'                => $etiquetas_generarqr,
		'supports'              => array('editor', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-plus-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capabilities'          => $capacidades_generarqr,
	);
	    register_post_type( 'generarqr', $arguementos_generarqr );

    }

   // public function agregarValidadQr()
   // Register Custom Post Type
function ValidarQr() {

	$etiquetas_validarqr = array(
		'name'                  => 'validarqr',
		'singular_name'         => 'Validar QR',
		'menu_name'             => 'Validar QR',
		'name_admin_bar'        => 'Validar QR',
		'archives'              => 'Archivo de Validar QR',
		'attributes'            => 'Atributos de Validar QR',
		'parent_item_colon'     => 'Padre de Validar QR',
		'all_items'             => 'Todos los QR',
		'add_new_item'          => 'Añadir nuevo QR',
		'add_new'               => 'Validar QR',
		'new_item'              => 'Generar QR',
		'edit_item'             => 'Editar QR',
		'update_item'           => 'Actualizar QR',
		'view_item'             => '',
		'view_items'            => '',
		'search_items'          => 'Buscar QR',
		'not_found'             => 'QR no encontrado',
		'not_found_in_trash'    => 'QR no encontrado en la papelera',
		'featured_image'        => '',
		'set_featured_image'    => '',
		'remove_featured_image' => '',
		'use_featured_image'    => '',
		'insert_into_item'      => 'Insertar en el QR',
		'uploaded_to_this_item' => 'Subido a este QR',
		'items_list'            => 'Lista de Items',
		'items_list_navigation' => 'Lista de navegación',
		'filter_items_list'     => 'Filtro de la lista',
	);
	$capacidades_validarqr = array(
		'edit_post'             => 'editar_validarqr',
		'read_post'             => 'leer_validarqr',
		'delete_post'           => 'eliminar_validarqr',
		'edit_posts'            => 'editar_validarqr',
		'edit_others_posts'     => 'editar_otros_validarqr',
		'publish_posts'         => 'publicar_validarqr',
		'read_private_posts'    => 'leer_validarqr_privados',
	);
	$argumentos_validarqr = array(
		'label'                 => 'Validar QR',
		'description'           => 'Descripción de Validar QR',
		'labels'                => $etiquetas_validarqr,
		'supports'              => array('editor', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-saved',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capabilities'          => $capacidades_validarqr,
	);
	register_post_type( 'validarqr', $argumentos_validarqr );
    }

	/**
     * Maneja el guardado de las visitas, a partir de este se genera el código QR
     * 
     * @return void
     */
   public function guardarQR(int $id_generarqr, \WP_Post $visita, bool $actualizando)
    {
        // Si viene el ID del post, se está guardando, sino, es autoguardado y no queremos hacer nada
        if (empty($_POST['ID'])) return;

        if (!empty($_POST['acf'])) {
            //Obtener fecha de inicio
            $cadena_unica = array(
                'generarqr'         => $id_generarqr,
                'cantidad' => $_POST['acf']['field_61ad52a799149']
            );

            $cadena_unica = get_admin_url() . 'analizar-qr.php/=datos' . json_encode($cadena_unica);

            //Generar nuevo Qr

            $qr_id = new GenerarQR($cadena_unica);

            //Guardar el qr en los metadatos del post
            add_post_meta($id_generarqr, 'id_imagen_qr', $qr_id);

            //Mostrar el qr
           // $id_del_qr = get_post_meta($id_visita, 'id_imagen_qr', true); // [id = 1] - 1
            //get_media_item($id_del_qr);
        }
    }
}
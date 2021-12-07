<?php

class Tipos_Columnas{

    function __construct()
    {
        //agrega las columnas al cpt departamento
        //$this->agregarColumnasDepartamentos();
        add_filter( 'manage_edit-departamento_columns', [$this, ' agregarColumnasDepartamentos']);
        add_action( 'manage_departamento_posts_custom_column',  [$this, 'personalizar_contenido_columa_dpto'], 10, 2);
    }

    function agregarColumnasDepartamentos($columns){
        $columns = array(
          'cb'                       => '<input type="checkbox" />',
          'numero_del_departamento'  => 'Número del Departamento', 
          'descripcion'	             => 'Descripción'
  );
        return $columns;
    }

    function personalizar_contenido_columa_dpto( $column, $post_id ) {
        global $post;
        
      switch ($column)
      {
         case 'numero_del_departamento':
                    echo get_post_meta($post_id,'numero_del_departamento',true );
                    break;
         case 'descripcion':
                    echo get_post_meta($post_id,'descripcion', true);
                    break;
      }
    } 
    
} 
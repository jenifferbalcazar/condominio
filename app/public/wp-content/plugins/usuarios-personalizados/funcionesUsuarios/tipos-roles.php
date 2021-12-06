<?php

class Tipo_Roles{

    function __construct()
    {
         // Añadir rol copropietario
         $this->rol_copropietario();
         // Añadir rol seguridad
         $this->rol_seguridad();
         //Añade la entrada de geneerar qr al admnnistrador
         $this->rol_administrador();
         //elimina los roles que no se estan ocupando
         $this->eliminar_roles();
    }

        // Función para añadir el rol de copripietario
    //El código solo correrá una vez cuando se active el plugin gracias al register activation hook
    function rol_copropietario() {
        add_role(
            'copropietario',
            __('Copropietario', 'rol-copropietario'), 
            array( 
                'editar_qr' => true,
                'leer_qr' => true,
                'publicar_qr' => true,
                'leer_qr_privados' => true,
            )
        );
    }

    // Función para añadir el rol de seguridad
    function rol_seguridad() {
        add_role(
            'seguridad',
            __('Seguridad', 'rol-seguridad'), 
            array( 
                'editar_validarqr' => true,
                'leer_validarqr' => true,
                'eliminar_validarqr' => true,
                'publicar_validarqr' => true,
            )
        );
    }

    //Funcion para añadir al administrador las capacidades de generar QR
    function rol_administrador(){
        $administrador_rol = get_role( 'administrator' );

        // a list of plugin-related capabilities to add to the Editor role
        $capacidades_añadidas_administrador = array(
                  'leer_qr',
                  'eliminar_qr'
        ); 
        foreach ( $capacidades_añadidas_administrador as $cap ) {
            $administrador_rol->add_cap( $cap );
        }
      
    }

    function eliminar_roles(){
        remove_role( 'subscriber' );
        remove_role( 'contributor' );
        remove_role( 'author' );
        remove_role( 'editor' );
    }

}
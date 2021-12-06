<?php

/**
 * Plugin Name: Plugin para la generación de QR
 * Description: Genera un QR personalizado para cada visita que hará el copropietario
 * Author: Jeniffer Balcazar, Leonardo Guevara, Jesús Chavarria y Fanor Flores
 */

add_action('init', 'generacion_qr');

function generacion_qr()
{
    include plugin_dir_path(__FILE__) . '/funciones/generarQR.php';
    new GenerarQR($data);
}
<?php

/**
 * Plugin Name: Entradas Personalizadas para el condominio
 * Description: Añade las entradas personalizadas para el condominio
 * Author: Jeniffer Balcazar, Leonardo Guevara, Jesús Chavarria y Fanor Flores
 */

add_action('init', 'agregar_entradas_personalizadas');

function agregar_entradas_personalizadas()
{
    include plugin_dir_path(__FILE__) . '/funciones/tipos-entradas.php';
    new Tipos_Entradas;
}
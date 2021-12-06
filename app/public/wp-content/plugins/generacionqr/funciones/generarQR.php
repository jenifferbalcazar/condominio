<?php

class GenerarQR{

    private const URL_API_Generador = 'https://chart.googleapis.com/chart?cht=qr&chs=177x177&';
    //'https://chart.googleapis.com/chart?cht=qr&chs=177x177&';
    //'https://api.qrserver.com/v1/create-qr-code/'


    function __construct($data)
    {
        $url = self::URL_API_Generador . '?chl=' . get_admin_url() . $data;

        $resultado = wp_remote_get($url);

        $image64 = base64_encode($resultado['body']);

        $adjunto = $this->save_image($image64, 'Imagencita');

        return $adjunto;
    }


    /**
     * Guardar la imagen del QR en el Servidor de WP
     */
    function save_image($base64_img, $title)
    {

        // Upload dir.
        $upload_dir  = wp_upload_dir();
        $upload_path = str_replace('/', DIRECTORY_SEPARATOR, $upload_dir['path']) . DIRECTORY_SEPARATOR;

        $img             = str_replace('data:image/png;base64,', '', $base64_img);
        $img             = str_replace(' ', '+', $img);
        $decoded         = base64_decode($img);
        $filename        = $title . '.png';
        $file_type       = 'image/png';
        $hashed_filename = md5($filename . microtime()) . '_' . $filename;

        // Save the image in the uploads directory.
        $upload_file = file_put_contents($upload_path . $hashed_filename, $decoded);

        $attachment = array(
            'post_mime_type' => $file_type,
            'post_title'     => preg_replace('/\.[^.]+$/', '', basename($hashed_filename)),
            'post_content'   => 'QR autogenerado para visitas',
            'post_status'    => 'inherit',
            'guid'           => $upload_dir['url'] . '/' . basename($hashed_filename)
        );

        $adjunto = wp_insert_attachment($attachment, $upload_dir['path'] . '/' . $hashed_filename);

        return $adjunto;
    }
}


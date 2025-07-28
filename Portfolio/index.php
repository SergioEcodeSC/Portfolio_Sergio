<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$head = array(
	'title' => 'Desarrollador web - Front-end, Sergio Castro',
	'description' => 'Diseñador y desarrollador front-end especializado en crear experiencias digitales atractivas, rápidas y accesibles',
	'og_site_name' => 'Sergio Castro',
	'og_title' => 'Desarrollador web - Front-end, Sergio Castro',
	'og_description' => 'Diseñador y desarrollador front-end especializado en crear experiencias digitales atractivas, rápidas y accesibles',
	'og_type' => 'website',
	'og_url' => 'https://www.sergiocastro.dev/',
	'og_image' => '',
	'og_image_secure_url' => '',
	'og_image_width' => '1200',
	'og_image_height' => '630',
	'og_image_alt' => 'Logotipo Sergio Castro',
	'og_image_type' => 'image/jpeg',
	'og_locale' => 'es_ES',
);


    include_once( 'header.php' );
    include_once( 'templates\portada\section-main' );
    include_once('footer.php');

?>
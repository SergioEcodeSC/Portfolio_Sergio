<?php

if ( !empty( $head['title'] ) ) {

?>
<title><?php echo $head['title']; ?></title> <!--Titulo de la página-->
<?php

}

if ( !empty( $head['description'] ) ) {

?>
<meta name="description" content="<?php echo $head['description'] ?>"/> <!--Descripción de la pagina-->
<?php

}

if ( !empty( $head['og_site_name'] ) ) {

?>
<meta property="og:site_name" content="<?php echo $head['og_site_name']; ?>"> <!--Nombre del sitio web al que pertenece la página -->
<?php

}

if ( !empty( $head['og_title'] ) ) {

?>
<meta property="og:title" content="<?php echo $head['og_title']; ?>"> <!--Titulo personalizado para cuando la URL se comparte en redes sociales -->
<?php

}

if ( !empty( $head['og_description'] ) ) {

?>
<meta property="og:description" content="<?php echo $head['og_description']; ?>"> <!--Descripción que aparece en el preview de la URL de las redes sociales-->
<?php

}

if ( !empty( $head['og_type'] ) ) {

?>
<meta property="og:type" content="<?php echo $head['og_type']; ?>"> <!--Tipo de contenido de la pagina-->
<?php

}

if ( !empty( $head['og_url'] ) ) {

?>
<meta property="og:url" content="<?php echo $head['og_url']; ?>"> <!--URL canónica que se usará al compartir-->
<?php

}

if ( !empty( $head['og_image'] ) ) {

?>
<meta property="og:image" content="<?php echo $head['og_image']; ?>"> <!--URL de la imagen que se mostrará en el preview de redes sociales.-->
<?php

}

if ( !empty( $head['og_image_secure_url'] ) ) {

?>
<meta property="og:image:secure_url" content="<?php echo $head['og_image_secure_url']; ?>"> <!--Versión HTTPS de la imagen.-->
<?php

}

if ( !empty( $head['og_image_width'] ) ) {

?>
<meta property="og:image:width" content="<?php echo $head['og_image_width']; ?>"> <!--Dimensiones de la imagen en píxeles-->
<?php

}

if ( !empty( $head['og_image_height'] ) ) {

?>
<meta property="og:image:height" content="<?php echo $head['og_image_height']; ?>"> <!--Dimensiones de la imagen en píxeles-->
<?php

}

if ( !empty( $head['og_image_alt'] ) ) {

?>
<meta property="og:image:alt" content="<?php echo $head['og_image_alt']; ?>"> <!--Texto alternativo de la imagen-->
<?php

}

if ( !empty( $head['og_image_type'] ) ) {

?>
<meta property="og:image:type" content="<?php echo $head['og_image_type']; ?>"> <!--Formato de la imagen-->
<?php

}

if ( !empty( $head['og_locale'] ) ) {

?>
<meta property="og:locale" content="<?php echo $head['og_locale']; ?>"> <!--Idioma, región de la página-->

<?php

}

?>
<meta name="twitter:card" content="summary_large_image"/> <!--Define el tipo de tarjeta. "summary_large_image" muestra imagen grande.-->
<meta name="twitter:creator" content="@NicaliaHosting"/> <!--Asocian el contenido al autor (creator) y al sitio oficial (site) en Twitter.-->
<meta name="twitter:site" content="@NicaliaHosting"/> <!--Asocian el contenido al autor (creator) y al sitio oficial (site) en Twitter.-->
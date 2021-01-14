<!DOCTYPE html>
<html <?php language_attributes(); ?> <head>
<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="main-header">
    <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
  </header>
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">Tiervermittlung
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Hunde</a>
        <a href="#">Katzen</a>
        <a href="#">Kleintiere</a>
        <a href="#">Hinweise zur Vermittlung</a>
        <a href="#">Erfolgreiche Vermittlungen</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Tierheim
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Team</a>
        <a href="#">Ehrenamtliche</a>
        <a href="#">Kontakt</a>
        <a href="#">Informationen und Rundschau</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn">Mitglied werden
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Team</a>
        <a href="#">Ehrenamtliche</a>
        <a href="#">Kontakt</a>
        <a href="#">Informationen und Rundschau</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn">Helfen Sie uns!
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Team</a>
        <a href="#">Ehrenamtliche</a>
        <a href="#">Kontakt</a>
        <a href="#">Informationen und Rundschau</a>
      </div>  
    </div>
  </div>
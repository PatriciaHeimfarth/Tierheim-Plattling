<!DOCTYPE html>
<html <?php language_attributes(); ?> <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vermittlung
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/allgemeines">Allgemeines</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/hunde">Hunde</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/katzen">Katzen</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/kleintiere">Kleintiere</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/von-privat">Von Privat</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/schutzgebuehr">Schutzgebühr</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/ablauf-der-vermittlung">Ablauf der Vermittlung</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/tiere-im-glueck">Tiere im Glück</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
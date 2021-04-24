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
    <a class="navbar-brand" href="<?php echo get_bloginfo('url') ?>/">Home</a>
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
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vermisst und Gefunden
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/fundtiere">Fundtiere</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/vermisste-tiere">Vermisste Tiere</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/vermisstes-tier-melden">Vermisstes Tier melden</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/datenschutz">Datenschutz</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tierheim
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/der-verein">Der Verein</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/mitarbeiter">Unser Team</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/der-vorstand">Der Vorstand</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/ehrenamtliche">Unsere Ehrenamtlichen</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/gassigehen">Gassigehen</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/patenschaften">Patenschaften</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/jugendgruppe">Jugendgruppe</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Spenden und Helfen
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/mitglied-werden">Mitglied werden</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/spenden">Spenden</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/wunschzettel">Wunschliste Amazon und mehr</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/patenschaften">Patenschaften</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/ehrenamtlich-helfen">Ehrenamtlich helfen</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kontakt
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/oeffnungszeiten">Öffnungszeiten</a>
            <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/anfahrtskizze">Anfahrtskizze</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_bloginfo('url') ?>/impressum">Impressum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_bloginfo('url') ?>/datenschutz">Datenschutzerklärung</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
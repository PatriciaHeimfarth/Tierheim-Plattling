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
      <button class="dropbtn" onclick="location.href='<?php echo esc_url(home_url('/')); ?>'">Home
        <i class="fa fa-caret-down"></i>
      </button>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Vermittlung
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
      <a href="./hunde">Allgemeines</a>
        <a href="./hunde">Hunde</a>
        <a href="./katzen">Katzen</a>
        <a href="./kleintiere">Kleintiere</a>
        <a href="./notfaelle">Von Privat</a>
        <a href="./platz-zu-platz">Schutzgebühr</a>
        <a href="./hinweise-zur-vermittlung">Ablauf der Vermittlung</a>
        <a href="./erfolgreiche-vermittlungen">Tiere im Glück</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Vermisst und Gefunden
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./mitarbeiter">Fundtiere</a>
        <a href="./ehrenamtliche">Vermisste Tiere</a>
        <a href="./verein">Vermisstes Tier melden</a>
        <a href="./kontakt">Datenschutz</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn">Tierheim
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./antrag-mitgliedschaft">Der Verein</a>
        <a href="./adressänderung">Unser Team</a>
        <a href="./satzung">Der Vorstand</a>
        <a href="./satzung">Unsere Ehrenamtlichen</a>
        <a href="./satzung">Gassigehen</a>
        <a href="./satzung">Patenschaften</a>
        <a href="./satzung">Jugendgruppe</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn">Spenden und Helfen
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./informationen-mitgliedschaft">Mitglied werden</a>
        <a href="./spenden">Spenden</a>
        <a href="./wunschzettel">Wunschliste Amazon und mehr</a>
        <a href="./ehrenamtliche">Patenschaften</a>
        <a href="./paten">Ehrenamtlich helfen</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="location.href='./kontakt'">Kontakt
        <i class="fa fa-caret-down"></i>
      </button>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="location.href='./impressum'">Impressum
        <i class="fa fa-caret-down"></i>
      </button>
    </div>
  </div>
  <br>
  <br>
  <br>
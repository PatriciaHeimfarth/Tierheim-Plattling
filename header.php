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
        <a href="./hunde">Hunde</a>
        <a href="./katzen">Katzen</a>
        <a href="./kleintiere">Kleintiere</a>
        <a href="./notfaelle">Notfälle</a>
        <a href="./platz-zu-platz">Platz-zu-Platz</a>
        <a href="./hinweise-zur-vermittlung">Hinweise zur Vermittlung</a>
        <a href="./erfolgreiche-vermittlungen">Erfolgreiche Vermittlungen</a>
        <a href="./regenbogenland">Regenbogenland</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Über das Tierheim
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./team">Team</a>
        <a href="./ehrenamtliche">Ehrenamtliche</a>
        <a href="./verein">Der Verein</a>
        <a href="./kontakt">Kontakt</a>
        <a href="./film">In Film und Farbe</a>
        <a href="./jugendgruppe">Tierschutz-Jugendgruppe</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn">Für Mitglieder
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./antrag-mitgliedschaft">Zum Antrag</a>
        <a href="./adressänderung">Namens- und Adressänderung</a>
        <a href="./satzung">Satzung</a>
      </div>  
    </div>
    <div class="dropdown">
      <button class="dropbtn">Helfen Sie uns!
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./informationen-mitgliedschaft">Mitglied werden</a>
        <a href="./spenden">Spenden</a>
        <a href="./wunschzettel">Wunschzettel und mehr</a>
        <a href="./ehrenamtliche">Ehrenamtliche</a>
        <a href="./paten">Paten für die Tiere</a>
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
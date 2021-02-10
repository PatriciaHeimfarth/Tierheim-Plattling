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
        <a href="./allgemeines">Allgemeines</a>
        <a href="./hunde">Hunde</a>
        <a href="./katzen">Katzen</a>
        <a href="./kleintiere">Kleintiere</a>
        <a href="./von-privat">Von Privat</a>
        <a href="./schutzgebühr">Schutzgebühr</a>
        <a href="./ablauf-der-vermittlung">Ablauf der Vermittlung</a>
        <a href="./tiere-im-glueck">Tiere im Glück</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Vermisst und Gefunden
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./fundtiere">Fundtiere</a>
        <a href="./vermisste-tiere">Vermisste Tiere</a>
        <a href="./vermisstes-tier-melden">Vermisstes Tier melden</a>
        <a href="./datenschutz">Datenschutz</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Tierheim
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./der-verein">Der Verein</a>
        <a href="./unser-team">Unser Team</a>
        <a href="./der-vorstand">Der Vorstand</a>
        <a href="./unsere-ehrenamtlichen">Unsere Ehrenamtlichen</a>
        <a href="./gassigehen">Gassigehen</a>
        <a href="./patenschaften">Patenschaften</a>
        <a href="./jugendgruppe">Jugendgruppe</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Spenden und Helfen
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./mitglied-werden">Mitglied werden</a>
        <a href="./spenden">Spenden</a>
        <a href="./wunschzettel">Wunschliste Amazon und mehr</a>
        <a href="./patenschaften">Patenschaften</a>
        <a href="./ehrenamtliche">Ehrenamtlich helfen</a>
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
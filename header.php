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
        <a href= "<?php echo get_bloginfo('url') ?>/allgemeines">Allgemeines</a>
        <a href="<?php echo get_bloginfo('url') ?>/hunde">Hunde</a>
        <a href="<?php echo get_bloginfo('url') ?>/katzen">Katzen</a>
        <a href="<?php echo get_bloginfo('url') ?>/kleintiere">Kleintiere</a>
        <a href="<?php echo get_bloginfo('url') ?>/von-privat">Von Privat</a>
        <a href="<?php echo get_bloginfo('url') ?>/schutzgebuehr">Schutzgebühr</a>
        <a href="<?php echo get_bloginfo('url') ?>/ablauf-der-vermittlung">Ablauf der Vermittlung</a>
        <a href="<?php echo get_bloginfo('url') ?>/tiere-im-glueck">Tiere im Glück</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Vermisst und Gefunden
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?php echo get_bloginfo('url') ?>/fundtiere">Fundtiere</a>
        <a href="<?php echo get_bloginfo('url') ?>/vermisste-tiere">Vermisste Tiere</a>
        <a href="<?php echo get_bloginfo('url') ?>/vermisstes-tier-melden">Vermisstes Tier melden</a>
        <a href="<?php echo get_bloginfo('url') ?>/datenschutz">Datenschutz</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Tierheim
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?php echo get_bloginfo('url') ?>/der-verein">Der Verein</a>
        <a href="<?php echo get_bloginfo('url') ?>/unser-team">Unser Team</a>
        <a href="<?php echo get_bloginfo('url') ?>/der-vorstand">Der Vorstand</a>
        <a href="<?php echo get_bloginfo('url') ?>/unsere-ehrenamtlichen">Unsere Ehrenamtlichen</a>
        <a href="<?php echo get_bloginfo('url') ?>/gassigehen">Gassigehen</a>
        <a href="<?php echo get_bloginfo('url') ?>/patenschaften">Patenschaften</a>
        <a href="<?php echo get_bloginfo('url') ?>/jugendgruppe">Jugendgruppe</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Spenden und Helfen
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?php echo get_bloginfo('url') ?>/mitglied-werden">Mitglied werden</a>
        <a href="<?php echo get_bloginfo('url') ?>/spenden">Spenden</a>
        <a href="<?php echo get_bloginfo('url') ?>/wunschzettel">Wunschliste Amazon und mehr</a>
        <a href="<?php echo get_bloginfo('url') ?>/patenschaften">Patenschaften</a>
        <a href="<?php echo get_bloginfo('url') ?>/ehrenamtliche">Ehrenamtlich helfen</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Kontakt
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?php echo get_bloginfo('url') ?>/oeffnungszeiten">Öffnungszeiten</a>
        <a href="<?php echo get_bloginfo('url') ?>/anfahrtskizze">Anfahrtskizze</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="location.href='<?php echo get_bloginfo('url') ?>/impressum'">Impressum
        <i class="fa fa-caret-down"></i>
      </button>
    </div>
  </div>
  <br>
  <br>
  <br>
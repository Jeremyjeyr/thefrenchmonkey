<?php
define( 'THEME_PATH' ,          get_template_directory()            );
define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/images'       );
define( 'JS_URL' ,              THEME_URL .    '/scripts'      );
define( 'FAVICONS_URL' ,        THEME_URL .    '/favicon'      );
define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'        );


foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
  include_once $file;
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

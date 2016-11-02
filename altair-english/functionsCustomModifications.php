<?php

// Custom modification

/* Changed in inc/functions.php

 $default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s.', 'ample' ), date( 'Y' ), $site_link ).' '.sprintf( __( 'Powered by %s.', 'ample' ), $wp_link ).' '.sprintf( __( 'Theme: %1$s by %2$s.', 'ample' ), 'Ample', $tg_link );
 
 ** to **


  $default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s.', 'ample' ), date( 'Y' ), $site_link );

  ** this was done in order to remove theme information **

?>
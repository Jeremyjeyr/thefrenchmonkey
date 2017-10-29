<?php get_header(); //appel du template header.php  ?>

<section id="content">
    <?php
    $args= array(
    'post_type' => 'everydays',
    'posts_per_page' => 1
  );
  $the_query = new WP_Query( $args );
    ?>

<?php get_footer(); //appel du template footer.php ?>

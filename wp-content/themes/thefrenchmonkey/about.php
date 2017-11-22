<?php /* Template Name: About*/?>
<?php get_header(); ?>
<section class="container">
    <?php
    $image = get_field('photo');

   if( !empty($image) ): ?>

     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="portrait"/>

   <?php endif; ?>

   <div class="pashou">
     <h1><?php the_field('pashou'); ?></h1>
   </div>

    <div class="paragraphs">
      <?php
        // boucle WordPress
        // The Query
        $args = array( 'post_type'=>'page' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
    ?>

    <div class="paragraph">
      <h1 class="title"><?php the_field('title'); ?></h1>
      <p class="text"><?php the_field('text'); ?></p>
    </div>

    <div class="paragraph">
      <h1 class="title"><?php the_field('title2'); ?></h1>
      <p class="text"><?php the_field('text2'); ?></p>
    </div>

    <div class="paragraph">
      <h1 class="title"><?php the_field('title3'); ?></h1>
      <p class="text"><?php the_field('text3'); ?></p>
    </div>


    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>



    </div>
</section>

<?php get_footer(); ?>

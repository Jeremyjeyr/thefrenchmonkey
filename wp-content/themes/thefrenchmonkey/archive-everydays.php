<?php get_header(); //appel du template header.php  ?>
<div class="container">
<section>
<h1 class="vertical_title">Render of the day</h1>
  <?php
  $args1 = array(
  'post_type' => 'everydays',
  'posts_per_page' => 1
);
  $args2 = array(
'post_type' => 'everydays',
);
// The Query
$everyday1 = new WP_Query( $args1 );
$everyday2 = new WP_Query( $args2 );

// Render of the day
if ( $everyday1->have_posts() ) {
 while ( $everyday1->have_posts() ) {
   $everyday1->the_post();

   $date = get_field('everydays_date');
   $date = new DateTime($date);
    ?>

    <article>
     <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">[<?php echo $date->format('d-m-y'); ?>]-<?php the_field('title');?></a></h2>

     <?php // Affichage des logiciels utilisés
     $terms = get_field('software');
     if( $terms ): ?>

       <ul>
       <?php foreach( $terms as $term ): ?>
         <p><?php echo $term->name; ?></p>
       <?php endforeach; ?>
       </ul>

     <?php endif; ?>

     <h3>Renderer</h3
     <?php // Affichage du renderer utilisé
     $terms = get_field('renderer');
     if( $terms ): ?>

       <ul>
       <?php foreach( $terms as $term ): ?>
         <p><?php echo $term->name; ?></p>
       <?php endforeach; ?>
       </ul>

     <?php endif; ?>


     <?php // Affichage de l'image

     $image = get_field('image');

     if( !empty($image) ): ?>

       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="col-sm-5"/>

     <?php endif; ?>
   </article>
   <?php
 }
  /* Restore original Post Data */
             wp_reset_postdata();
} else {
 // no posts found
}
 ?>
</section>
<?php get_footer(); //appel du template footer.php ?>

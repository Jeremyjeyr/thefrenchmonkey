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
'post_type' => 'animation',
'posts_per_page' => 8,
'tax_query' => array(
	array(
		'taxonomy' => 'format',
		'field'    => 'slug',
		'terms'    => 'facebook'
	),
));
$args3 = array(
'post_type' => 'animation',
'posts_per_page' => 2,
'tax_query' => array(
array(
  'taxonomy' => 'format',
  'field'    => 'slug',
  'terms'    => 'vimeo'
),
));
// The Query
$everyday = new WP_Query( $args1 );
$animation = new WP_Query( $args2 );
$animation16_9 = new WP_Query( $args3 );

// Render of the day -> Everyday
if ( $everyday->have_posts() ) {
 while ( $everyday->have_posts() ) {
   $everyday->the_post();

   $date = get_field('everydays_date');
   $date = new DateTime($date);
    ?>

    <article>
     <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">[<?php echo $date->format('d-m-y'); ?>]-<?php the_field('title'); ?></a></h2>

     <!-- <?php // Affichage des logiciels utilisés
     $terms = get_field('software');
     if( $terms ): ?>

       <ul>
       <?php foreach( $terms as $term ): ?>
         <p><?php echo $term->name; ?></p>
       <?php endforeach; ?>
       </ul>

     <?php endif; ?>


     <?php // Affichage du renderer utilisé
     $terms = get_field('renderer');
     if( $terms ): ?>

       <ul>
       <?php foreach( $terms as $term ): ?>
         <p><?php echo $term->name; ?></p>
       <?php endforeach; ?>
       </ul>

     <?php endif; ?> -->


     <?php // Affichage de l'image

     $image = get_field('image');

     if( !empty($image) ): ?>

       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="col-sm-5"/>

     <?php endif; ?>

<?php
$file = get_field('project_file');

if( $file ): ?>

	<a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?>[<?php echo $date->format('d-m-y'); ?>]</a>

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
</div>
<div class="container">
  <section>
    <?php
    // animation
    if ( $animation->have_posts() ) {
     while ( $animation->have_posts() ) {
       $animation->the_post();
       // TO DO : A trier selon animation carré ou pas
    ?>
    <?php $animation_url = get_field('animation_url'); ?>
      <iframe class="col-sm-10" src="<?php echo $animation_url ?>" width="380" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

    <?php
  }
   /* Restore original Post Data */
              wp_reset_postdata();
  } else {
  // no posts found
  }
  ?>
  </section>
</div>
<?php get_footer(); //appel du template footer.php ?>

<?php /* Template Name: Home*/?>
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
)
);
$args4 = array(
'post_type' => 'freebies',
'posts_per_page' => 1
);
$args5 = array(
'post_type' => 'bundles',
'posts_per_page' => 1
);
// The Query
$everyday = new WP_Query( $args1 );
$animation = new WP_Query( $args2 );
$animation16_9 = new WP_Query( $args3 );
$freebies = new WP_Query( $args4 );
$bundles = new WP_Query( $args5 );

// Render of the day -> Everyday
if ( $everyday->have_posts() ) {
 while ( $everyday->have_posts() ) {
   $everyday->the_post();

   $date = get_field('everydays_date');
   $date = new DateTime($date);
    ?>

    <article>

     <?php // Affichage de l'image

     $image = get_field('image');

     if( !empty($image) ): ?>

       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="col-sm-5"/>

     <?php endif; ?>

<?php
$file = get_field('project_file');

if( $file ): ?>

	<h2><a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?>[<?php echo $date->format('d-m-y'); ?>]-<?php the_field('title');?></a></h2>

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
      <iframe class="col-sm-3" src="<?php echo $animation_url ?>" width="380" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
    <?php
  }
   /* Restore original Post Data */
              wp_reset_postdata();
  } else {
  // no posts found
  }
  ?>
  <?php
  // animation
  if ( $animation16_9->have_posts() ) {
   while ( $animation16_9->have_posts() ) {
     $animation16_9->the_post();
     // TO DO : A trier selon animation carré ou pas
  ?>
  <?php $animation_url = get_field('animation_url'); ?>
  <iframe class="col-sm-6" src="<?php echo $animation_url ?>" width="380" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

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
if ( $freebies->have_posts() ) {
 while ( $freebies->have_posts() ) {
   $freebies->the_post();
   // TO DO : A trier selon animation carré ou pas
?>
<?php // Affichage de l'image

$image = get_field('image');

if( !empty($image) ): ?>

  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

<?php endif; ?>
<?php
}
/* Restore original Post Data */
          wp_reset_postdata();
} else {
// no posts found
}
?>

<h3><?php the_field('h3') ?></h3>
<p><?php the_field('p') ?></p>
<h3><?php the_field('h3_2') ?></h3>

  </section>
</div>
<div class="container">
<section>
  <?php // Affichage de l'image

  $imagephoto = get_field('image_photo');

  if( !empty($imagephoto) ): ?>
  <img src="<?php echo $imagephoto['url']; ?>" alt="<?php echo $imagephoto['alt']; ?>"/>
<?php endif; ?>

<h3><?php the_field('h3_3') ?></h3>
<p><?php the_field('p2') ?></p>

  </section>
</div>
<?php get_footer(); //appel du template footer.php ?>

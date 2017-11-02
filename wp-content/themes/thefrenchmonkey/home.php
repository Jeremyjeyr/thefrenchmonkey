<?php get_header(); //appel du template header.php  ?>
<div class="container">
<section>
<h1 class="vertical_title">Render of the day</h1>
  <?php
  $args= array(
  'post_type' => 'everydays',
  'posts_per_page' => 1
);
// The Query
$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
	}
} else {
	// no posts found
}

 ?>
 <!-- TITRE -->
  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_field('title'); ?></a></h2>

  <?php // Affichage des logiciels utilisés
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

  <?php endif; ?>


  <?php // Affichage de l'image

  $image = get_field('image');

  if( !empty($image) ): ?>

  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="col-sm-5"/>

  <?php endif; ?>


</section>
<?php get_footer(); //appel du template footer.php ?>

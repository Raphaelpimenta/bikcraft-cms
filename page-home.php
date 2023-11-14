<?php
// Template Name: Home
?>
<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 

	$imagem_id = get_field('background_home');
	$background_large = wp_get_attachment_image_src($imagem_id, 'large');
	$background_medium = wp_get_attachment_image_src($imagem_id, 'medium');

?>

<style type="text/css">
	.introducao{
		/* background: url("<?php echo $background_large[0];?>") no-repeat center; */
		background: url("<?php the_field('background_home');?>") no-repeat center;
		background-size: cover;
	}
/* @media only screen and (max-width: 767px){
	.introducao{
		background: url("<?php the_field('background_home');?>") no-repeat center;
		background-size: cover;
	}
} */

</style>

		<section class="introducao">
			<div class="container">
				<h1><?php the_field('titulo_introducao') ?></h1>
				<blockquote class="quote-externo">
					<p><?php the_field('descricao_introducao') ?></p>
					<cite><?php the_field('cite_introducao') ?></cite>
				</blockquote>
				<a href="/produtos/" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

			<?php
				$args = array (
					'post_type' => 'produtos',
					'order'   => 'ASC'
				);
				$the_query = new WP_Query ( $args );
			?>

			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li class="grid-1-3">
				<a href="<?php the_permalink();?>">
				<div class="produtos_icone">
					<img src="<?php the_field('icone_produtos');?>" alt="Bikcraft Passeio">
				</div>
				<h3><?php the_title()?></h3>
				<p><?php the_field('produtos_descricao_lista')?></p>
				</a>
				</li>
			<?php endwhile; else: endif; ?>
				

			</ul>

			<div class="call">
				<p><?php the_field('chamar_produtos')?></p>
				<a href="<?php bloginfo('url'); ?>/produtos/" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>
				<?php include(TEMPLATEPATH . './inc/imagens-portfolio.php')?>
			</div>
		</section>

		
		<?php include(TEMPLATEPATH . './inc/qualidade.php')?>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
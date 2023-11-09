<?php
// Template Name: Portfolio
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<?php include(TEMPLATEPATH . "./inc/introducao.php") ?>

		<section class="container animar-interno">
			<ul class="rslides">

			<?php $frase_portfolio = get_field('frase_portfolio');
    		if(isset($frase_portfolio)) { foreach($frase_portfolio as $frase){ ?>
				<li>
					<blockquote class="quote_clientes">
						<p><?php echo $frase['texto_cliente']; ?></p>
						<cite><?php echo $frase['nome_cliente']; ?></cite>
					</blockquote>
				</li>

			<?php } }?>

			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . './inc/imagens-portfolio.php')?>
			</div>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
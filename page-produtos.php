<?php
// Template Name: Produtos
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php include(TEMPLATEPATH . "./inc/introducao.php") ?>

		<?php
			$args = array (
				'post_type' => 'produtos',
				'order'   => 'ASC'
			);
			$the_query = new WP_Query ( $args );
		?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<a href="<?php the_permalink();?>" target="_blank">
				<section class="container produto_item animar-interno">
				<div class="grid-11">
					<img src="<?php the_field('imagem_produtos1');?>" alt="Bikcraft <?php the_title();?>">
					<h2><?php the_field('titulo_produtos');?></h2>
				</div>
				<div class="grid-5 produto_icone">
					<img src="<?php the_field('icone_produtos');?>" alt="Bikcraft <?php the_title();?>">
				</div>
			</a>
			
		</section>

		<?php endwhile; else: endif; ?>

		

		<?php include(TEMPLATEPATH . "./inc/produtos-orcamento.php") ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
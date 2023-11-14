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
			<!-- <h1><?php the_title(); ?></h1> -->
			<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="<?php the_field('imagem_produtos1');?>" alt="Bikcraft <?php the_title();?>">
				<h2><?php the_field('titulo_produtos');?></h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php the_field('icone_produtos');?>" alt="Bikcraft <?php the_title();?>">
			</div>
			<div class="grid-8">
				<img src="<?php the_field('imagem_produtos2');?>" alt="Bikcraft <?php the_title();?>">
			</div>
			<div class="grid-8 produto_info">
               
				<p><?php the_field('texto_produtos');?></p>
				<ul>
					
					<li><?php the_field('lista_item1')?></li>
					<li><?php the_field('lista_item2')?></li>
					<li><?php the_field('lista_item3')?></li>
					<li><?php the_field('lista_item4')?></li>
				</ul>
                
			</div>
		</section>

		<?php endwhile; else: endif; ?>

		

		<?php include(TEMPLATEPATH . "./inc/produtos-orcamento.php") ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
<?php
// Template Name: Produtos
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php include(TEMPLATEPATH . "./inc/introducao.php") ?>

		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
				<h2>Passeio</h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="img/produtos/passeio.png" alt="Icone Passeio">
			</div>
			<div class="grid-8">
				<img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
			</div>
			<div class="grid-8 produto_info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Praticidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/esporte.png" alt="Icone Esporte"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte"></div>
			<div class="grid-8 produto_info">
				<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desenpenho supera qualquer uma da categoria.</p>
				<ul>
					<li>Precisão</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô">
				<h2>Retrô</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="img/produtos/retro.png" alt="Icone Retrô"></div>
			<div class="grid-8"><img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô"></div>
			<div class="grid-8 produto_info">
				<p>O passado volta para lembrarmos o que devemos fazer no futuro. A Bikcraft Retrô é uma bicicleta estiloza, feita para você que gosta do clássico, mas que não abre mão do conforto.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<?php include(TEMPLATEPATH . "./inc/produtos-orcamento.php") ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
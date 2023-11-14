<?php
// Template Name: Single Produtos
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

		<?php include(TEMPLATEPATH . "./inc/produtos-orcamento.php") ?>
		<!-- <section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<form action="enviar.php" method="post" name="form" class="formphp form grid-8">
					<label for="nome">Nome</label>
					<input id="nome" name="nome" type="text">
					<label for="email">E-mail</label>
					<input id="email" name="email" type="text">
					<label for="telefone">Telefone</label>
					<input id="telefone" name="telefone" type="text">

					<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
					<input type="text" class="nao-aparece" name="leaveblank">
					<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
					<input type="text" class="nao-aparece" name="dontchange" value="http://" >

					<label for="mensagem">Especificações</label>
					<textarea name="mensagem" id="mensagem"></textarea>

					<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
				</form>
				<div class="orcamento_dados grid-8">
				<?php $contato = get_page_by_title('contato')->ID?>
					<h3>Dados</h3>
					<span><?php the_field('telefone', $contato);?></span>
					<span><?php the_field('email', $contato);?></span>
					<h3>Monte a sua Bikcraft</h3>
					<p>Escolha as especificações:</p>
					<ul>
						<li>- Cores</li>
    				<li>- Estilo</li>
    				<li>- Medidas</li>
   					<li>- Acessórios</li>
    				<li>- E Outros</li>
					</ul>
				</div>
			</div>
		</section> -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
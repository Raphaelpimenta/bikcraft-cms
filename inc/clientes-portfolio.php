<?php $portfolio = get_page_by_title('portfolio')->ID?>
<ul class="portfolio_lista rslides_portfolio">

    <li>
        <div class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
        <div class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
        <div class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
    </li>

    <li>
        <div class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
        <div class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
        <div class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
</li>

</ul>

<?php if (!is_page('portfolio')) { ?>
<div class="call">
	<p><?php the_field('chamada_portfolio', $portfolio); ?></p>
	<a href="/portfolio/" class="btn">Portfólio</a>
</div>
<?php } ?>
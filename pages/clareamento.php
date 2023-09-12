<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Clareamento Dental</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/clareamento.jpg"></div>

			<p>O clareamento dental tem ganhado uma relevante importância na odontologia atual, já que a estética é fundamental para a sobrevivência social e as relações de trabalho. Hoje, dentes bem posicionados, brancos e perfeitos deixaram de ser puramente vaidade humana para tornar-se uma necessidade do cotidiano. Com o passar do tempo, os dentes sofrem influência de várias substâncias, sendo agredidos em maior ou menor grau, comprometendo sua integridade biológica e alterando sua estrutura, independente da intensidade e origem da agressão.<br><br> As modificações notadas a olho nu possuem duas principais fontes, as exógenas e as endógenas. Dentre as exógenas destacam-se: manchas causadas por alimentos (chá, café, mate, bebidas com corantes artificiais), acúmulo de placa, bactérias cromógenas, tabaco, além das restaurações em amálgama. Manchas provenientes de fatores externos são combatidas, na maioria dos casos, com agentes tópicos, aplicados diretamente na superfície dental. Dentre as endógenas, pode-se ressaltar: hipoplasia de esmalte, eritroblastose fetal, amelogênese imperfeita, hipocalcificação do esmalte, dentinogênese imperfeita, porfiria, hemorragia da polpa, icterícia, medicamentos (tetraciclinas e flúor)</p>
			<br>
			<p><b>Indicação e contra-indicação</b></p>
			<br>
			<p>O clareamento dentário é <b>contra-indicado</b> em dentes que apresentam hipersensibilidade, ou seja, presença de túbulos dentários expostos, não devendo ser submetidos ao tratamento simplesmente pelo fato de permitirem maior difusão dos agentes oxidantes.<br><br>O clareamento é <b>indicado</b> para as manchas fluoróticas, sendo que as marrons respondem melhor ao tratamento, sorrisos escurecidos fisiologicamente, dentes pigmentados por café, chá, fumo, vinho ou outros corantes.</p>
		</div>
	</div><!--contato-container-->

	<div class="consulta-content">
		<div class="center">
			<div class="form w50 left">
				<div class="text">
					<span>Solicite uma consulta</span>
					<p>Preencha os campos abaixo para marcar sua consulta via WhatsApp!</p>
				</div>
				<form>
					<input type="text" name="nome" placeholder="Nome" required>
					<div></div>
					<input type="tel" name="telefone" placeholder="Número de contato" required>
					<div></div>
					<textarea placeholder="Seu motivo para consulta" name="mensagem" required></textarea>
					<div></div>
					<input class="form-enviar" type="submit" name="acao" value="AGENDAR">
				</form>
			</div>
			<div class="servicos-map w50 left">
				<div id="map"></div>
			</div>
			<div class="clear"></div>
		</div>
		
	</div>
</section>
<script>
        new WOW().init();
        $(".form-enviar").click(function() {
		var arrayForm = $('form').serializeArray();
		var redirectWindow = window.open('https://wa.me/557532216004?text=Gostaria%20de%20marcar%20uma%20consulta%21%0A%0ANome%3A%20'+arrayForm[0].value+'%0ATelefone%3A%20'+arrayForm[1].value+'%0AMotivo%3A%20'+arrayForm[2].value+'', '_blank');
    	redirectWindow.location;
	});
</script>
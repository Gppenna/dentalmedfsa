<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Implantodontia</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/implantodontia.jpg"></div>

			<p>Implantodontia é um ramo da Odontologia que se destina ao tratamento do edentulismo com reabilitações protéticas suportadas ou retidas por implantes dentários. No Brasil, diferentemente de outros países é uma Especialidade da Odontologia RESOLUÇÃO CFO 168/90.<br><br> Tem como objetivo a implantação na mandíbula e na maxila, de materiais e mui aloplásticos destinados a suportar próteses unitárias, parciais ou removíveis e próteses totais e parciais.Ao redor do titânio ocorre a osseointegração que é caracterizada pela formação de tecido ósseo que irá incorporar este material ao organismo. E, é extremamente importante, que o tecido ósseo mantenha-se preservado mesmo quanto o implante dentário seja submetido aos esforços mastigatórios.<br><br> A integração óssea deve-se a incapacidade do nosso organismo em detectar o titânio intra-ósseo; devido a suas características bio-inertes (ao se expor ao ar, a superfície do titânio se transforma em óxido de Ti), não acontece a formação de tecido fibroso em volta do implante, permitindo assim o crescimento ósseo ao redor do mesmo, estando em contato íntimo osso e implante. <br><br>Com a Implantodontia são feitas desde reabilitações unitárias ate grandes reabilitações totais fixas ou removíveis. Entre 3 e 6 meses após a instalação do implante de titânio pode ser iniciada a prótese. Um processo mais recente propõe a instalação rápida de dentes, chamada carga imediata.</p>
			<br>
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
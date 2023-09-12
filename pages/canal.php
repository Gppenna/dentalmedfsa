<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Tratamento de Canal</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/canal.jpg"></div>

			<p>O tratamento do canal da raiz dentária consiste na retirada da polpa do dente, que é um tecido encontrado em sua parte interna. Uma vez que a polpa foi danificada, infeccionada ou morta é removida, o espaço resultante deve ser limpo, preparado e preenchido. Este procedimento veda o canal. Alguns anos atrás, os dentes com polpas infeccionadas ou mortificadas eram extraídos. Hoje em dia, um tratamento de canal salva muitos dentes que de outra forma teriam sido perdidos.</p>
			<br>
			<p><b>Quando um tratamento de canal deve ser feito?</b></p>
			<br>
			<p>Os casos mais comuns de polpa infeccionada ou morta são dente quebrado, cárie profunda e dano ao dente, como um trauma forte, seja ele recente ou mais antigo. Estando a polpa infeccionada ou morta, se não for tratada, pode se formar pus na ponta da raiz dentro do osso maxilar, formando um abcesso. O abcesso pode destruir o osso que circunda o dente, causando dor.</p>
			<br>
			<p><b>Como é tratado o canal?</b></p>
			<br>
			<p>Primeiramente, é feita uma abertura na da parte posterior de um dente frontal ou na coroa de um dente posterior, molar ou pré-molar. Em seguida a polpa infeccionada é removida (pulpectomia), o espaço pulpar e os canais são esvaziados, alargados e limados, em preparação para o seu preenchimento. Se mais de uma visita for necessária, uma restauração temporária é colocada na abertura da coroa, a fim de proteger o dente no intervalo das visitas. A restauração temporária é removida e a cavidade da polpa e canal são preenchidos permanentemente. Um material em forma de cone (flexível) é inserido em cada um dos canais e geralmente selado em posição com um cimento apropriado. Algumas vezes um pino de plástico ou metal é colocado no canal para se conseguir maior resistência. <br><br>Na etapa final, uma coroa é geralmente colocada sobre o dente para restaurar seu formato e lhe conferir uma aparência natural. Se o dente estiver fraturado ou muito destruído pode ser necessário colocar um pino cimentado no canal antes da confecção da coroa.</p>
			<br>
			<p><b>Qual a durabilidade de um dente restaurado?</b></p>
			<br>
			<p>Os dentes restaurados podem durar a vida toda quando tratados adequadamente. Devido ao fato de ainda ser possível o aparecimento de cárie em um dente tratado, uma boa higiene bucal e exames dentários regulares se fazem necessários, a fim de evitar problemas futuros.<br><br> Como não há mais uma polpa viva que mantenha o dente hidratado, os dentes com raiz tratada podem se tornar quebradiços e mais sujeitos à fratura. Este é um importante aspecto a ser levado em conta quando for optar entre uma coroa ou restauração após o tratamento de canal. <br><br>Para se determinar o sucesso ou fracasso do tratamento de canal, o método mais confiável é comparar novas radiografias com aquelas tiradas antes do tratamento. Esta comparação mostrará se o osso continua sendo destruído ou se está sendo regenerado.</p>
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
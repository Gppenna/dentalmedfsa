<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Ortodontia</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/implantodontia.jpg"></div>

			<p>Existem três tipos básicos de ortodontia quando classificamos quanto o momento da abordagem, a ortodontia preventiva, a interceptativa e a corretiva.</p>
			<br>
			<p><b>Ortodontia Preventiva</b></p>
			<br><br>
			<p>Se baseia na prevenção de possíveis problemas que podem ser percebidos em crianças durante o seu crescimento ósseo facial e durante o começo das trocas dos dentinhos de leite. Nessa ortodontia é comum usarmos aparelhos móveis.</p>
			<br>
			<p><b>Ortodontia Interceptativa</b></p>
			<br><br>
			<p>É uma ortodontia focada em "parar" a formação do problema. O ortodontista percebe que a criança ou adolescente está começando a desenvolver um problema e pode planejar uma forma de interceptar o problema para que ele não se instale por completo. Esses problemas podem ser de posicionamento de dentes e bases osseas, problemas respiratórios e de posicionamento lingual ou labial inadequado. Nessa ortodontia podemos usar tanto aparelhos móveis como já é possível a instalação de aparelhos fixos na parte anterior do arco.</p>
			<br>
			<p><b>Ortodontia Corretiva</b></p>
			<br><br>
			<p>É a mais comumente vista e é aquela que foca na correção do problema já instalado. Geralmente fazemos ortodontia corretiva em adultos ou em adolescentes que já terminaram a curva de crescimento (16-18 anos). Com a maloclusão já instalada o ortodontista vai ter muito mais trabalho para reverter o problema. Muitas vezes é necessário usar algumas técnicas mais invasivas como procedimentos cirúrgicos extensos (Ex:cirurgia ortognática) ou até extrações de dentes para criação de um espaço para trabalho.<br><br>
			Nessa ortodontia usamos, na maioria das vezes, aparelhos fixos e ainda alguns aparelhos acessórios. Podemos também fazer uso de alinhadores transparentes em alguns casos mais simples. Esses alinhadores são estéticos e móveis, porém é necessário um investimento finenceiro maior visto o benefício que é ser tratado com eles.</p>
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
		var redirectWindow = window.open('https://wa.me/557592629999?text=Gostaria%20de%20marcar%20uma%20consulta%21%0A%0ANome%3A%20'+arrayForm[0].value+'%0ATelefone%3A%20'+arrayForm[1].value+'%0AMotivo%3A%20'+arrayForm[2].value+'', '_blank');
    	redirectWindow.location;
	});
</script>
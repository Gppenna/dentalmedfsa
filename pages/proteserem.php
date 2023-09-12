<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Prótese</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/proteserem.jpg"></div>

			<p>Uma prótese dentária pode ser total ou parcial, móvel ou fixa. Cada uma variando de acordo com a sua necessidade, que deve ser analisada por um dentista especializado para saber qual o tipo mais adequado para sua situação.</p>
			<br>
			<p><b>Prótese Dentária Removível</b></p>
			<br><br>
			<p>Uma prótese parcial removível (dentadura) é uma prótese para um paciente parcialmente desdentado que deseja ter dentes substitutos por razões funcionais ou estéticas e que não pode ter uma ponte (prótese parcial fixa) por qualquer motivo, como a falta de dentes necessários para servir de suporte para uma ponte (ou seja, pilares distais) ou limitações financeiras. Esse tipo de prótese é chamado de prótese parcial removível porque os pacientes podem removê-la e reinseri-la quando necessário sem ajuda profissional. Por outro lado, uma prótese "fixa" pode e deve ser removida apenas por um profissional da área odontológica.</p>
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
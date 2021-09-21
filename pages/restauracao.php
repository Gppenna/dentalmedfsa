<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Restauração Estética</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/restauracao.jpg"></div>	

			<p>A restauração estética tem como objetivo restaurar e reconstruir dentes que sofreram lesões por trauma ou por cárie e melhorar, em curto prazo, a harmonia do sorriso do paciente por meio de facetas laminadas e do fechamento dos espaços entre os dentes (diastemas). Facetas laminadas são reconstruções da face frontal dos dentes e podem ser feitas diretamente na boca do paciente (resina composta), ou com porcelana, em laboratório. O fechamento de diastemas é a restauração estética que melhora a harmonia do sorriso. Normalmente se faz com resina composta e é um procedimento relativamente simples.</p>
			<br>
			<p><b>Quais são os principais tipos de materiais usados em restaurações estéticas?</b></p>
			<br><br>
			<p>Atualmente, existem basicamente dois tipos de materiais para restaurações estéticas: a resina composta e o laminado cerâmico.</p>
			<br>
			<p><b>Quais as indicações para cada um deles?</b></p>
			<br><br>
			<p>A resina composta é indicada para restaurações pequenas e médias que não estão sujeitas a grandes cargas mastigatórias. Já o laminado cerâmico, popularmente conhecido como lente de contato, é indicado para restaurações maiores que precisam ser mais resistentes ou para regiões que necessitam de uma estética mais apurada. Podemos levar em conta também o fator longevidade, uma vez que, por sofrer absorção e degradação, a resina composta se apresenta como uma alternativa menos durável.</p>
			<br>
			<p><b>Por que fazer este tipo de  tratamento?</b></p>
			<br><br>
			<p>Quando o paciente deseja um resultado harmônico, para mascarar dentes com desgaste, fratura, erosão dental, cárie, má-formação do esmalte ou simplesmente anatomia.</p>
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
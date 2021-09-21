<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Prótese</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/protesefix.jpg"></div>

			<p>Uma prótese dentária pode ser total ou parcial, móvel ou fixa. Cada uma variando de acordo com a sua necessidade, que deve ser analisada por um dentista especializado para saber qual o tipo mais adequado para sua situação.</p>
			<br>
			<p><b>Prótese Dentária Fixa</b></p>
			<br><br>
			<p>A prótese fixa pode ser usada para restaurar um ou vários dentes, abrangendo áreas onde os dentes foram perdidos. Em geral, as principais vantagens da prótese fixa quando comparada às restaurações diretas é a resistência superior quando usada em restaurações grandes e a capacidade de criar um dente de aparência estética. Como em qualquer restauração dentária, os princípios usados ​​para determinar a restauração apropriada envolvem a consideração dos materiais a serem utilizados, extensão da destruição do dente, orientação e localização do dente e condição dos dentes vizinhos.</p>
			<br>
			<p><b>Quando tempo leva para colocar uma prótese dentária fixa?</b></p>
			<br><br>
			<p>O tratamento com esse tipo de restauração pode levar, em média, de 2 a 3 consultas.<br><br> Na primeira consulta, o dente é previamente preparado para receber a prótese. Para que o paciente não fique sem o dente, é colocado um provisório semelhante ao dente final.<br><br>Já na segunda consulta, é realizada a moldagem do dente e a confecção de um modelo do paciente que é encaminhado para o laboratório protético.<br><br>Na terceira consulta a prótese já está pronta para a cimentação. Porém, durante essa etapa, poderá haver a necessidade de alguns ajustes e, então, ela é encaminhada novamente para o laboratório para sanar o problema e poderá ser cimentada em uma eventual quarta consulta.<br><br>Existem casos que necessitam de uma reabilitação mais extensa, como aqueles em que mais de três ou quatro dentes receberão as próteses. Dessa maneira, mais consultas serão necessárias para a conclusão do tratamento.</p>
			<br>
			<p><b>Como deve ser feita a limpeza?</b></p>
			<br><br>
			<p>A prótese dentária fixa sendo confeccionada de metal ou de porcelana ainda está sujeita às cáries. O acúmulo de placa no encontro entre o dente e a gengiva ocorre da mesma forma como em um dente natural. Dessa maneira, os cuidados com a higiene bucal diária para os pacientes com prótese fixa devem ser os mesmos de uma dentição natural.<br><br>O uso de escovas especiais, como as interdentais, específicas para quem possui dentes muito unidos, e as de tufo, é indicado para que se possa fazer a higiene adequada entre a prótese e o dente de suporte, bem como o fio-dental ou fita-dental, que auxiliará na perfeita higienização da área inferior dos dentes unidos pelas próteses.<br><br>Esses cuidados são essenciais para prevenir problemas periodontais, como a periodontite e a gengivite, cárie secundária na região, bem como para prolongar a longevidade da prótese.<br><br>É importante, também, uma visita periódica ao dentista, no mínimo a cada seis meses, para exames de apuração clínica, profilaxia de rotina e exames radiológicos para avaliar a adaptação e a remoção de tártaro, se for o caso.</p>

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
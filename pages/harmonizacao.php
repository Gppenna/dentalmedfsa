<?php 
	if(!defined("INCLUDE_PATH"))
		define('INCLUDE_PATH','https://www.dentalmedfsa.com.br/');
 ?>

<section id="servicos-single-main">
	<div class="container center wow fadeInUpBig">
		<div class="text">
			<h2>Harmonização Orofacial</h2>

			<div class="image-container w100"><img src="<?php echo INCLUDE_PATH; ?>images/harmonizacao.jpg"></div>

			<p>Estamos o tempo todo tentando harmonizar alguma coisa. A palavra harmonia nos transmite várias sensações, como bem-estar, equilíbrio, autoestima, beleza e leveza.<br><br>
			Muita coisa mudou na odontologia e, como sabemos mudou para muito melhor. Deixamos de apenas curar as dores físicas e estamos curando as dores mentais para atendar aos anseios de uma população que se torna cada dia mais exigente e bem informada. Quando digo dores mentais, me refiro aos que promovemos em relação aos benefícios estéticos e funcionais, capazes de alterar a qualidade de vida, desenvolvendo a autoestima. Ou seja, a harmonizãção orofacial é o equilíbrio entre a parte funcional e estética do conjunto face.<br><br>
			A odontologia estética, ou seja, a harmonização orofacial tem ganhado espaço após percebermos a necessidade e a insatisfação depois das mudanças de sorriso. Às vezes terminávamos uma reabilitação oral, mas aquele sorriso alegre não combinava com aquela face "caida" e com lábios murchos, que mesmo após serem "sustentados" por dentes, ainda continuavam apagados.<br><br>
			Não é de hoje que o dentista estuda as proporções faciais que antes só poderiam ser resolvidas com procedimentos cirúrgicos e, na maioria, procedimento irreversíveis. E nós também nos preocupamos com reversibilidade.<br><br>
			Isso justifica o fato de atuarmos com as toxinas botulínicas (botox), preenchimento facial, fios faciais, microagulhamento e vários outros. Combinar sorriso e face, a favor da harmonia desejada, tem deixado os nossos pacientes bem satisfeitos.
			Nós trabalhamos para elevar a autoestima e entedemos que não basta um sorriso funcional quando se pode ter um sorriso harmônico que convida para o bem-estar e qualidade de vida.
			</p>
			<br>
			<p><b>Preenchimento labial</b></p>
			<br>
			<p>O aumento dos lábios superiores e inferiores é feito com o ácido hialurônico. A técnica reestrutura o tecido, desenvolve e produz colágeno e hidrata a área com auxílio dos produtos utilizados. São estudadas as proporções do lábio e é dado início ao procedimento. Antes da aplicação do ácido hialurônico, o paciente é anestesiado. A aplicação do produto é realizada com agulhas e cânulas na região dos lábios. O resultado dura, em média, entre 18 e 24 meses, dependendo da marca do produto e de cada paciente. Um cliente que fuma, por exemplo, faz o preenchimento e talvez não tenha a mesma duração que um paciente não fumante.</p>
			<br>
			<p><b>Fios de sustentação: 'efeito lifting no rosto'</b></p>
			<br>
			<p>Para quem quer driblar a flacidez do rosto, os fios de sustentação pode ser uma boa aposta, já que dão o efeito lifting, dando um up à face e melhorando a aparência. Como o próprio nome já diz, a ideia é levantar e sustentar o rosto com os fios. Existem os fios não absorvíveis e os absorvíveis, os fios de Polidioxanona (PDO) e os de Ácido Polilático (PLA), sendo estes os mais utilizados no momento pelos profissionais da área.</p>
			<br>
			<p><b>Botox</b></p>
			<br>
			<p>A toxina botulínica, mais conhecida como <b>botox</b>, é também utilizada na odontologia com várias indicações, atuando na melhora da qualidade de vida e saúde, utilizamos para correção de sorriso gengival, apertamento dentário, dores nos músculos da face e bruxismo.</p>
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

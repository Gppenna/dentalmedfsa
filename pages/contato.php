<section id="contato-main">
	<div class="background">
		<div class="container center">
			<div class="w50 left">
				<div class="title">
					<h2>ENVIE-NOS UMA MENSAGEM</h2>
					<div class="divider"></div>
					<div class="text">
						<p>Preencha os campos abaixo para nos enviar uma mensagem pelo WhatsApp.</p>
					</div>
				</div>
				<form class="form">
					<input type="text" name="nome" placeholder="Nome" required>
					<div></div>
					<!--<input type="text" name="email" placeholder="Seu e-mail" required>
					<div></div>-->
					<input type="text" name="telefone" placeholder="Número de contato" required>
					<div></div>
					<textarea placeholder="Sua mensagem" name="mensagem" required></textarea>
					<div></div>
					<div class="form-enviar w50 left">
						<input type="submit" name="acao" value="ENVIAR">
					</div>
					</form>
					<!--<div class="w50 left">
						<form action="https://google.com" target="_blank">
							<input id="whatsapp-consulta" type="submit" value="&#xf232">
						</form>
					</div>-->
				</form>
			</div>

			<div class="w50 left localizacao">
				<div class="title">
					<h2>LOCALIZAÇÃO</h2>
					<div class="divider absolute"></div>
				</div>
				<div class="text">
					<b>Endereço:<br></b>
					<span>Rua Coronel Álvaro Simões, n°52</span>
					<p>Centro, Feira de Santana - BA</p>
					<p>CEP 44001-900<br><br></p>
					<b>E-mail:<br></b>
					<p>dentalmedfsa@gmail.com<br><br></p>
					<b>Telefones:<br></b>
					<p>(75) 3221-6004</p>
					<p>(75) 3603-8741</p>

				</div>
				
			</div><!--center--> 

			<div class="clear"></div> <!--clear-->
		</div><!--contato-container-->
	</div>
	<div id="map"></div>
</section>

<script>
    $(".form-enviar").click(function() {
		var arrayForm = $('form').serializeArray();
		var redirectWindow = window.open('https://wa.me/557592629999?text=Gostaria%20de%20mandar%20uma%20mensagem%21%0A%0ANome%3A%20'+arrayForm[0].value+'%0ATelefone%3A%20'+arrayForm[1].value+'%0AMensagem%3A%20'+arrayForm[2].value+'', '_blank');
    	redirectWindow.location;
	});
</script>
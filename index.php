<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Clinica Dental Med</title>
	<script src="https://kit.fontawesome.com/02247dc1eb.js" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCF6YGbcBZ4VP-ok-S4PsDooxAYy-w48MA&libraries=geometry"></script>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/animate.css"/>
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Clinica Dental Med Feira de Santana">
	<meta name="author" content="Gabriel Penna"/>	
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>images/logo.svg" type="image/x-icon">
	<meta name="keywords" content="clinica odontologica, odontologia, clinica dental, dental med, clinica feira de santana, clinica odontologica feira de santana, clinica odontologica bahia, clinica odontologica dental med, clinica odontologica dental med feira de santana, dental med feira de santana, clinica dental med feira de santana, clinica dental med fsa, dental med fsa, odontologia fsa, harmonização facial feira de santana, clareamento feira de santana, harmonização feira de santana, harmonização orofacial feira de santana, harmonização orofacial dental med feira de santana, clareamento dental feira de santana, implante dental feira de santana, ortodontia feira de santana, prótese feira de santana, restauração dental feira de santana, canal odontologia feira de santana">
	<meta charset="utf-8">

</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />


	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home'; 
		switch ($url) {
			case 'clinica':
				echo '<target target="clinica" />';
				break;

			case 'consulta-marcar-home':
				echo '<target target="consulta-marcar-home" />';
				break;	
		}

	?>

	<header class="header" id="page-header">
		<div class="center">
			<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>images/logo.svg"></a></div>
			<div class="desktop-menu">
				<nav class="desktop">
					<ul>
						<li title="Página Inicial" class="main-menu"><a class="main-menu" href="<?php echo INCLUDE_PATH; ?>">Página Inicial</a></li>
						<li title="Clinica" class="main-menu"><a class="main-menu" href="<?php echo INCLUDE_PATH; ?>clinica">Clinica</a></li>
						<li title="Serviços"><div class="menu-dropdown"><a realtime="servicos" href="<?php echo INCLUDE_PATH; ?>servicos" class="main-menu">Serviços<i class="fas fa-angle-down"></i></a>
							<nav class="menu-items">
								<ul>
									<li><a realtime="clareamento" href="<?php echo INCLUDE_PATH; ?>clareamento">Clareamento</a></li>
									<li><a realtime="harmonizacao" href="<?php echo INCLUDE_PATH; ?>harmonizacao">Harmonização Orofacial</a></li>
									<li><a realtime="implantodontia" href="<?php echo INCLUDE_PATH; ?>implantodontia">Implantodontia</a></li>
									<li><a realtime="ortodontia" href="<?php echo INCLUDE_PATH; ?>ortodontia">Ortodontia</a></li>
									<li><a realtime="protesefix" href="<?php echo INCLUDE_PATH; ?>protesefix">Prótese Fixa</a></li>
									<li><a realtime="proteserem" href="<?php echo INCLUDE_PATH; ?>proteserem">Prótese Removível</a></li>
									<li><a realtime="restauracao" href="<?php echo INCLUDE_PATH; ?>restauracao">Restauração Estética</a></li>
									<li><a realtime="canal" href="<?php echo INCLUDE_PATH; ?>canal">Tratamento de Canal</a></li>
									
								</ul>
							</nav>
							</div>
						</li>														
						<li><a class="main-menu" realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
						<!--<li><a realtime="outro-menu" href="<?php echo INCLUDE_PATH; ?>outro-menu">Outro Menu</a></li>-->
					</ul>
				</nav>
			</div>

			<div class="menu-contact-main right">
				<div class="menu-contact-place"><p>R. Cel. Álvaro Simões, 52 - Centro</p></div>
				<div class="menu-whatsapp left"><a href="https://wa.me/557532216004" target="_blank"><i class="fab fa-whatsapp"></i></a></div>
				<div class="menu-contact right"><i class="fas fa-phone-alt" style="color: #fff"></i><a class="phone">(75) 3221-6004<br>(75) 3603-8741</a></div>
			</div>

			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Página Inicial</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>clinica">Clinica</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div> <!--clear-->
		</div> <!--center-->
	</header>

	<div class="container-principal">
	<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}
		else{
			if($url != 'servicos' && $url != 'clinica' && $url != 'consulta-marcar-home'){
				$pagina404 = true;
				include('pages/404.php');
			}
			else{
				include('pages/home.php'); 
			}

		}
	?>
</div> <!--container-principal-->

	
	<section class="pre-footer">
		<div class="center">
			<div class="w33 left box-footer">
				<img src="<?php echo INCLUDE_PATH; ?>images/logo-white.svg">
				<p id="rede-social"><a href="https://www.facebook.com/dentalmedfsa" target="_blank"><i class="fab fa-facebook"></i></a> <a href="https://www.instagram.com/dentalmedfsa.ba/" target="_blank"><i class="fab fa-instagram"></i></a></p>
			</div>
			<div class="w33 left box-footer">
				<h2>ENDEREÇO</h2>
				<h3>Feira de Santana</h3>
				<p>R. Cel. Álvaro Simões, 52 - Centro<br><br></p>
				<h3>Telefones:</h3>
				<p>(75) 3221-6004</p>
				<p>(75) 3603-8741</p>
				<!--<p>(75) 9 9262-9999</p>
				<div id="zap"><a href=""></i> AGENDE SUA CONSULTA</a></div>-->
			</div>
			<div class="w33 left box-footer">
				<h4>HORÁRIO DE FUNCIONAMENTO</h4>
				<div class="box-horario">
					<h3>Seg - Sex</h3>
					<p>8:00 - 12:00</p>
					<p>14:00 - 18:00</p>
				</div>
				<div class="box-horario">
					<h3>Sábado</h3>
					<p>8:00 - 12:00</p>
				</div>
				<div class="box-horario">
					<h3>Domingo</h3>
					<p>Fechado</p>
				</div>
				
			</div>
			<div class="clear"></div>
		</div> <!--center-->
	</section> <!--pre-footer-->

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>2020 © <b>Dental Med</b> Clínica Odontológica. Todos os direitos reservados.</p>
			<p>Desenvolvido por <b>Gabriel Lacerda</b></p>
			<div class="freepik-att">
				<a href="<?php echo INCLUDE_PATH; ?>creditos">Atribuições por Imagem</a>
			</div>
		</div> <!--center-->
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
 	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
 	<?php
 		if($url == 'home' || $url == 'clinica'){
 	?>
 	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
 

 	<script src="<?php echo INCLUDE_PATH; ?>js/wow.min.js"></script>
    <script>
        new WOW(
	    {
	      boxClass:     'wow',      // default
	      animateClass: 'animated', // default
	      offset:       0,          // default
	      mobile:       false,       
	      live:         true        // default
	    }
	  ).init();
	</script>
</body>
</html> 
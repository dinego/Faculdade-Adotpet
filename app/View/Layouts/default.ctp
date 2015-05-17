<!DOCTYPE html>
<html>
<head>
<title>ADOTPET - Adote animais e dê-os um lar e muito amor </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<?php echo $this->Html->css(array('bootstrap', 'animate', 'font-awesome.min', 'style')); ?>
<?php echo $this->Html->script(array('jquery.min', 'move-top', 'easing', 'responsiveslides.min')); ?>

<!-- Google font -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

 	<script>
		$(function () {
	  		$("#slider").responsiveSlides({
			  	auto: true,
			  	speed: 500,
				namespace: "callbacks",
				pager: true,
		  	});
		});
  	</script>
</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<p class="social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</p>
				<p class="phonenum">Atendimento: 0800-9999-999</p>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<a href="index.html"><?php echo $this->Html->image('logo.png'); ?></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-5">
						<li><a class="active" href="index.html"><span data-hover="Home">Home</span></a></li>
						<li><a href="sobre.html"><span data-hover="Sobre">Sobre</span></a></li>
						<li><a href="blog.html"><span data-hover="Blog">Blog</span></a></li>
						<li><a href="contato.html"><span data-hover="Contato">Contato</span></a></li>
					</nav>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
					// Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
	<div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				 <li>
				 	<?php echo $this->Html->image('banner-principal.jpg'); ?>
					  <div class="caption">
						<h2>Para que pagar caro em padrões de raça com tantos animais de graça?</h2>
						  <div class="login-form">

							<div class="head-info">
								<div class="close"> </div>
							</div>
							<div class="clear"> </div>
							<form>
								<input type="text" class="text" placeholder="E-mail" >
									<div class="key">
								<input type="password" placeholder="Senha">
									</div>
							</form>
							<div class="signin">
								<input type="submit" value="Entrar" >
							</div>
						</div>
					  </div>
				 </li>
			  </ul>
		  </div>
	</div>
	</div>
	<!-- conteudo -->
		<div class="content">
			<div class="welcome-section">
				<div class="container">
					<div class="col-md-6 welcome-grid text-center">
						<h3>ADOTPET</h3>
						<h5>Duis autem vel eum iriure dolor in hendrerit in vulputa</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. littera gothica.</p>
					</div>
					<div class="col-md-6 images">
						<?php echo $this->Html->image('intro-cat-dog.jpg', array('class' => 'img-responsive')); ?>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="about-section text-center">
				<div class="container">
					<h2>Por que adotar?</h2>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Mirum est notare quam littera </h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Mirum est notare quam littera </h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
					</div>
					<div class="clearfix"></div>
					<video controls src="video/propaganda.mp4" width="100%" height="auto"></video>
				</div>
			</div>
			<div class="textimonials-section text-center">
				<div class="container">
					<?php echo $this->Html->image('t.png'); ?>
					<h5>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</h5>
					<p>Ana Clara que adotou Rex</p>
					<a href="" class="btn btn-1 btn-1d">Veja mais pessoas felizes</a>
				</div>
			</div>
		</div>
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-5 contact-section">
				<h4>Entre em contato</h4>
					<input type="text" class="text" placeholder="Nome">
					<input type="text" class="text" placeholder="E-mail">
					<textarea placeholder="Digite sua mensagem..."></textarea>
					<input type="submit" value="ENVIAR">
			</div>
			<div class="col-md-7 follow-us">
				<h4>Conecte-se com a gente!</h4>
				<div class="social-icons">
					<i class="facebook"></i>
					<i class="twitter"></i>
					<i class="pinterest"></i>
					<i class="googlepluse"></i>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor</p>
				<div class="copyright">
					<p>Copyright  <a href="#">ADOTPET</a></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				  containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			 };
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>

<?php // echo $this->Session->flash(); ?>
<?php // echo $this->fetch('content'); ?>
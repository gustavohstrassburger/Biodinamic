<!DOCTYPE html>

<html>

<head>

	<?php echo $this->Html->charset(); ?>
	
	<title>BioDinamic Pilates e Fisioterapia</title>
	
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('styles');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery'); 
		echo $this->Html->script('jquery.flexslider'); 
		echo $this->Html->script('bootstrap'); 
		echo $this->Html->script('masonry.pkgd.min'); 
		echo $this->Html->script('jquery.wookmark.min'); 		
		echo $this->Html->script('jquery.mousewheel-3.0.6.pack'); 
		echo $this->Html->script('jquery.fancybox'); 
		echo $this->Html->script('jquery.fancybox-buttons'); 
		echo $this->Html->script('jquery.fancybox-thumbs'); 
		echo $this->Html->script('jquery.fancybox-media');  
	?>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=239794662871121&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
    <script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<?php	
		echo $this->Html->script('main'); 
	?>
	
</head>

<body>

	<div class="body">
	
		<!-- Header -->
	
		<div id="header">
		
			<nav class="navbar">
		
				<div class="container">
				
					<div class="navbar-left">
					
						<div class = "logo">
						
							<?php echo $this->Html->Image("header.logo.png", array("url"=>array("controller"=>"/"))); ?>
						
						</div>
					
					</div>
					
					<div class="navbar-right">
					
						<ul class="nav navbar-nav">
							
							<li <?php if($this->params['controller'] == "pages"){ echo "class='active'"; } ?>><?php echo $this->Html->Link("Início", array("controller"=>"/"), array("class"=>"link"));?></li>
							<li <?php if($this->params['controller'] == "sobre"){ echo "class='active'"; } ?>><?php echo $this->Html->Link("Sobre", array("controller"=>"sobre"), array("class"=>"link"));?></li>
							<li <?php if($this->params['controller'] == "espaco"){ echo "class='active'"; } ?>><?php echo $this->Html->Link("Espaço", array("controller"=>"espaco"), array("class"=>"link"));?></li>
							
							<li <?php if($this->params['controller'] == "servicos"){ echo "class='active'"; } ?>>
								<?php echo $this->Html->Link("Serviços", array("controller"=>"servicos"), array('data-toggle'=>'dropdown', 'class'=>'dropdown-toggle link'));?>
								<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
									<li><?php echo $this->Html->Link("Pilates", array("controller"=>"servicos", "action"=>"pilates"));?></li>
									<li><?php echo $this->Html->Link("Fisioterapia", array("controller"=>"servicos", "action"=>"fisioterapia"));?></li>
									<li><?php echo $this->Html->Link("Avaliação computadorizada", array("controller"=>"servicos", "action"=>"avaliacao"));?></li>
									<li><?php echo $this->Html->Link("Acupuntura dry needling", array("controller"=>"servicos", "action"=>"acupuntura"));?></li>
									<li><?php echo $this->Html->Link("Massoterapia", array("controller"=>"servicos", "action"=>"massoterapia"));?></li>
									<li><?php echo $this->Html->Link("Estética", array("controller"=>"servicos", "action"=>"estetica"));?></li>
								</ul>								
							</li>
							
							<li class="last <?php if($this->params['controller'] == "contato"){ echo "active"; } ?>"><?php echo $this->Html->Link("Contato", array("controller"=>"contato"), array("class"=>"link"));?></li>
						
						</ul>
					
					</div>
				
				</div>
		
			</nav>
			
		</div>
		
		<!-- Content -->
		
		<div id="content">
		
			<?php echo $this->fetch('content'); ?>
			
		</div>
		
		<!-- Footer -->
		
		<div id="footer">

			<!-- Google maps -->

			<div class="maps container-fluid">

				<div id="map_canvas"></div>
				
			</div>
			
			<!-- Footer links -->
			
			<div class="links container-fluid">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-4 contato">
							
							<div class="title">Contato</div>
							
							<div class="info">
							
								<div class="address">
									Av. Nações Unidas, 2456, Sala 102A. <br/>
									Bairro Centro, Novo Hamburgo - RS.
								</div>
								
								<div class="contact">
									<label class="telephone">Telefone: </label>
									<div class="whats"></div><div class="telephone">(51) 8421-6590 (Claro)</div><br/>
									<div class="whats"></div><div class="telephone">(51) 8129-5373 (Tim)</div><br>
									<div class="email">Email: <a href="mailto:contato@biodinamic.com.br">contato@biodinamic.com.br</a></div>
								
								<div class="clear"></div>
								</div>
								
								<div class="clear"></div>
								
							</div>
							
						</div>
						
						<div class="col-md-4 atendimento">
							
							<div class="title">Atendimento</div>
							
							<div class="info">
							
								<p>Segunda à Sexta-feira | 07h às 21h30</p>								

							</div>
						
						</div>
						
						<div class="col-md-4 redes">
						
							<div class="title">Redes Sociais</div>
							
							<div class="info">
							
								<a href="https://www.facebook.com/biodinamic" target="_blank" class="facebook"></a>
								<a href="http://4sq.com/1qdJ20T" target="_blank" class="foursquare"></a>
								<!--<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>-->
							
							</div>
						
						</div>
					
					</div>
				
				</div>
			
			</div>
			
			<!-- Footer copyrights -->
						
			<div class="copyrights">
			
				<div class="container-fluid">
				
					<p class="text-center">BioDinamic © Copyrights 2014 - Todos os direitos reservados </p>
				
				</div>
			
			</div>
			
		</div>
		
	</div>
	
</body>

</html>

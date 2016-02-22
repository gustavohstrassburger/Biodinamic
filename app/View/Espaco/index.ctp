<div id="sobre">
		
	<div class="container">
		
		<div class="content-block">

			<div class="title">
			
				<h1>Espaço</h1>
			
			</div>
			
			<div id="images">
				
				<ul id="tiles">
				
					<?php
										
						$dir = new Folder(APP_DIR . DS . "webroot" . DS . "img" . DS . "espaco");
						$files = $dir->find('.*\.jpg', true);
					
						foreach($files as $file){
												
							//$size = getimagesize($this->webroot . 'img/espaco/small/' . $file);
							
							echo '<li><a class="fancybox-thumbs" data-fancybox-group="thumb" href="' . $this->webroot . 'img/espaco/' . $file . '">' . $this->Html->Image('espaco/small/' . $file) . '</a></li>';
						
						}
					
					?>
				
				
				</ul>
				
			</div>
			
			<div class="separator"></div>
		
		</div>
	
	</div>

</div>
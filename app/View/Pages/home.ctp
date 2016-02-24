<div id="index">
	<div class="container flexslider">	
		<ul class="slides">
			<li>
				<?php echo $this->Html->image("img1.png");?>
			</li>
			<li>
				<?php echo $this->Html->image("img2.png");?>
			</li>
			<li>
				<?php echo $this->Html->image("img3.png");?>
			</li>
		</ul>	
	</div>	
	<div id="container" class="container content">	
		<div class="col-md-3">
			<ol>
				<li>
					<div class="block">
						<strong>Pilates</strong>
						<p>Visando o ganho de alongamento, força e mobilidade, o pilates trabalha no conceito do controle e concentração da mente sob os movimentos.</p>
						<p>Trata-se de um método que associa a respiração com a contração do centro de força e busca o equilíbrio e a reorganização postural.</p>
						<p>Agende sua aula experimental.</p>
						<div class="saiba_mais">
								<?php echo $this->Html->Link("Saiba mais »", array("controller"=>"servicos", "action"=>"pilates")); ?>
						</div>
					</div>
				</li>		
				<li class="last">
					<div class="block">
						<strong>Estética</strong>
						<p>Tratamentos na área de estética corporal e facial. Alguns serviços: Drenagem linfática manual, limpeza de pele, peelings, pré e pós operatório de cirurgia plástica, endermologia, ultrassom, eletrolipólise, esfoliação corporal.</p>
						<div class="saiba_mais">
							<?php echo $this->Html->Link("Saiba mais »", array("controller"=>"servicos", "action"=>"estetica")); ?>
						</div>
					</div>
				</li>
			</ol>
		</div>
		<div class="col-md-3">
			<ol>
				<li>
					<div class="block">
						<strong>Fisioterapia</strong>
						<p>Atendimento individual e personalizado nas áreas de ortopedia/traumatologia, neurologia adulto, reumatologia, geriatria, liberação miofascial, kinesio taping, gestantes e atendimento domiciliar.</p>
						<div class="saiba_mais">
							<?php echo $this->Html->Link("Saiba mais »", array("controller"=>"servicos", "action"=>"fisioterapia")); ?>
						</div>
					</div>
				</li>
				<li class="last">
					<div class="block">
						<strong>Acupuntura dry needling</strong>
						<p>Acupuntura que estimula diretamente os nódulos de tensão muscular. Caracteriza-se como um tratamento específico para a desativação de bandas tendíneas, fasciais e/ou musculares que estejam tensas e rígidas e que geram dor.</p>
						<p>A técnica é utilizada em diversos tipos de dores como na síndrome dolorosa miofascial, cefaleias tensionais (dores de cabeça), disfunções temporomandibulares, fibromialgia, cervicalgias e lombalgias, dentre outras lesões e/ou patologias que tenham origem muscular.</p>
						<div class="saiba_mais">
							<?php echo $this->Html->Link("Saiba mais »", array("controller"=>"servicos", "action"=>"acupuntura")); ?>
						</div>					
					</div>
				</li>
			</ol>
		</div>
		<div class="col-md-3">
			<ol>
				<li>
					<div class="block">
						<strong>Avaliação postural computadorizada</strong>
						<p>As análises posturais na Biodinamic são realizadas a partir da Avaliação Postural Computadorizada, a Biofotogrametria. Trata-se de um instrumento para análise postural que, a partir da aquisição da imagem corporal e um software específico, quantifica os desvios posturais.</p>
						<p>Para avaliações em consultórios de fisioterapia e estúdios de pilates, trouxe mais precisão, reprodutibilidade, arquivamento de registros, comparação de resultados na evolução das síndromes motoras e feedback visual para o paciente. Estes dados facilitam a decisão do melhor tratamento a ser realizado, de maneira específica, respeitando cada individualidade.</p>
						<div class="saiba_mais">
						<?php echo $this->Html->Link("Saiba mais »", array("controller"=>"servicos", "action"=>"avaliacao")); ?>
						</div>			
					</div>
				</li>
				<li class="last">
					<div class="block">
						<strong>Massoterapia</strong>
						<p>Os maus hábitos de vida aliados ao estresse do dia a dia tornam o corpo mais suscetível à doença por diminuírem as resistências imunitárias do nosso organismo.</p>
						<p>As diferentes técnicas proporcionam melhora na circulação sanguínea e linfática, momentos de relaxamento e bem-estar promovendo o equilíbrio do indivíduo em todas as suas dimensões, físico e mental.</p>
						<div class="saiba_mais">
							<?php echo $this->Html->Link("Saiba mais »", array("controller"=>"servicos", "action"=>"massoterapia")); ?>
						</div>
					</div>
				</li>
			</ol>		
		</div>		
	</div>
</div>
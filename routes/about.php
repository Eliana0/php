				<!-- About Me -->
                <section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Me</h2>
							</header>

							<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

							<?php 
							$lorem= 'lorem.txt';
							$getLorem= file_get_contents($lorem);
							file_put_contents($lorem, 'Hola texto')

							//echo $getLorem;
							?>

							<h3>Editar archivo de texto</h3>
							<form>
								<textarea name="texto">
									<?php $getLorem ?>
								</textarea>
								<input type="button" value="Modificar" />
							</form>
						</div>
					</section>
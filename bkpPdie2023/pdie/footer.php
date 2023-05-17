	<footer>
		<div class="rodape container">
			<div class="row">
				<div class="col-md-4 col-md-2 col-xs-8">
					<?php if ( dynamic_sidebar('rodape_widgets') ) : else : endif; ?>
				</div>
				<style>
						@media only screen and (max-width: 767px) {
							h2 {
								font-size: 22px;
							}
							
							p {
								font-size: 16px;
							}
							
							.rw2 .menu {
								font-size: 16px;
							}
						}
					</style>
				<div class="col-md-4 col-md-2 col-xs-8">
					<style>
						.rw2 .menu{font-family: Segoe UI; font-size: 17px; font-weight: 500; list-style: none; margin-left: 25%;}
						.rw2 a:visited, a.linkfooter:link {text-decoration: none; color: #7A0803;}
						.rw2 a:link { color: #7A0803; }
						.rw2 a:hover {text-decoration: none; color: #303030;}
					</style>
							<?php if ( dynamic_sidebar('rodape_widgets1') ) : else : endif; ?>
				</div>
				<div class="col-md-4 col-md-2 col-xs-8">
					<style>
						.rw3{list-style: none; margin-left: 30%;}
					</style>										
					<?php if ( dynamic_sidebar('rodape_widgets3') ) : else : endif; ?>				
			</div>		
		</div>
	</div>
		<center><p class="container desenvrodape">© 2021 PDIE. Desenvolvido por Núcleo de Educação a Distância da Escola  de Governo Fiocruz Brasília</p><br>
		</center>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
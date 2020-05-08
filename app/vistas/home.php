<?php require RUTA_APP.'/vistas/inc/header.php'; ?>

	<div class="container pt-5 bg-dark text-white">
		<h1><?php echo $datos['titulo'];?></h1>
	</div>
	<div class="container">
		<div class="row float-right">
			<p>
				Desarrollado por: <b>&copy;Yoangel eizaga</b>
			</p>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-9">
				<div class="card my-4">
					<div class="card-body">
					<h2 class="card-title">Bienvenidos</h2>
						<p class="card-text">Este fragmework esta desarrollado con <b>PDO</b> y utiliza el patrón <b>MVC </b> (Modelo - Vista - Controlador), fue pensado y creado debido a problemas e inconvenientes que tuve al momento de desarrollar mis proyectos</p>
					</div>
				</div>
				<div class="card my-4">
					<div class="card-body">
					<h2 class="card-title">Inicios</h2>
						<p class="card-text">Puedes crear una gran cantidad de proyectos con este fragmework e ir escalándolos</p>
						<p class="card-text">Dispone de URL's amigables</p>
						<p class="card-text">Separa completamente la vista de la lógica</p>
					</div>
				</div>
				<div class="card my-4">
					<div class="card-body">
						<p class="card-text"><b>Notas:</b></p>
						<p class="card-text">Modificar los datos de tu BD en el directorio <b>app/config/configurar.php</b></p>
						<p class="card-text">Si deseas cambiar el nombre de archivo donde se encuentra este fragmework debes Modificar el archivo <u>.htaccess</u> dentro del directorio <b>public/</b> especificamente en la linea 4 te encontraras con esta linea de codigo <i>RewriteBase /<b>FrameworkYE</b>/public/</i></p>
					</div>
				</div>
				<div class="card my-4">
					<div class="card-body">
					<h3 class="card-title">Directorios:</h3>
						<p class="card-text">
							<ul>
								<li><b>app</b>
									<ul>
										<li>config
											<ul>
												<li>configurar.php</li>
											</ul>
										</li>
										<li>controladores
											<ul>
												<li>Home.php</li>
											</ul>
										</li>
										<li>helpers
											<ul>
												<li>url_help.php</li>
												<li>functions.php</li>
											</ul>
										</li>
										<li>librerias
											<ul>
												<li>Conexion.php</li>
												<li>Controlador.php</li>
												<li>Core.php</li>
											</ul>
										</li>
										<li>modelos</li>
										<li>vistas
											<ul>
												<li>inc
													<ul>
														<li>header.php</li>
														<li>foother.php</li>
													</ul>
												</li>
												<li>home.php</li>
											</ul>
										</li>
										<li>.htaccess</li>
										<li>iniciador.php</li>
									</ul>
								</li>

								<li><b>public</b>
									<ul>
										<li>css
											<ul>
												<li>bootstrap.min.css</li>
												<li>styles.css</li>
											</ul>
										</li>
										<li>fonts
											<ul>
												<li>fonts-awesome
													<ul>
														<li>css
															<ul>
																<li>all.min.css</li>
															</ul>
														</li>
														<li>js
															<ul>
																<li>all.min.js</li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>icons
											<ul>
												<li>default.ico</li>
											</ul>
										</li>
										<li>img</li>
										<li>js
											<ul>
												<li>bootstrap.min.js</li>
												<li>jquery..min.js</li>
												<li>main.js</li>
											</ul>
										</li>
										<li>.htaccess</li>
										<li>index.php</li>
									</ul>
								</li>
								<li>.htaccess</li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card my-4">
					<div class="card-body">
					<h3 class="card-title">Complementos:</h3>
						<p class="card-text">
							<ul>
								<li>&nbsp;<b> Bootstrap 4</b></li>
								<li>&nbsp;<b> Jquery</b></li>
								<li>&nbsp;<b> Font-Awesome</b> <i class="fa fa-flag"></i></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container bg-dark py-4 mt-5 text-center text-white">
		<p class="card-text">
			<b>"Deja volar tu imaginación y espero puedas crear muchos proyectos con esta plantilla"</b>
		</p>
	</div>


<?php require RUTA_APP.'/vistas/inc/footer.php'; ?>
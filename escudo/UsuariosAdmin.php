<?php 
	include "php/conec.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/UsuariosAdminCSS.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
    <!-- jQuery lib from google server ===================== -->
	<script src="js/jquery-1.7.2.min.js"></script>
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>
	</head>
	<body>
			<div id="logo"><br>
				<div id="title"></div>
			</div>
			<div id="fdw" >
				<nav>
					<ul>
						<li><a href="inicioAdmin.html">Inicio<span class="arrow"></span></a>
							<ul style="display: none;" class="sub_menu">
								<li class="arrow_top"></li>
								<li><a href="inicioAdmin.html">Inicio Admin</a></li>
								<li><a href="home.html">Salir</a></li>
							</ul>
						</li>
						<li><a href="AreasAdmin.php">Areas<span class="arrow"></span></a>
							<ul style="display: none;" class="sub_menu">
								<li class="arrow_top"></li>
								<li><a href="CrearAreasAdmin.html">Crear</a></li>
								<li><a href="ModificarAreasAdmin.html">Modificar</a></li>
							</ul>
						</li>
						<li class="current"><a href="UsuariosAdmin.html">Usuarios<span class="arrow"></span></a>
							<ul style="display: none;" class="sub_menu">
								<li class="arrow_top"></li>
								<li><a href="CrearUsuariosAdmin.html">Crear</a></li>
								<li><a href="ModificarUsuariosAdmin.html">Modificar</a></li>
							</ul>
						</li>
						<li>
							<a href="HistorialAdmin.html">Historial<span class="arrow"></span></a>
							<ul style="display: none;" class="sub_menu">
								<li class="arrow_top"></li>
								<li><a href="HistorialAreasAdmin.html">Areas</a></li>
								<li><a href="HistorialUsuariosAdmin.html">Usuarios</a></li>
								<li><a href="HistorialDiarioAdmin.html">Dia a Dia</a></li>
							</ul>
						</li>
						<li>
							<a href="http://www.freshdesignweb.com">Blog<span class="arrow"></span></a>
							<ul style="display: none;" class="sub_menu">
								<li class="arrow_top"></li>
								<li><a href="http://www.freshdesignweb.com">Design</a></li>
								<li><a href="http://www.freshdesignweb.com/category/html5">HTML5</a></li>
								<li><a href="http://www.freshdesignweb.com/category/css-html">CSS3</a>
								</li><li><a href="http://www.freshdesignweb.com/category/ajax-jquery">jQuery</a></li>
							</ul>
						</li>
						<li><a href="NoticiasAdmin.html">Noticias</a></li>
						<li><a href="ContactoAdmin.html">Contacto</a></li>
						<li><a href="AyudaAdmin.html">Ayuda</a></li>
					</ul>
				</nav>
			</div>
			<div id="contenido">
				<div><center><h1>USUARIOS</h1></center></div>
				<div id="linea"></div><br></br><br>
				<center><section id="contAreas">
					<?php 
						$sql = "SELECT * FROM persona";
						$result = mysql_query($sql);
						if($result==FALSE){
							echo "<br> Hay errores en la consulta SQL";
						}
						while($row= mysql_fetch_array($result))	{
							echo "<article>
									<a href='#'><img src='$row[img]' alt='thumbCarro' width='200' height='200' ></a>
									<ul>
										<center><h2>$row[cedula]</h2></center>
										<center><h3>$row[nombre]&nbsp$row[apellido]</h3></center>
										<center><h4>$row[email]</h3></center>
									</ul>
								</article>";
						}
					?>
				</section></center>
			</div>
			<div id="footer">
				<div id="let"><center><p>© 2015</p></center><center><p> ExperSoft.com | Sistema Experto</p></center></div>
			</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resize Javascript | by Xavier Araque</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div id='elemento'></div>			
		</div>
	</div>	
</body>
</html>
<script >
// Escucha el evento de carga inicial del DOM
window.addEventListener('DOMContentLoaded', function() {
	var w = window.innerWidth,
	mobile = 767,
	element = document.getElementById("elemento"),
	viewMobile = '<?php include "./partmobile.php";?>',
	viewDesktop = '<?php include "./partdesktop.php";?>',
	noboth;
// Funcion para cargar elementos al finalizar la carga del DOM
	function swichLoaded(wid,m,vM,vD) {
		if (wid <= m) {
			element.innerHTML = vM;
		} else {
			element.innerHTML = vD;
		};
	}
// Llama la funcion de carga inicial
	swichLoaded(w, mobile, viewMobile, viewDesktop);
// Escucha el evento resize
	window.addEventListener('resize', function(event) {
		var wsize = window.innerWidth;
		swichLoaded(wsize, mobile, viewMobile, viewDesktop);
	});
});
</script>
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
window.addEventListener('DOMContentLoaded', function() {
	var w = window.innerWidth,
		mobile = 767,
		element=document.getElementById("elemento"),
		viewMobile = '<?php include "./partmobile.php";?>',
		viewDesktop = '<?php include "./partdesktop.php";?>';

	if (w <= mobile) {
		element.innerHTML = viewMobile;
	} else {
		element.innerHTML = viewDesktop;
	};

	window.onresize = function(event) {
		var w = window.innerWidth;
		var element=document.getElementById("elemento");
		if (w <= mobile) {
			element.innerHTML = viewMobile;
		} else {
			element.innerHTML = viewDesktop;
		}
	};
}); 
</script>
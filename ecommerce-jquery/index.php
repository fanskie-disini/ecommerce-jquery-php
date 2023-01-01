<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FANDistro</title>
	<link rel="stylesheet" href="assets/plugin/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">

</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="http://instagram.com/mhmmdfndhl"><img src="./assets/img/logo.png" alt=""
					width="35" height="35" class="me-2">
				FAN<strong>Distro</strong>
			</a>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link menu active" id="menuHome" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" id="menuCart" href=""><i class="fa fa-shopping-cart"></i> (<span
							id="countCart"></span>) </a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" id="menuBuku" href="">Buku Tamu </a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" id="menuAbout" href="">About </a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Navbar -->

	<div id="content"></div>

	<!-- Footer -->

	<footer>
		<p>Copyright &copy; 2022. Created and Developed by <a href="http://instagram.com/mhmmdfndhl">Fanskie</a></p>
	</footer>

	<!-- Footer -->

	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function () {
			$('#content').load('home.php');

			$('.menu').click(function (e) {
				e.preventDefault();

				var menu = $(this).attr('id');

				if (menu == "menuHome") {
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('home.php');
					countCart();
				} else if (menu == "menuCart") {
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('cart.php');
					countCart();
				} else if (menu == "menuBuku") {
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('buku_tamu.php');
					countCart();
				} else if (menu == "menuAbout") {
					$('.nav-link').removeClass('active');
					$(this).addClass('active');
					$('#content').load('about.php');
					countCart();
				}

			});

			countCart();

		});

		function countCart() {
			$.ajax({
				type: "GET",
				url: "proses_cart.php",
				dataType: "JSON",
				success: function (response) {
					console.log(response);

					$("#countCart").text("");
					$("#countCart").text(response);
				}
			});
		}

		function addCart($id) {
			$.ajax({
				type: "POST",
				url: "proses_cart.php",
				data: { "proses": "add", "id": $id },
				dataType: "JSON",
				success: function (response) {
					console.log(response);
					countCart();
				}
			});
		}

		function deleteCart($id) {
			$.ajax({
				type: "POST",
				url: "proses_cart.php",
				data: { "proses": "delete", "id": $id },
				dataType: "JSON",
				success: function (response) {
					console.log(response);

					if (response.message == "success") {
						alert("Delete Success");
					} else {
						alert("Delete Failed");
					}
					countCart();
					$('#content').load('cart.php');
				}
			});
		}

	</script>

</body>

</html>
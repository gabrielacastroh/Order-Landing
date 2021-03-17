<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="/Parcial_1/styles/bootstrap.min.css">
	<link rel="stylesheet" href="/Parcial_1/styles/style.css">
	<title>Brasa Loca</title>
</head>

<body>
	<div class="first">
		<!-- NAVEGATION -->
		<nav class="navbar navbar-expand-sm" style="background-color : #1e212d">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="#" class="nav-link ">Inicio</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">Registrar</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Pedidos</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">Menú</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center">
					<a href="/Parcial_1/index.php" class="navbar-brand">
						<img src="/Parcial_1/img/logo.png" alt="" class="d-inline-block" width="250" height="30">
					</a>
				</div>
				<div class="collapse navbar-collapse justify-content-end">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="#" class="nav-link">About Us</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">Galería</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="sub-titulo">
				<h2>Detalle de pedido</h2>
			</div>
			<div class="row py-2 justify-content-evenly">
				<div class="col-9 cuerpo_pedido">
					<div class="row mb-3 text-center">
						<div class="col">
							<p class="fw-bold pedido_label">Nombre</p>
							<hr>
							<p class="fw-normal">
								<?php $nombre = $_REQUEST['nombre'];
								print("$nombre"); ?>
							</p>
						</div>
						<div class="col">
							<p class="fw-bold pedido_label">Dirección</p>
							<hr>
							<p class="fw-normal">
								<?php $direccion = $_REQUEST['direccion'];
								print("$direccion"); ?>
							</p>
						</div>
						<div class="col">
							<p class="fw-bold pedido_label">Teléfono</p>
							<hr>
							<p class="fw-normal">
								<?php $telefono = $_REQUEST['telefono'];
								print("$telefono"); ?>
							</p>
						</div>

					</div>
					<div class="row mb-3 text-center justify-content-between">
						<div class="col-4 ">
							<div class="card y" style="width: 11rem;">
								<div class="card-body">
									<p class="fw-bold">Hamburguesas</p>
									<?php
									$num_ham_c = $_REQUEST['num_ham_c'];
									foreach ($num_ham_c as $ham_c);
									if ($ham_c > 0) {
										print("<p class= 'title_cat'>Hamburguesa clásica: $ham_c");
									} else {
										print("<p class= 'title_cat'>Hamburguesa clásica: $ham_c");
									}
									?>
									<?php
									$num_ham_d = $_REQUEST['num_ham_d'];
									foreach ($num_ham_d as $ham_d);
									if ($ham_d > 0) {
										print("<p class= 'title_cat'>Hamburguesa doble: $ham_d");
									} else {
										print("<p class= 'title_cat'>Hamburguesa doble: $ham_d");
									}
									?>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card y" style="width: 11rem;">
								<div class="card-body">
									<p class="fw-bold">Perro</p>
									<?php
									$num_perro = $_REQUEST['num_perro'];
									foreach ($num_perro as $numero_perro);
									if ($numero_perro > 0) {
										print("<p class= 'title_cat'>Perro: $numero_perro");
									} else {
										print("<p class= 'title_cat'>Perro: $numero_perro");
									}
									?>
								</div>
							</div>
						</div>
						<div class="col-4 ">
							<div class="card y" style="width: 11rem;">
								<div class="card-body">
									<p class="fw-bold card-title">Pizzas</p>
									<?php
									$num_piz_j = $_REQUEST['num_piz_j'];
									foreach ($num_piz_j as $pizza_j);
									if ($pizza_j > 0) {
										print("<p class= 'card-text title_cat'> Pizza Jamón: $pizza_j");
									} else {
										print("<p class= 'card-text title_cat'> Pizza Jamón: $pizza_j");
									}
									?>
									<?php
									$num_piz_h = $_REQUEST['num_piz_h'];
									foreach ($num_piz_h as $pizza_h);
									if ($pizza_h > 0) {
										print("<p class= 'card-text title_cat'> Pizza Hawaiana: $pizza_h");
									} else {
										print("<p class= 'card-text title_cat'> Pizza Hawaiana: $pizza_h");
									}
									?>
									<?php
									$num_piz_p = $_REQUEST['num_piz_p'];
									foreach ($num_piz_p as $pizza_p);
									if ($pizza_p > 0) {
										print("<p class= 'card-text title_cat'> Pizza Pepperoni: $pizza_p");
									} else {
										print("<p class= 'card-text title_cat'> Pizza Pepperoni: $pizza_p");
									}
									?>
								</div>
							</div>

						</div>
					</div>
					<div class="row mb-3 text-center justify-content-evenly">
						<div class="col-4">
							<div class="card y" style="width: 11rem;">
								<div class="card-body">
									<p class="fw-bold card-title">Malteadas</p>
									<?php
									$num_malt_f = $_REQUEST['num_malt_f'];
									foreach ($num_malt_f as $malt_f);
									if ($malt_f > 0) {
										print("<p class= 'card-text title_cat'>Malteada Fresa: $malt_f");
									} else {
										print("<p class= 'card-text title_cat'>Malteada Fresa: $malt_f");
									}
									?>
									<?php
									$num_malt_c = $_REQUEST['num_malt_c'];
									foreach ($num_malt_c as $malt_c);
									if ($malt_c > 0) {
										print("<p class= 'card-text title_cat'>Malteada Chocolate: $malt_c");
									} else {
										print("<p class= 'card-text title_cat'>Malteada Chocolate: $malt_c");
									}
									?>
									<?php
									$num_malt_v = $_REQUEST['num_malt_v'];
									foreach ($num_malt_v as $malt_v);
									if ($malt_v > 0) {
										print("<p class= 'card-text title_cat'>Malteada Vainilla: $malt_v");
									} else {
										print("<p class= 'card-text title_cat'>Malteada Vainilla: $malt_v");
									}
									?>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card y" style="width: 11rem;">
								<div class="card-body">
									<p class="fw-bold card-title">Gaseosa</p>
									<?php
									$num_ga_cc = $_REQUEST['num_ga_cc'];
									foreach ($num_ga_cc as $gase_cc);
									if ($gase_cc > 0) {
										print("<p class= 'card-text title_cat'>Coca-Cola: $gase_cc");
									} else {
										print("<p class= 'card-text title_cat'>Coca-Cola: $gase_cc");
									}
									?>
									<?php
									$num_ga_m = $_REQUEST['num_ga_m'];
									foreach ($num_ga_m as $gase_m);
									if ($gase_m > 0) {
										print("<p class= 'card-text title_cat'>Manzana: $gase_m");
									} else {
										print("<p class= 'card-text title_cat'>Manzana: $gase_m");
									}
									?>
									<?php
									$num_ga_s = $_REQUEST['num_ga_s'];
									foreach ($num_ga_s as $gase_s);
									if ($gase_s > 0) {
										print("<p class= 'card-text title_cat'>Sprite: $gase_s");
									} else {
										print("<p class= 'card-text title_cat'>Sprite: $gase_s");
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-3 info_pedido">
					<div class="row py-3">
						<div class="col">
							<p class="fw-bold pedido_label">Total a pagar</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Hamburguesas x<?php print($ham_c + $ham_d) ?>
							</p>
						</div>
						<div class="col-4">
							<p class="fw-bold">
								<?php
								$total_a_pagar = 0;
								$total_hamburguesa = (13000 * $ham_c) + (18000 * $ham_d);
								print("$$total_hamburguesa");
								$total_a_pagar += $total_hamburguesa;
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Perros x<?php print($numero_perro) ?>
							</p>
						</div>
						<div class="col-4">
							<p class="fw-bold">
								<?php
								$total_perro = (10000 * $numero_perro);
								print("$$total_perro");
								$total_a_pagar += $total_perro;
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Pizzas x<?php print($pizza_j + $pizza_h + $pizza_p) ?>
							</p>
						</div>
						<div class="col-4">
							<p class="fw-bold">
								<?php
								$total_pizza = (8000 * $pizza_j) + (8000 * $pizza_h) + (8000 * $pizza_p);
								print("$$total_pizza");
								$total_a_pagar += $total_pizza;
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Maltedas x<?php print($malt_f + $malt_c + $malt_v) ?>
							</p>
						</div>
						<div class="col-4">
							<p class="fw-bold">
								<?php
								$total_malteada = (8000 * $malt_f) + (8000 * $malt_c) + (8000 * $malt_v);
								print("$$total_malteada");
								$total_a_pagar += $total_malteada;
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-light">Gaseosa x<?php print($gase_cc + $gase_m + $gase_s) ?>
							</p>
						</div>
						<div class="col-4">
							<p class="fw-bold">
								<?php
								$total_gaseosa = (3000 * $gase_cc) + (3000 * $gase_m) + (3000 * $gase_s);
								print("$$total_gaseosa");
								$total_a_pagar += $total_gaseosa;
								?>
							</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-8">
							<p class="fw-bold">Total a pagar</p>
						</div>
						<div class="col">
							<p class="fw-bold">
								<?php print("$$total_a_pagar"); ?>
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-auto">
							<?php
							if ($total_a_pagar == 0) {
								print("<input type= 'submit' class= 'btn enviar disabled' value='Pagar'></input>");
							} else {
								print ('<input onclick="alert(`Su pedido se ha realizado con éxito`)" type="submit" class="btn enviar" value="Pagar"></input>');
							}
							?>
						</div>
					</div>



				</div>



			</div>



		</div>


	</div>





</body>

</html>
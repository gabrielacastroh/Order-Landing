<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="./styles/bootstrap.min.css">
	<link rel="stylesheet" href="./styles/style.css">
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
					<a href="index.php" class="navbar-brand">
						<img src="./img/logo.png" alt="logo" class="d-inline-block" width="250" height="30">
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
		<div class="row align-items-stretch w-100 fila_principal">
			<div class="col-2 ">
				<div class="row py-3">
					<div class="col text-center">
						<p class="title-card">Nuestras Malteadas</p>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-12">
						<div class="card" style="width: 13rem;">
							<img src="./img/malteada-1.jpg" class="card-img-top" alt="malteda-1">
						</div>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-12">
						<div class="card" style="width: 13rem;">
							<img src="./img/malteada-2.jpg" class="card-img-top " alt="malteda-2">
						</div>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-12">
						<div class="card" style="width: 13rem;">
							<img src="./img/malteada-3.jpg" class="card-img-top" alt="malteda-3">
						</div>
					</div>
				</div>
			</div>
			<div class="col-8">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="./img/hamburguesa.jpg" class="d-block w-100" alt="imagen_1">
							<div class="carousel-caption d-none d-md-block">
								<h5>Bienvenidos a Brasa Loca</h5>
								<div class="slider-btn">
									<a href="#titulo">
										<div class="btn btn-1">
											Hacer Pedido
										</div>
									</a>
								</div>
								<div class="i">
									<i>"Un lugar inolvidable"</i>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./img/pizza.jpg" class="d-block w-100" alt="imagen_2">
							<div class="carousel-caption d-none d-md-block">
								<h5>Bienvenidos a Brasa Loca</h5>
								<div class="slider-btn">
									<a href="#titulo">
										<div class="btn btn-1">
											Hacer Pedido
										</div>
									</a>
								</div>
								<div class="i">
									<i>"Un lugar inolvidable"</i>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./img/perro.jpg" class="d-block w-100" alt="imagen_3">
							<div class="carousel-caption d-none d-md-block">
								<h5>Bienvenidos a Brasa Loca</h5>
								<div class="slider-btn">
									<a href="#titulo">
										<div class="btn btn-1">
											Hacer Pedido
										</div>
									</a>
								</div>
								<div class="i">
									<i>"Un lugar inolvidable"</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="row py-3">
					<div class="col text-center">
						<p class="title-card">Nuestras Bebidas</p>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-12">
						<div class="card" style="width: 13rem;">
							<img src="./img/gaseosa-1.jpg" class="card-img-top img-col" alt="gaseosa-1">
						</div>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-12">
						<div class="card" style="width: 13rem;">
							<img src="./img/gaseosa-2.jpg" class="card-img-top img-col" alt="gaseosa-2">
						</div>
					</div>
				</div>
				<div class="row py-2">
					<div class="col-12">
						<div class="card" style="width: 13rem;">
							<img src="./img/gaseosa-3.jpg" class="card-img-top img-col" alt="gaseosa-3">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="second">
		<a name="titulo">

			<div class="container-fluid c_menu py-3">
				<div class="row d-flex justify-content-between">

					<!-- Columna menu -->
					<div class="col-5 columna_menu ">
						<div class="row">
							<h4 class="text-center titulo_menu">Menú</h4>
						</div>
						<!-- Titulo de categorias -->
						<div class="row">
							<!-- hamburguesas -->
							<div class="col-6">
								<h6 class="text-center a">Hamburguesas</h6>
							</div>
							<!-- Malteadas -->
							<div class="col-6">
								<h6 class="text-center a">Malteadas</h6>
							</div>
						</div>
						<!-- Precios -->
						<div class="row ">
							<!--  Precios hamburguesas-->
							<div class="col-6 b">
								<div class="row ">
									<div class="col-7">
										<bold class="inf">*</bold> Combo Clásica
									</div>
									<div class="col-3">$13.000</div>
								</div>
								<div class="row">
									<div class="col-7">
										<bold class="inf">*</bold> Combo Doble
									</div>
									<div class="col-3">$18.000</div>
								</div>
							</div>
							<!-- Precios Malteadas -->
							<div class="col-6  justify-content-center">
								<div class="row  b ">
									<div class="col-9 ">
										<div class="row">
											<div class="col">Vainilla</div>
										</div>
										<div class="row">
											<div class="col">Chocolate</div>
										</div>
										<div class="row">
											<div class="col">Fresa</div>
										</div>
									</div>
									<div class="col-3 d-flex align-items-center">
										<div class="row ">$8.000</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Titulo de categorias #2 -->
						<div class="row pt-4">
							<!-- Perros -->
							<div class="col-6">
								<h6 class="text-center a">Perros</h6>
							</div>

							<!-- Gaseosas -->
							<div class="col-6">
								<h6 class="text-center a">Gaseosas</h6>
							</div>
						</div>

						<!-- Precios #2 -->
						<div class="row">
							<!-- Precio perros -->
							<div class="col-6">
								<div class="row b">
									<div class="col-7">
										<bold class="inf">*</bold> Combo perro caliente
									</div>
									<div class="col-3 d-flex align-items-center">$10.000</div>
								</div>
							</div>

							<!-- Precio geseosa -->
							<div class="col-6">
								<div class="row b">
									<div class="col-9 ">
										<div class="row">
											<div class="col">Coca-Cola</div>
										</div>
										<div class="row">
											<div class="col">Manzana</div>
										</div>
										<div class="row">
											<div class="col">Sprite</div>
										</div>
									</div>
									<div class="col-3 d-flex align-items-center">
										<div class="row ">$3.000</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Titulo de categorias #3 -->
						<div class="row pt-4 ">
							<div class="col-6 ">
								<h6 class="text-center a">Pizzas</h6>
							</div>
						</div>
						<!-- Precio pizza -->
						<div class="row ">
							<div class="col-6 ">
								<div class="row b">
									<div class="col-8 ">
										<div class="row">
											<div class="col">Jamón</div>
										</div>
										<div class="row">
											<div class="col">Hawaiana</div>
										</div>
										<div class="row">
											<div class="col">Pepperoni</div>
										</div>
									</div>
									<div class="col-3 d-flex align-items-center">
										<div class="row ">$8.000</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row pt-5">
							<div class="col">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
									<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
								</svg>
								<bold class="inf">*</bold>
								<small><i> Incluye papas y gaseosa</i></small>
							</div>
						</div>
					</div>


					<!-- Columna Reserva -->

					<div class="col-7 columna_pedido">
						<div class="row">
							<h4 class="text-center titulo_menu -b">Realizar pedido</h4>
						</div>
						<form name="formulario" action="./pages/procesar.php" method="POST" class="needs-validation" novalidate>
							<div class="row py-3">
								<div class="col-4">
									<label class="form-label" for="validation_nombre">Nombre</label>
									<input id="validation_nombre" name="nombre" type="text" class="form-control form-control-sm" placeholder="Nombre" required>
								</div>
								<div class="col-4">
									<label class="form-label" for="validation_direccion">Dirección</label>
									<input id="validation_direccion" name="direccion" type="text" class="form-control form-control-sm" placeholder="Dirección" required>
								</div>
								<div class="col-4">
									<label class="form-label" for="validation_tel">Teléfono</label>
									<input id="validation_tel" name="telefono" type="text" class="form-control form-control-sm" placeholder="Teléfono" required>
								</div>
							</div>
							<div class="row justify-content-between">
								<div class="col-4 ">
									<div class="row ">
										<h6 class="a  text-center">Hamburguesas</h6>
									</div>
									<div class="row text-center justify-content-center">
										<div class="col-5 ">
											<img src="./img/hamburguesa-1.jpg" class="img_form" alt="">

											<label for="validation_hambu_c" class="text-center x">Combo Clásica</label>
											<input id="validation_hambu_c" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_ham_c[]" required>
										</div>
										<div class="col-5 ">
											<img src="./img/hamburguesa-2.png" class="img_form" alt="">
											<label for="validation_hambu_d" class="text-center x">Combo Doble</label>
											<input id="validation_hambu_d" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_ham_d[]" required>
										</div>
									</div>
								</div>
								<div class="col-2 ">
									<div class="row">
										<h6 class="a text-center ">Perros</h6>
									</div>
									<div class="row text-center justify-content-center">
										<div class="col-10">
											<img src="./img/perro-1.png" class="img_form" alt="">
											<label for="validation_perro" class="text-center x">Combo perro</label><input id="validation_perro" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_perro[]" required>
										</div>
									</div>
								</div>
								<div class="col-5">
									<div class="row">
										<h6 class="a text-center">Pizzas</h6>
									</div>
									<div class="row text-center ">
										<div class="col-4">
											<img src="./img/pizza-1.jpg" class="img_form" alt="">
											<label for="validation_pizza_j" class="text-center x z">Pizza Jamón</label><input id="validation_pizza_j" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_piz_j[]" required>
										</div>
										<div class="col-4 text-center">
											<img src="./img/pizza-2.jpg" class="img_form" alt="">
											<label for="validation_pizza_h" class="text-center x">Pizza Hawaiana</label>
											<input id="validation_pizza_h" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_piz_h[]" required>
										</div>
										<div class="col-4 text-center">
											<img src="./img/pizza-3.jpg" class="img_form" alt="">
											<label for="validation_pizza_p" class="text-center x">Pizza Pepperoni</label>
											<input id="validation_pizza_p" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_piz_p[]" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row py-2 justify-content-between">
								<div class="col-5 ">
									<div class="row ">
										<h6 class="a  text-center">Malteadas</h6>
									</div>
									<div class="row text-center justify-content-center">
										<div class="col-4 ">
											<img src="./img/malteada_1.jpeg" class="img_form" alt="">
											<label for="validation_malte_f" class="text-center x">Malteada de Fresa</label>
											<input id="validation_malte_f" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_malt_f[]" required>
										</div>
										<div class="col-4 ">
											<img src="./img/malteada_2.jpg" class="img_form" alt="">
											<label for="validation_malte_c" class="text-center x">Malteada Chocolate</label>
											<input id="validation_malte_c" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_malt_c[]" required>
										</div>
										<div class="col-4 ">
											<img src="./img/malteada_3.jpg" class="img_form" alt="">
											<label for="validation_malte_v" class="text-center x">Malteada Vainilla</label>
											<input id="validation_malte_v" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_malt_v[]" required>
										</div>
									</div>
								</div>
								<div class="col-5 ">
									<div class="row ">
										<h6 class="a  text-center">Gaseosas</h6>
									</div>
									<div class="row text-center justify-content-center">
										<div class="col-4 ">
											<img src="./img/gaseosa_1.jpg" class="img_form" alt="">
											<label for="validation_ga_cc" class="text-center x z">Coca Cola</label>
											<input id="validation_ga_cc" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_ga_cc[]" required>
										</div>
										<div class="col-4 ">
											<img src="./img/gaseosa_2.jpg" class="img_form" alt="">
											<label for="validation_ga_m" class="text-center x z"> Manzana </label>
											<input id="validation_ga_m" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_ga_m[]" required>
										</div>
										<div class="col-4 ">
											<img src="./img/gaseosa_3.jpg" class="img_form" alt="">
											<label for="validation_ga_s" class="text-center x z">Sprite</label>
											<input id="validation_ga_s" type="number" value= "0" min="0" max="30" class="form-control form-control-sm" name="num_ga_s[]" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row d-flex justify-content-center">
								<div class="col-auto">
									<input type="submit" class="btn enviar" value="Enviar"></input>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</div>
	</a>
	</div>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	</script>
	<!-- Validar campos JS -->
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict'
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')
			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}
						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>
</body>
</html>
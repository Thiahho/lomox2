<?php
echo "<head>";
echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
echo "</head>";
?>



<div class="container mt-4	 col-lg-6">
		<div class="card col-sm-10">
			<div class="card-body">
				<form action="Validar" class="form-sign" method="post">

					<h1>Inicio Sesion</h1>
                    <picture>
                        <img class="logo" src="https://www.designevo.com/res/templates/thumb_small/red-cow-and-white-fire.webp" alt="Logo">
                    </picture>
                    <div class="contenedor">
						<div class="input-contenedor">
							<i class="fas fa-envelope icon"></i> 
							<input name="txtuser" type="text" placeholder="Usuario">
						</div>

						<div class="input-contenedor">
							<i class="fas fa-key icon"></i> 
							<input type="password" name="txtPass" placeholder="Clave">
						</div>
						<input type="submit" value="Ingresar" class="button" name="accion">
<<<<<<< HEAD
						<a class="regis" href="views/modulos/registro.php">Registrate</a>
						<a class="olvide-contraseña" href="views/modulos/olvidecontraseña.php">Olvidate la contraseña?$_COOKIE</a>
=======
						<a class="regis" href="index.php?action=registro">Registrate</a>
						<a class="regis" href="views/modulos/olvideClave.php">Olvidate la contraseña?boludito</a>
						<!--<a class="regis" href="index.php?action=olvideClave">Olvidate la contraseña?boludito</a>-->
                    </div>
>>>>>>> 68910d0f206a22f0b1c9c9aa79486ebc116970f3
			    </form>
			</div>
		</div>
	</div>



<script src="https://kit.fontawesome.com/fb52ebbe70.js"
crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
crossorigin="anonymous"></script>


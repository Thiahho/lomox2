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
                    <img class="logo" src="https://www.designevo.com/res/templates/thumb_small/red-cow-and-white-fire.webp" alt="Logo">
					<div class="contenedor">
						<div class="input-contenedor">
							<i class="fas fa-envelope icon"></i> 
							<input name="txtUser" type="text" placeholder="Usuario">
						</div>

						<div class="input-contenedor">
							<i class="fas fa-key icon"></i> 
							<input type="password" name="txtPass" placeholder="Clave">
						</div>
						<input type="submit" value="Ingresar" class="button" name="accion">
						<a class="regis" href="views/modulos/registro.php">Registrate</a>
						<a class="regis" href="views/modulos/olvidecontraseña.php">Olvidate la contraseña?boludito</a>
			    </form>
			</div>
		</div>
	</div>


<?php
/*
<div class="login">
    <div class="login-2">
        <h2>Iniciar sesión</h2>
        <form>
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>  

?>

<?php
/*
<div id=form>
    <div id=form-login>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
*/
?>

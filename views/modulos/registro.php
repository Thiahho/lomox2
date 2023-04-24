<?php
echo "<head>";
echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
echo "</head>";
?>  

<div class="container-regis mt-4	 col-lg-6">
		<div class="card-regis col-sm-10">
			<div class="card-body">
				<form action="Validar" class="form-registro" method="post">

					<h1>Registrarse</h1>
                    <div class="contenedor">
						<div class="input-contenedor">
							<i class="fas fa-envelope icon"></i> 
							<input name="txtemail" type="email" placeholder="Email">
						</div>
                        <div class="input-contenedor">
							<i class="fas fa-envelope icon"></i> 
							<input name="txtnombre" type="text" placeholder="Nombre">
						</div>
                        <div class="input-contenedor">
							<i class="fas fa-envelope icon"></i> 
							<input name="password" type="password" placeholder="Contraseña">
						</div>
                        <div class="input-contenedor">
							<i class="fas fa-envelope icon"></i> 
							<input name="passwordx2" type="password" placeholder="Repita Contraseña">
						</div>

						<input type="submit" value="Registrarse" class="button" name="accion">
			    </form>
			</div>
		</div>
	</div>

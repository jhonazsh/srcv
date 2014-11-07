<?php include 'base.php' ?>

<?php startblock('titulo') ?>
	Erick el Rojo | Reservaciones
<?php endblock(); ?>

<?php startblock('main') ?>
	
	<section id="header-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>
						Reservaciones
					</h3>
				</div>
			</div>
		</div>
	</section>
	<br>
	<section>
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							
							<div class="col-md-12">
								<label>Nombres y Apellidos:</label>
								<input type="text" name="fecha" class="form-control input-sm" placeholder="Nombres y Apellidos">
							</div>
							<div class="col-md-12 margen-arriba-uno">
								<label>E-Mail:</label>
								<input type="text" name="fecha" class="form-control input-sm" placeholder="E-Mail">
							</div>
							<div class="col-md-12 margen-arriba-uno">
								<label>Fecha de Salida:</label>
								<input type="date" name="fecha" class="form-control input-sm">
							</div>
							<div class="col-md-12 margen-arriba-uno">
								<label>Origen:</label>
								<select class="form-control input-sm">
					                <option>Trujillo</option>
					                <option>Lima</option>
					                <option>Máncora</option>
					                <option>Chiclayo</option>
					                <option>Piura</option>
					             </select>
							</div>
							<div class="col-md-12 margen-arriba-uno">
								<label>Destino:</label>
								<select class="form-control input-sm">
					                <option>Trujillo</option>
					                <option>Lima</option>
					                <option>Máncora</option>
					                <option>Chiclayo</option>
					                <option>Piura</option>
					             </select>
							</div>
						</div>

					</div>
				</div>

			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
						
						<div class="row">
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="panel panel-default">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			
		</div>
	</section>

<?php endblock(); ?>
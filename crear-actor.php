<?php
	require_once 'autoload.php';
/*llamo a $movies*/
	$movies = DB::getAllMovies();

	if ($_POST) {


		$actorToSave = new Actor($_POST['first_name'],$_POST['last_name'], $_POST['rating']);

		$actorToSave->setFavoriteMovieID($_POST['favorite_movie_id']);

		$saved = DB::saveActor($actorToSave);
	}

	$pageTitle = 'Crear Actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Crear Actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Ej: Mark" name="first_name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text" class="form-control" placeholder="Ej: Hamill" name="last_name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Rating:</label>
									<input type="text" class="form-control" placeholder="Ej: 9.5" name="rating">
								</div>
							</div>
							<!--Agrego desplegable de lista de películas para elegir la favorita -->
							<div class="col-6">
								<div class="form-group">
									<label>Película Favorita:</label>
									<select class="form-control" name="favorite_movie_id">
										<option value="">Elegí una película</option>
										<?php foreach ($movies as $movie): ?>
											<option value="<?php echo $movie->getID() ?>"><?php echo $movie->getTitle() ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Actor guardado con éxito!' : '¡No se pudo guardar el/la/le Actor!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>

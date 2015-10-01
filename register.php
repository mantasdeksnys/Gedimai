<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Gedimo registracija</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
</head>
<body>

<div class="row">
	<div class="small-12 small-centered columns">
		<form id="gedimo-registracija" method="POST" action="registered.php" name="gedimas">
			<fieldset>
				<legend>Gedimo registracija</legend>
				<div class="row">
					<div class="large-6 columns">
						<label>Vardas
							<input type="text" id="firstname" placeholder="Vardas" />
						</label>
					</div>
					<div class="large-6 columns">
						<label>Pavardė
							<input type="text" placeholder="Pavardė" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-4 columns">
						<label>Kabinetas
							<input type="text" placeholder="Kabineto numeris" />
						</label>
					</div>
					<div class="large-4 columns">
						<label>Pasirinkite gedimo rūšį:
							<select id="mainCategorySelect" name="mainCategorySelect">
								<option disabled selected>Pasirinkite:</option>
							</select>
						</label>
					</div>
					<div class="large-4 columns">
						<label>Detaliau:
							<select id="subCategorySelect" name="subCategorySelect">
								<option disabled selected>Pirma pasirinkite gedimo rūšį</option>
							</select>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Pastabos:
							<textarea placeholder="Detaliau nupasakokite gedimą. (nebūtina)"></textarea>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-9 columns"></div>
					<div class="large-3 columns">
						<input type="button" class="button tiny radius" value="Išvalyti" onClick="$('#gedimo-registracija')[0].reset();" /> 
						<input type="submit" class="button tiny success radius" value="Registruoti gedimą" />
						<input type="hidden" name="isset" value=TRUE>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/failure-db.js"></script>
<script>
    $(document).foundation();
</script>
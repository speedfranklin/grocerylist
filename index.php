<? include($_SERVER['DOCUMENT_ROOT'] . '/header.html'); ?>

<body>
	<!-- Search for a given recipe -->
	<div id="page-wrap">
	<label for="search">Search for a Recipe</label>
	<form action="lookup_recipe.php" method="POST" name="search">
		<!-- <input type="text" name="recipe"> -->	

	
		<!-- Output available recipes -->
		<h3>Select from a list of recipes for inspiration:</h3>
		<select multiple="multiple" name="recipes[]">
		<? $recipeQuery = "SELECT * FROM recipe;";
		if($result = mysqli_query($link, $recipeQuery)) { 
			while($row = mysqli_fetch_assoc($result)) {?>
				<option value="<?=$row['name']?>"><?=$row['name']?></option>
		<? }
		} ?>
		</select>
		<input type="submit">	
	</form>
	<!-- Display ingredients for desired recipe -->
	<ol>
	<? if(isset($_POST['recipes'])) {
		foreach($_POST['recipes'] as $recipe_name) {
		 	?><li><? include('recipe_name_to_id.php'); ?></li><?  
		}
	} ?>
	</ol>
	</div><!--  End page-wrap -->

<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.html'); ?>
<?
// Get the id number of the recipe
$recipeQuery = "SELECT * FROM recipe WHERE name = '" . $recipe_name . "';";

if($result = mysqli_query($link, $recipeQuery)) { ?>
	<table>
		<tbody>
		
	<? while($row = mysqli_fetch_assoc($result)) { 
			$recipe = $row['id'];
	?>
		<tr>
			<td>Ingredients for <?=$row['servings']?> servings</td>
			<td> of <?=$row['name']?></td>
		</tr>
	<?
		include('recipe_to_store.php');
		}
	
	mysqli_free_result($result);
	?>
		</tbody>
	</table> <?
	
} else {
	echo mysqli_errno($result);
	exit;
}
?>
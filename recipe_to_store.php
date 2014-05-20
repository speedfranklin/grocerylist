<? 
	$ingredientsQuery = 'SELECT * FROM ingredient WHERE recipe_id = ' . $recipe;
 
	if($result = mysqli_query($link, $ingredientsQuery)) { ?>

		<table>
			<tbody>
		<? while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?=$row['quantity']?></td>
				<td><?=$row['of']?></td>
				<td><?= $row['name']?></td>
			</tr>
		<? }
		
		mysqli_free_result($result);
		?>
		</tbody>
		</table><?
	} else {
		echo "Statement prepare failed";
		exit;
	}	

?>

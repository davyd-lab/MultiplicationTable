<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<title>Basic IV</title>
</head>

<body>

	<table class="table-striped">


	<?php
		
	for($row=0; $row<10; $row++){

		echo "<tr>";
		

		for($column=0; $column<10; $column++){

			if($row==0 && $column==0){
				echo "<td></td>";
			}

			elseif($row==0){
					echo "<td class='bold'>".$column."</td>";
				}

			elseif($column==0){
				echo "<td class='bold'>".$row."</td>";
			}
				
			else{
				echo "<td>". $row * $column. "</td>";
			}
			
		}
		echo "</tr>";

	}

	?>

	</table>

</body>
</html>
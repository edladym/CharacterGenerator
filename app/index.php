<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
	<body>
		<?php

    include('../src/Character.php');
    $character = new Character();

		//*************************************************************
		//* Print out a description of a randomly generated character *
		//************************************************************* ?>
		<center>
			<p>You see <?php echo $character->name; ?>, the <?php echo $character->race . ' ' . $character ->class; ?>.</p> 
			<p>He is <?php echo $character->height; ?>, with <?php echo $character->eye_color;?> eyes and <?php echo $character->hair_color; ?> hair.</p>
					<table>
						<tr>
							<th>Ability</th>
							<th>Score</th>
							<th>Modifier</th>
						</tr>
						<tr>
							<td>Strength</td>
							<td><?php echo ''; ?></td>
							<td><?php echo ''; ?></td>
						</tr>
						<tr>
							<td>Dexterity</td>
							<td><?php echo ''; ?></td>
							<td><?php echo ''; ?></td>
						</tr>
						<tr>
							<td>Constitution</td>
							<td><?php echo ''; ?></td>
							<td><?php echo ''; ?></td>
						<tr>
							<td>Intelligence</td>
							<td><?php echo ''; ?></td>
							<td><?php echo ''; ?></td>
						</tr>
						<tr>
							<td>Widsom</td>
							<td><?php echo ''; ?></td>
							<td><?php echo ''; ?></td>
						</tr>
						<tr>
							<td>Charisma</td>
							<td><?php echo ''; ?></td>
							<td><?php echo ''; ?></td>
						</tr>
					</table>
		</center>

	</body>
</html>
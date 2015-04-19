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
			<h1>
				<?php 
					echo "You see ".$character->name. 
					", the " .   " " . "</br>";

					echo "He is "  . ", with " . 
					" eyes and "  . " hair. </br>";

					echo "He appears to be of "  . " build. </br></br>";

					echo "His stats are as follows:</br>"; ?>

					<table style = "width:30%">
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
			</h1>
		</center>

	</body>
</html>
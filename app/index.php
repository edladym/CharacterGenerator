<?php
	include('../src/Character.php');
	$character = new Character();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/static/style.css">
</head>
<body>
	<div class="container">   
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
							<td><?php echo $character->stats->str->val; ?></td>
							<td><?php echo $character->stats->str->mod; ?></td>
						</tr>
						<tr>
							<td>Dexterity</td>
							<td><?php echo $character->stats->dex->val; ?></td>
							<td><?php echo $character->stats->dex->mod; ?></td>
						</tr>
						<tr>
							<td>Constitution</td>
							<td><?php echo $character->stats->con->val; ?></td>
							<td><?php echo $character->stats->con->mod; ?></td>
						</tr>
						<tr>
							<td>Intelligence</td>
							<td><?php echo $character->stats->int->val; ?></td>
							<td><?php echo $character->stats->int->mod; ?></td>
						</tr>
						<tr>
							<td>Wisdom</td>
							<td><?php echo $character->stats->wis->val; ?></td>
							<td><?php echo $character->stats->wis->mod; ?></td>
						</tr>
						<tr>
							<td>Charisma</td>
							<td><?php echo $character->stats->cha->val; ?></td>
							<td><?php echo $character->stats->cha->mod; ?></td>
						</tr>
					</table>
		</center>
		</div>
	</body>
</html>
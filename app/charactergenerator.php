<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
	<body>
		<?php

		//******************************************************************
		//* Declare arrays for all randomly generated elements             *
		//* name1, name2, and name3 will combine to form a full first name *
		//******************************************************************
		$name1 = ["A", "Ada", "Aki", "Al", "Ali", "Alo", "Ana", "Ani", 
				"Ba", "Be", "Bo", "Bra", "Bro", "Cha", "Chi", "Da", "De", "Do", 
				"Dra", "Dro", "Eki", "Eko", "Ele", "Eli", "Elo", "Er", "Ere", 
				"Eri", "Ero", "Fa", "Fe", "Fi", "Fo", "Fra", "Gla", "Gro", "Ha",
			 	"He", "Hi", "Illia", "Ira", "Ja", "Jo", "Ka", "Ki", "Kra", "La", 
			 	"Le", "Lo", "Ma", "Me", "Mi", "Mo", "Na", "Ne", "No", "O", "Ol", 
			 	"Or", "Pa", "Pe", "Pi", "Po", "Pra", "Qua", "Qui", "Quo", "Ra", 
			 	"Re", "Ro", "Sa", "Sca", "Sco", "Se", "Sha", "She", "Sho", "So", 
			 	"Sta", "Ste", "Sti", "Stu", "Ta", "Tha", "The", "Tho", "Ti", "To", 
			 	"Tra", "Tri", "Tru", "Ul", "Ur", "Va", "Vo", "Wra", "Xa", "Xi", 
			 	"Zha", "Zho"];

		$name2 = ["bb", "bl", "bold", "br", "bran", "can", "carr", "ch",
		 		"cinn", "ck", "ckl", "ckr", "cks", "dd", "dell", "dr", "ds", "fadd",
		 		"fall", "farr", "ff", "fill", "fl", "fr", "genn", "gg", "gl", "gord",
		   		"gr", "gs", "h", "hall", "hark", "hill", "hork", "jenn", "kell", "kill",
		   		"kk" ,"kl", "klip", "kr", "krack", "ladd", "land", "lark", "ld", "ldr",
		    	"lind", "ll", "ln", "lord", "ls", "matt", "mend", "mm", "ms", "nd", 
		     	"nett", "ng", "nk", "nn", "nodd", "ns", "nt", "part", "pelt", "pl", 
		    	"pp", "ppr", "pps", "rand", "rd", "resh", "rn", "rp", "rr", "rush", 
		    	"salk", "sass", "sc", "sh", "sp", "ss", "st", "tall", "tend", "told", 
		    	"v", "vall", "w", "wall", "wild", "will", "x", "y", "yang", "yell", "z", 
		    	"zenn"];

		$name3 = ["a", "ab", "ac", "ace", "ach", "ad", "adle", "af", "ag", "ah",
		 		"ai", "ak", "aker", "al", "ale", "am", "an", "and", "ane", "ar", "ard", "ark",
		  		"art", "ash", "at", "ath", "ave", "ea", "eb", "ec", "ech", "ed", "ef", "eh",
		   		"ek", "el", "elle", "elton", "em", "en", "end", "ent", "enton", "ep", "er",
		   		"esh", "ess", "ett", "ic", "ich", "id", "if", "ik", "il", "im", "in", "ion", 
		   		"ir", "is", "ish", "it", "ith", "ive", "ob", "och", "od", "odin", "oe", "of", 
		   		"oh", "ol", "olen", "omir", "or", "orb", "org", "ort", "os", "osh", "ot", "oth", 
		   		"ottle", "ove", "ow", "ox", "ud", "ule", "umber", "un", "under", "undle", "unt", 
		   		"ur", "us", "ust", "ut"];

    	$name4 = ["icus"];

		$classlist = ["Barbarian", "Bard", "Druid", "Monk", "Paladin", "Ranger", "Rogue", "Fighter", "Wizard", "Cleric"];

		$racelist = ["Human", "Gnome", "Dwarf", "Gnome", "Halfling", "Half-Elf"];

		$eyecolor = ["brown", "black", "white", "red", "golden", "blue", "green", "blue green", "orange", "silver"];

		$haircolor = ["brown", "black", "white", "grey", "silver", "red", "orange", "no"];

		$height = ["short", "tall", "medium height"];

		$build = ["athletic", "stocky", "overweight"]; 

		function diceRoller(){
			global $total;
			$rolls = [rand(1,6), rand(1,6), rand(1,6), rand(1,6)];
			sort($rolls);
			array_shift($rolls);
			$total = array_sum($rolls);
			return $total;
		}

		function abilityModifiers($total){
			if ($total==1)
				return "-5";
			else if ($total>=2 && $total <=3)
				return "-4";
			else if ($total >=4 && $total <=5)
				return "-3";
			else if ($total >=6 && $total <=7)
				return "-2";
			else if ($total >=8 && $total <=9)
				return "-1";
			else if ($total >=10 && $total <=11)
				return "+0";
			else if ($total >=12 && $total <=13)
				return "+1";
			else if ($total >=14 && $total <=15)
				return "+2";
			else if ($total >=16 && $total <=17)
				return "+3";
			else if ($total >=18 && $total <=19)
				return "+4";
			else if ($total >=20 && $total <=21)
				return "+5";
		}

		//*************************************************************
		//* Print out a description of a randomly generated character *
		//************************************************************* ?>
		<center>
			<h1>
				<?php 

					echo "You see " . $name1[array_rand($name1)] . $name2[array_rand($name2)] . $name3[array_rand($name3)] . $name4[0] . 
					", the " . $racelist[array_rand($racelist)] . " " . $classlist[array_rand($classlist)] . "</br>";

					echo "He is " . $height[array_rand($height)] . ", with " . $eyecolor[array_rand($eyecolor)] . 
					" eyes and " . $haircolor[array_rand($haircolor)] . " hair. </br>";

					echo "He appears to be of " . $build[array_Rand($build)] . " build. </br></br>";

					echo "His stats are as follows:</br>"; ?>

					<table style = "width:30%">
						<tr>
							<th>Ability</th>
							<th>Score</th>
							<th>Modifier</th>
						</tr>
						<tr>
							<td>Strength</td>
							<td><?php echo diceRoller(); ?></td>
							<td><?php echo abilityModifiers($total); ?></td>
						</tr>
						<tr>
							<td>Dexterity</td>
							<td><?php echo diceRoller(); ?></td>
							<td><?php echo abilityModifiers($total); ?></td>
						</tr>
						<tr>
							<td>Constitution</td>
							<td><?php echo diceRoller(); ?></td>
							<td><?php echo abilityModifiers($total); ?></td>
						<tr>
							<td>Intelligence</td>
							<td><?php echo diceRoller(); ?></td>
							<td><?php echo abilityModifiers($total); ?></td>
						</tr>
						<tr>
							<td>Widsom</td>
							<td><?php echo diceRoller(); ?></td>
							<td><?php echo abilityModifiers($total); ?></td>
						</tr>
						<tr>
							<td>Charisma</td>
							<td><?php echo diceRoller(); ?></td>
							<td><?php echo abilityModifiers($total); ?></td>
						</tr>
					</table>
			</h1>
		</center>

	</body>
</html>
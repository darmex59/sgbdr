<html lang= 'fr'>

<body>
<?php


function render_all($res)
{
echo "<p> Bonjour </p>";
while ($donnees = $res->fetch()){
        ?>
			<p>
				<?php

					echo "<tr>";
    				//echo "<td>" . $donnees['id'] . ", </td>";
    				echo "<td>" . $donnees['Nom'] . " </td>";
    				//echo "<td>" . $donnees['idType'] . " </td>";
    				echo "</tr>";
				?>
			</p>
		<?php
	}
}

	?>

	</body>

</html>
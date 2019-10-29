
<html lang= 'fr'>




<body>

<h1> Page de test !</h1>



<?php
require('model.php');

require('view.php');

$res = getSportsByTypes();
$sport = getSports();
$first = getFirstSport(1);
    

//render_all($res);	
//render_all($sport);	
render_all($first);
			
?>
</html>
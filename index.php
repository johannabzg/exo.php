<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
<link rel="stylesheet" type="text/css" href="doc.css"/>
</head>
<body>

<!-- zone pour le truc des jour de la semaine -->

<title> salut </title>

<form method="post" action="index.php">
      jour de la semaine : <input type="text" name="jourok" autofocus>
	<input type="submit" value="je marche !"/>
</form> 

<!-- zone a faire au css -->

<div class="message">

<?php
// truc pour le jour dans le champ de saisie.

$jourok = $_POST['jourok'];

if ($jourok == "lundi")
{
echo "c'est lundi mdr!";
}

if ($jourok == "mardi")
{
echo "c'est mardi :D!";
}

if ($jourok == "mercredi")
{
echo "c'est mercredi courage !";
}

if ($jourok == "jeudi")
{
echo "c'est bientot le week-end!";
}
if ($jourok == "vendredi")
{
echo "le week-end approche !";
}
if ($jourok == "samedi")
{
echo "ouii ! le week-end, repos !";
}
if ($jourok == "dimanche")
{
echo "bon dimanche :) !";
}
?>
</div>

<!-- doit contenir tout les autres truc  -->

<section id="contient">
<div class="semaine10">
<p> FOR </p>
<?php 

$semaine1 = array 
('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
for ($jour1 = 0; $jour1 <count($semaine1); ++$jour1);
{
echo $semaine1 [0];
echo '<br/>';
echo $semaine1 [1];
echo '<br/>';
echo $semaine1 [2];
echo '<br/>';
echo $semaine1 [3];
echo '<br/>';
echo $semaine1 [4];
echo '<br/>';
echo $semaine1 [5];
echo '<br/>';
echo $semaine1 [6];

}
?>
</div>

<div class="semaine10">
<p> FOREACH </p>
<?php

echo "<div>";
foreach ($semaine1 as $jour1);
{
 $jour1= $jour1*0;
}
{
echo $semaine1 [0];
echo '<br/>';
echo $semaine1 [1];
echo '<br/>';
echo $semaine1 [2];
echo '<br/>';
echo $semaine1 [3];
echo '<br/>';
echo $semaine1 [4];
echo '<br/>';
echo $semaine1 [5];
echo '<br/>';
echo $semaine1 [6];
}

echo"</div>"
?>
</div>
<div class="semaine10">
<p> WHILE </p>
<?php

// concatenation 
while (list ($key,$val) = each ($semaine1)) 
 echo "<p>".$val."</p>";
 reset($semaine1);


?>
</div>
</section>
</body>
</html>

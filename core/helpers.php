<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
function sessionupdate($userinput, $cpuinput,$rightansw,$points){
	if ($userinput != $rightansw) {
		$_SESSION['army1'] -=$points;
	}
	if ($cpuinput != $rightansw) {
		$_SESSION['army2'] -=$points;
	}
}
function winner(){
	
		if ($_SESSION['army1'] > $_SESSION['army2']){
		echo "<strong>Pobednik je army1</strong> <br><br>";
		echo "Army1 vojska  " .$_SESSION['army1']."<br><br>";
		echo "Army2 vojska  " .$_SESSION['army2']."<br><br>";
		$army1 = $_SESSION['army1'] - $_SESSION['army2'];
		echo "Pobeda army1 sa razlikom od  ".$army1 ." vojnika";
		} 
		if ($_SESSION['army1'] < $_SESSION['army2']){
		echo "<strong>Pobednik je army2</strong> <br><br>";
		echo "Army2 vojska  " .$_SESSION['army2']."<br><br>";
		echo "Army1 vojska  " .$_SESSION['army1']."<br><br>";
		$army2 = $_SESSION['army2'] - $_SESSION['army1'];
		echo "Pobeda army2 sa razlikom od  ".$army2 ." vojnika";
		} 
	elseif ($_SESSION['army1'] == $_SESSION['army2']){
		echo "Nema pobednika nereso je <br><br>";
	}
}

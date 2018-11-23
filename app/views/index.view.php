<?php require('partials/head.php');?>

    <h1>Home Page</h1>
	
    <h3>Unesi broj vojnika za 2 armije</h3>
    <br>
    <form action="war/<?php echo $data[0];?>" method="POST">
		<label for="army1">Your Army</label>
		<input type="number" name="army1"><br><br>
		<label for="army2">CPU Army</label>
		<input type="number" name="army2"><br>
		<br>
		<input type="submit" name="submit">
    </form>

<div class="rules">
<h1>Napomena Pravila Igre</h1>
<p>Igra se igra tako sto unesete broj vojnika za sebe i CPU.<br>
Odgovaras na 5 pitanja svako pitanje nosi (5,10,15,20,25) vojnika i gradacijski se povecavaju za 5 vojnika.
<ul>
	<li>Za tacan odgovor se nedobija nista</li>
	<li>Za netacan odgovor se oduzima n broj vojnika od ukupnog broja u zavisnosti na kom si pitanju</li>
	<li>Slucaj da CPU i ti date netacan odgovor obojici se oduzimaju vojnici</li>
</ul>
<br>CPU ima 33,33% sanse jer ima 3 ponudjena odgovora koje random izvlaci.<br>Cilj igre je da posle 5 pitanja imas vise vojske od CPU.<br><br>
</p>
</div>
</body>
</html>

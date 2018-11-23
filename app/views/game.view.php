
<h3>Pitanje <?=$data[0][0]->id_questions ?></h3>
<br>
<?php 

	echo "<div class='army'>";
	echo "<h3>U ovoj bitci ucestvuje {$data[4]} vojnika</h3>";
	echo "Trenutno stanje Vojnika : <br><br>";
	echo "Tvoja vojska :".$data[3][0]."<br>";
	echo "CPU vojska :".$data[3][1]."<br>";
	echo "</div><br><br>";
	echo $data[0][0]->id_questions .".".$data[0][0]->questions;
	?>
	<form action="/war/<?php echo $data[0][0]->id_questions ?>" method="POST"> 
	<br><br>
	<input type="text" placeholder="odgovor" name="answer"><br><br>
	<input type="submit" name="submitansw" value="Potvrdi i vidi">
	</form>
	<br><br>
 <?php 
 	if (isset($_POST['submitansw']) && isset($_POST['answer'])) {
 	$userinput = $_POST['answer'];
 	sessionupdate($userinput,$data[2][0]->answers,$data[1][0]->answers,$data[4]);
 	$data[0][0]->id_questions++;
 	echo "<div class='answer'>";
 	echo "<strong>Vas Odgovor: </strong>{$_POST['answer']}<br><br>";
 	echo "<strong>CPU Odgovor: </strong>{$data[2][0]->answers}<br><br>";
 	echo "<strong>Tacan Odgovor: </strong>{$data[1][0]->answers}<br><br>";

 
 	if ($data[0][0]->id_questions == 6) {
 		echo "<form action='finish' method='POST'>";
 		echo "<input type='submit' value='Finish Game' name='submit'>";
 		echo "</form>";
 	}
 	else{
 	?>
 	<form action="/war/<?php echo $data[0][0]->id_questions ?>" method="POST">
 	<?php
 	echo '<input type="submit" name="submit" value="Next Question">';
 	echo "</form>";
 	}
 }
 ?>
<?php
		header('Content-Type: text/html, charset=utf-8');

		$conexao = mysqli_connect("localhost", "root", "") or die ("Could not connect to data server!");
		mysqli_select_db($conexao, "agencia") or die ("Database not found!");
		
		mysqli_query($conexao, "SET NAMES 'utf8'");
		mysqli_query($conexao, 'SET character_set_connection=utf8');
		mysqli_query($conexao, 'SET character_set_client=utf8');
		mysqli_query($conexao, 'SET character_set_results=utf8');


			$name 			  = $_POST["name"];
			$telephone 		  = $_POST["telephone"];
			$origin 		  = $_POST["origin"];
			$destination 	  = $_POST["destination"];
			$date_from 		  = $_POST["date_from"];
			$date_to 		  = $_POST["date_to"];
			$travelers_number = $_POST["travelers_number"];


			if (empty($name)){
				echo "<script>alert('Please enter your name correctly.'); history.back();</script>";
			}elseif (empty($telephone)){
				echo "<script>alert('Please enter your phone correctly.'); history.back();</script>";
			}elseif (empty($origin)){
				echo "<script>alert('Please enter your origin correctly.'); history.back();</script>";
			}elseif (empty($destination)){
				echo "<script>('Please enter your destination correctly.'); history.back();</script>";
			}elseif (empty($date_from)){
				echo "<script>alert('Please enter your departure date correctly.'); history.back();</script>";
			}elseif (empty($date_to)){
				echo "<script>alert('Please enter the return date correctly.') history.back();</script>";
			}elseif ($date_to < $date_from) {
				echo 'Arrival date must be greater than the departure date.';
			}elseif (date('Y-m-d') > $date_from) {
				echo 'Departure date must be equal to or greater than the current date.';
			}elseif (empty($travelers_number)){
				echo "<script>alert('Please enter the number of travelers correctly.') history.back();</script>";
			}else{
				mysqli_query($conexao, "insert into viagens (name, telephone, origin, destination, date_from, date_to, travelers_number) values ('$name', '$telephone', '$origin', '$destination', '$date_from', '$date_to', '$travelers_number');");
					//var_dump(mysqli_error($conexao)); die;
					header("location: sucess.php");
			}
?>

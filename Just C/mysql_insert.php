<?php
	
	if(isset($_POST['name'])) {$name=$_POST['name'];}
	if(isset($_POST['professija'])) {$professija=$_POST['professija'];}
	if(isset($_POST['email'])) {$email=$_POST['email'];}
	if(isset($_POST['age'])) {$age=$_POST['age'];}
	if(isset($_POST['phone'])) {$phone=$_POST['phone'];}
	if(isset($_POST['lichnostnye'])) {$lichnostnye=$_POST['lichnostnye'];}
	if(isset($_POST['intelektualnye'])) {$intelektualnye=$_POST['intelektualnye'];}
	if(isset($_POST['psikhofizicheskie'])) {$psikhofizicheskie=$_POST['psikhofizicheskie'];}
	if(isset($_POST['fiziologicheskie'])) {$fiziologicheskie=$_POST['fiziologicheskie'];}
	if(isset($_POST['fizicheskie'])) {$fizicheskie=$_POST['fizicheskie'];}

	$db = mysqli_connect('localhost', 'zaimen6k_pvk', 'ci&tH2Rt', 'zaimen6k_pvk');


	if($name =='' && $professija =='' && $email =='' && $age =='' && $phone =='' && $lichnostnye =='' && $intelektualnye =='' && $psikhofizicheskie =='' && $fiziologicheskie =='' && $fizicheskie =='') {
		echo "<p>Заполните поля!</p>";
	}

	else {
		$sql2 = "INSERT INTO pvk (name, professija, email, age, phone, lichnostnye, intelektualnye, psikhofizicheskie, fiziologicheskie, fizicheskie) VALUES ('$name', '$professija', '$email', '$age', '$phone', '$lichnostnye', '$intelektualnye', '$psikhofizicheskie', '$fiziologicheskie', '$fizicheskie')";
		$result = mysqli_query($db, $sql2);
	}
	
	if($result == "true") {
		echo "<p>Информация успешно добавлена в таблицу БД</p>";
	}
	else {
		echo "<p>Ничего не добавилось</p>";
	}


?>
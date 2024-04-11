<p>Данные актуальны на <?php echo date("d-m-Y"); ?></p>
<table class="mytable" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th rowspan="2">№ п/п</th>
			<th rowspan="2">ФИО</th>
			<th rowspan="2">Название профессии</th>
			<th rowspan="2">Возраст</th>
			<th rowspan="2">Телефон</th>
			<th colspan="5">ПВК</th>
			<th>-</th>
			<th>-</th>
		</tr>
		<tr>
			<th>Личностные</th>
			<th>Интеллектуальные</th>
			<th>Собственно психофизиологические</th>
			<th>Физиологические</th>
			<th>Физические</th>
			<th>-</th>
			<th>-</th>
		</tr>
	</thead>

	<tbody>
		<?php

			$sql = "SELECT * FROM pvk";
			$my_data = mysqli_query($db, $sql);

			//print_r($my_data);

			$count = 1;

			foreach($my_data as $row) {
				echo "<tr>";
					echo "<td class='number'>".$count."</td>";
					echo "<td> ".$row["name"]."</td>";
					echo "<td> ".$row["professija"]."</td>";
					echo "<td> ".$row["age"]."</td>";
					echo "<td> ".$row["phone"]."</td>";
					echo "<td class='kachestva'> ".$row["lichnostnye"]."</td>";
					echo "<td class='kachestva'> ".$row["intelektualnye"]."</td>";
					echo "<td class='kachestva'> ".$row["psikhofizicheskie"]."</td>";		
					echo "<td class='kachestva'> ".$row["fiziologicheskie"]."</td>";
					echo "<td class='kachestva'> ".$row["fizicheskie"]."</td>";
					echo "<td> - </td>";
					echo "<td> - </td>";
				echo "</tr>";
				$count++;
			}

		?>
	</tbody>

</table>

<br><br>

<a class="add-button">Добавить кандидата</a>
<div class="modal-form">
	<div class="title-form">Добавление сотрудника</div>
	<form action="mysql_insert.php" method="POST" name="form">
		<div>
			<label for="">ФИО: </label><input type="text" name="name">
		</div>
		<div>
			<label for="">Название профессии: </label><input type="text" name="professija">
		</div>
		<div>
			<label for="">E-mail: </label><input type="text" name="email">
		</div>
		<div>
			<label for="">Возраст: </label><input type="text" name="age">
		</div>
		<div>
			<label for="">Телефон: </label><input type="text" name="phone">
		</div>
		<div>
			<label for="">Личностные: </label><input type="text" name="lichnostnye">
		</div>
		<div>
			<label for="">Интелектуальные: </label><input type="text" name="intelektualnye">
		</div>
		<div>
			<label for="">Психофизические: </label><input type="text" name="psikhofizicheskie">
		</div>
		<div>
			<label for="">Физиологические: </label><input type="text" name="fiziologicheskie">
		</div>
		<div>
			<label for="">Физические: </label><input type="text" name="fizicheskie">
		</div>
		<div>
			<input type="submit" value="Добавить">
		</div>
	</form>
</div>
<?php
//підключення до db.php та header.php

	//якщо пост-запит існує
if(!empty($_POST)) {
	// присвоюємо змінній і добавляємо в базу
	$sql = "UPDATE  coments SET coment = '".$_POST['coment'] ."', user_id = '" .$_POST['user_id'] ."' WHERE id = " .$_GET['id'] . ";";
	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
		//виводимо повідомлення із посиланням
		echo "<h2>Updated! <a href='/admin/coments.php'>Return</a></h2>";
	} else {
		//в іншому випадку виводимо помилку
		echo "Error: " .sql ."<br>" . mysqli_error($conn);
	}
}
	//вибираємо з бази та присвоюємо змінній

	$sql = "SELECT * FROM coments WHERE id = " .$_GET['id'];
	//зєднуємось із базою
	$result = mysqli_query($conn, $sql);
	//перебираємо в базі масив даних
	$row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users list</h6>
    </div>
    <div class="card-body">

		<form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">    
				<div class="mb-3">
					 <label for="coment" class="form-label">Coment</label>
					 <input type="text" name="coment" class="form-control" id="coment" placeholder="Enter your coment"value="<?php echo $row['coment']; ?>">
				</div>  
				<div class="mb-3">
					 <label for="coment" class="form-label">User_id</label>
					 <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Enter your id" value="<?php echo $row['user_id']; ?>">
				</div>

				<button type="submit" class="btn btn-success btn-lg">Save</button>
		</form>
	</div>
</div>


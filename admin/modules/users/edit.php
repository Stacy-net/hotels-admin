<?php
//підключення до db.php та header.php

	//якщо пост-запит існує
if(!empty($_POST)) {
	// присвоюємо змінній і добавляємо в базу
	$sql = "UPDATE  users SET username = '".$_POST['name'] ."', email = '" .$_POST['email'] ."', phone = '" .$_POST['phone'] ."' WHERE id = " .$_GET['id'] . ";";
	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
		//виводимо повідомлення із посиланням
		echo "<h2>Updated! <a href='/admin/users.php'>Return</a></h2>";
	} else {
		//в іншому випадку виводимо помилку
		echo "Error: " .sql ."<br>" . mysqli_error($conn);
	}
}
	//вибираємо з бази та присвоюємо змінній

	$sql = "SELECT * FROM users WHERE id = " .$_GET['id'];
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
					 <label for="username" class="form-label">Username</label>
					 <input type="text" name="name" class="form-control" id="username" placeholder="Enter your name"value="<?php echo $row['username']; ?>">
				</div>  
				<div class="mb-3">
					 <label for="username" class="form-label">Email</label>
					 <input type="email" name="email" class="form-control" id="username" placeholder="Enter your email" value="<?php echo $row['email']; ?>">
				</div>
				<div class="mb-3">
					 <label for="username" class="form-label">Phone</label>
					 <input type="phone" name="phone" class="form-control" id="username" placeholder="Enter your phone" value="<?php echo $row['phone']; ?>">
				</div>
				<button type="submit" class="btn btn-success btn-lg">Save</button>
		</form>
	</div>
</div>


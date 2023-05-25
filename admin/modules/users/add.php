<?php

//якщо пост-запит існує
if(!empty($_POST)) {
	// присвоюємо змінній і вставляємо в базу
	$sql = "INSERT INTO users ( username, email, phone) VALUES ( '" .$_POST['name'] ."', '" .$_POST['email'] ."', '" .$_POST['phone'] ."');";
	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
	//виводимо повідомлення + посилання
		echo "<h2>Updated! <a href='/admin/users.php'>Return</a></h2>";
	} else {
	//в іншому випадку виводимо помилку
		echo "Error: " .sql ."<br>" . mysqli_error($conn);
	}
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users list</h6>
    </div>
    <div class="card-body">

		<form action="?page=add" method="POST">    
				<div class="mb-3">
					 <label for="username" class="form-label">Username</label>
					 <input type="text" name="name" class="form-control" id="username" placeholder="Enter your name">
				</div>  
				<div class="mb-3">
					 <label for="username" class="form-label">Email</label>
					 <input type="email" name="email" class="form-control" id="username" placeholder="Enter your email">
				</div>
				<div class="mb-3">
					 <label for="username" class="form-label">Phone</label>
					 <input type="phone" name="phone" class="form-control" id="username" placeholder="Enter your phone">
				</div>
				<button type="submit" class="btn btn-success btn-lg">Save</button>
		</form>
	</div>
</div>
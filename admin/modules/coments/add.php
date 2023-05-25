<?php

//якщо пост-запит існує
if(!empty($_POST)) {
	// присвоюємо змінній і вставляємо в базу
	$sql = "INSERT INTO coments ( coment, user_id ) VALUES ( '" .$_POST['coment'] ."', '" .$_POST['user_id'] ."');";
	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
	//виводимо повідомлення + посилання
		echo "<h2>Updated! <a href='/admin/coments.php'>Return</a></h2>";
	} else {
	//в іншому випадку виводимо помилку
		echo "Error: " .sql ."<br>" . mysqli_error($conn);
	}
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Coments list</h6>
    </div>
    <div class="card-body">

		<form action="?page=add" method="POST">    
				<div class="mb-3">
					 <label for="coment" class="form-label">Coment</label>
					 <input type="text" name="coment" class="form-control" id="coment" placeholder="Enter your coment">
				</div>  
				<div class="mb-3">
					 <label for="coment" class="form-label">User_id</label>
					 <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Enter your id">
				</div>
				
				<button type="submit" class="btn btn-success btn-lg">Save</button>
		</form>
	</div>
</div>
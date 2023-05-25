<?php
//підключення до db.php та header.php
require($_SERVER['DOCUMENT_ROOT'] . '/app/include/db.php');
	//якщо пост-запит існує
if(!empty($_POST)) {
	// присвоюємо змінній і добавляємо в базу
	$sql = "UPDATE  hotel_posts SET name = '".$_POST['name'] ."', rooms = '" .$_POST['rooms'] ."' , locations = '" .$_POST['locations'] ."', price = '" .$_POST['price'] ."', min_description = '" .$_POST['min_description'] ."', description = '" .$_POST['description'] ."', img = '" .$_POST['img'] ."' WHERE id = " .$_GET['id'] . ";";
	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
		echo "<h2>Updated! <a href='/admin/posts.php'>Return</a></h2>";
	} else {
		//в іншому випадку виводимо помилку
		echo "Error: " .$sql ."<br>" . mysqli_error($conn);
	}
}
	//вибираємо з бази та присвоюємо змінній

	$sql = "SELECT * FROM hotel_posts WHERE id = " .$_GET['id'];
	//зєднуємось із базою
	$result = mysqli_query($conn, $sql);
	//перебираємо в базі масив даних
	$row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Posts list</h6>
    </div>
    <div class="card-body">

		<form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">    
				
				<div class="mb-3">
					 <label for="name" class="form-label">Name</label>
					 <input type="name" name="name" class="form-control" id="name" placeholder="Enter hotel name" value="<?php echo $row['name']; ?>" >
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Rooms</label>
					 <input type="text" name="rooms" class="form-control" id="name" placeholder="Enter rooms" value="<?php echo $row['rooms']; ?>" >
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Locations</label>
					 <input type="text" name="locations" class="form-control" id="name" placeholder="Enter hotel location" value="<?php echo $row['locations']; ?>" >
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Price</label>
					 <input type="text" name="price" class="form-control" id="name" placeholder="Enter price"  value="<?php echo $row['price']; ?>" >
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Min.description</label>
					 <input type="text" name="min_description" class="form-control" id="name" placeholder="Enter min_description" value="<?php echo $row['min_description']; ?>" >
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Description</label>
					 <input type="text" name="description" class="form-control" id="name" placeholder="Enter description" value="<?php echo $row['description']; ?>" >
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Image</label>
					 <input type="text" name="img" class="form-control" id="name" placeholder="Enter name image" value="<?php echo $row['img']; ?>" >
				</div>


				<button type="submit" class="btn btn-success btn-lg">Save</button>
		</form>
	</div>
</div>




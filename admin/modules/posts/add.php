<?php 

//якщо пост-запит існує
if(!empty($_POST)) {
	// присвоюємо змінній і вставляємо в базу
	$sql = "INSERT INTO hotel_posts ( name, rooms, locations, price, min_description, description, img ) VALUES ( '" .$_POST['name'] ."', '" .$_POST['rooms'] ."', '" .$_POST['locations'] ."', '" .$_POST['price'] ."', '" .$_POST['min_description'] ."', '" .$_POST['description'] ."',  '" .$_POST['img'] ."');";

	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
	//виводимо повідомлення + посилання
		echo "<h2>Updated! <a href='/admin/posts.php'>Return</a></h2>";
	} else {
	//в іншому випадку виводимо помилку
		echo "Error: " .$sql ."<br>" . mysqli_error($conn);
	}
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hotels list</h6>
    </div>
    <div class="card-body">

		<form action="?page=add" method="POST">    
				<div class="mb-3">
					 <label for="name" class="form-label">Name</label>
					 <input type="name" name="name" class="form-control" id="name" placeholder="Enter hotel name">
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Rooms</label>
					 <input type="text" name="rooms" class="form-control" id="name" placeholder="Enter rooms">
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Locations</label>
					 <input type="text" name="locations" class="form-control" id="name" placeholder="Enter hotel location">
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Price</label>
					 <input type="text" name="price" class="form-control" id="name" placeholder="Enter price">
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Min.description</label>
					 <input type="text" name="min_description" class="form-control" id="name" placeholder="Enter min_description">
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Description</label>
					 <input type="text" name="description" class="form-control" id="name" placeholder="Enter description">
				</div>  
				<div class="mb-3">
					 <label for="name" class="form-label">Image</label>
					 <input type="text" name="img" class="form-control" id="name" placeholder="Enter name image">
				</div>
				<button type="submit" class="btn btn-success btn-lg">Save</button>
		</form>
	</div>
</div>
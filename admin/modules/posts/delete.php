<?php
//підключення до db.php
require($_SERVER['DOCUMENT_ROOT'] . '/app/include/db.php');
//якщо пост-запит існує
if(!empty($_GET)) {
// присвоюємо змінній і видаляємо із базу
	$sql = 'DELETE FROM hotel_posts WHERE id = ' . $_GET['id'];
	//якщо є з'єднання
	if (mysqli_query($conn, $sql)) {
		//виводимо Deleted + перехід на початкову сторінку
		header("Location: /admin/posts.php");
	} else {
		//в іншому випадку виводимо помилку
		echo "Error: " .$sql ."<br>" . mysqli_error($conn);
	}
	//закриваємо зєднання
	mysqli_close($conn);
}
?>
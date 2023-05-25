
<?php
require "app/include/db.php";

$user_id = $_POST['user_id'];
$text = $_POST['coment'];
$created = date('Y-m-d H:i:s');


if (!empty($_POST)) {
    $sql = "INSERT INTO coments (coment, user_id, created) VALUES ('" . $text . "', '" . $user_id . "', '" . $created . "')";

    if (mysqli_query($conn, $sql)) {
        $html = "<li>";
        $html .= $text;
        $html .= "<p class='date'>" . $created . "</p>"; // Вставляємо дату
        $html .= "</li>";
        echo $html;

    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }

}
?>

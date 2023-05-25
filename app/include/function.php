<?php
function get_categories(){
    global $conn;

    $sql = "SELECT * FROM hotel_posts";

    $result = $conn->query($sql);
    $hotelsInfo = mysqli_fetch_all($result, 1);

    return $hotelsInfo;
  }  

  function getHotelsInfo() {
    global $conn;
    $sql = "SELECT * FROM hotel_posts";
    $result = mysqli_query($conn, $sql);

    $hotelsInfo = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $hotelsInfo[] = array(
                "id" => $row["id"],
                "name" => $row["name"],
                "description" => $row["description"],
                "img" => $row["img"],
                "rooms" => $row["rooms"],
                "locations" => $row["locations"],
                "min_description" => $row["min_description"],
                "price" => $row["price"]
            );
        }
    }

    mysqli_close($conn);

    return $hotelsInfo;
}


?>
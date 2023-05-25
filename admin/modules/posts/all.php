
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title"> <h3> HOTELS LIST </h3>  <a href="?page=add" class="btn btn-info float-end"><i class="mdi mdi-comment-plus-outline menu-icon"></i></a></p>

                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                            <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Rooms</th>
                                            <th>Locations</th>
                                            <th>Price</th>
                                            <th >Min.description</th>
                                            <th >Description</th>
                                            <th>Image</th>
                                            <th>Option</th>
                                        </tr>
                            </thead>
                                <tbody>
                                    <?php
                                    // вибираємо із БД і присвоюємо змінній (крім користувача адмін)
                                        $sql = "SELECT * FROM hotel_posts ";
                                        $result = mysqli_query($conn, $sql);
                                        //перебираємо масив
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                        <tr>
                                            <!--виводимо в таблицю із потрібним ідентифікатором -->
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['rooms']; ?></td>
                                            <td><?php echo $row['locations']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td > 
                                            <?php 
                                                $text = $row['min_description']; 
                                                $newtext = wordwrap($text, 30, "<br>");
                                                echo "$newtext";
                                            ?>
                                            </td>
                                            <td > 
                                                <?php 
                                                $text = $row['description']; 
                                                $newtext = wordwrap($text, 50, "<br>");
                                                echo "$newtext";
                                                ?>
                                            </td>
                                            <td><?php echo $row['img']; ?></td>
                                            <td>
                                                <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i>Edit</a>
                                                <a href="/admin/modules/posts/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>

                                            </td>
                                        </tr>

                                            <?php

                                         }
                                    ?>
                                    

                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php
   /* <style type="text/css">
    .desc
     {   
        width:40%;
       
    }
    </style> */
    ?>
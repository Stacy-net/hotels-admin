
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title"> <h3>COMENTS LIST </h3> <a href="?page=add" class="btn btn-info float-end"><i class="mdi mdi-comment-plus-outline menu-icon"></i></a></p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                            <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Coment</th>
                                            <th>User_id</th>
                                            <th>Created</th>
                                            <th>Option</th>
                                        </tr>
                            </thead>
                                <tbody>
                                    <?php
                                    // вибираємо із БД і присвоюємо змінній (крім користувача адмін)
                                        $sql = "SELECT * FROM coments ";
                                        $result = mysqli_query($conn, $sql);
                                        //перебираємо масив
                                        while ($row = $result->fetch_assoc()) {
                                           
                                            ?>
                                        <tr>
                                            <!--виводимо в таблицю із потрібним ідентифікатором -->
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['coment']; ?></td>
                                            <td><?php echo $row['user_id']; ?></td>
                                            <td><?php echo $row['created']; ?></td>
                                            <td>
                                                <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i>Edit</a>
                                                <a href="/admin/modules/coments/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>

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
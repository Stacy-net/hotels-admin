
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title"> <h3>USERS LIST </h3> <a href="?page=add" class="btn btn-info float-end"><i class="mdi mdi-comment-plus-outline menu-icon"></i></a></p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                            <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tip</th>
                                            <th>Option</th>
                                        </tr>
                            </thead>
                                <tbody>
                                    <?php
                                    // вибираємо із БД і присвоюємо змінній (крім користувача адмін)
                                        $sql = "SELECT * FROM users ";
                                        $result = mysqli_query($conn, $sql);
                                        //перебираємо масив
                                        while ($row = $result->fetch_assoc()) {
                                            if ($row['tip'] !="admin") {
                                            ?>
                                        <tr>
                                            <!--виводимо в таблицю із потрібним ідентифікатором -->
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['tip']; ?></td>
                                            <td>
                                                <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i>Edit</a>
                                                <a href="/admin/modules/users/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>

                                            </td>
                                        </tr>

                                            <?php

                                        } }
                                    ?>
                                    

                                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
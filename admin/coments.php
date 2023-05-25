
<?php 
//підключаємо до хедера
require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/sidebar.php');

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Information about your site.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
<?php 
                    //якщо гет запита немає, підключаємо до all.php 
                    if (empty($_GET)) {
                    require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/coments/all.php');
                    } else {
                    //якщо рівний edit, то підключаємо до edit.php і т.п.
                    switch ($_GET['page']) {
                        case 'edit':
                            require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/coments/edit.php');
                            break;
                        case 'add':
                            require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/coments/add.php');

                            break;
                        default:
                            // code...
                            break;
                    }
                     }
                    
                       
                    ?>

        </div>
        <!-- content-wrapper ends -->

        

        <?php
/*підключення до футера*/
  require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/footer.php');
?>
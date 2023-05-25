
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
                    <h2 class="wellcome">Welcome back,</h2>
                    <p class="mb-md-0">Information about your site.</p> 
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->


        <style type="text/css">
          .content-wrapper {
            background: url("/img/banner_bg.png");
            width: 100%;
          }

          .wellcome, .mb-md-0 {
            color: white;
          }
            
          
    </style>

<?php
/*підключення до футера*/
  require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/footer.php');
?>



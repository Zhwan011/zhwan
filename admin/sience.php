<?php include "include/adminheader.php"; ?>

      <!-- Navigation -->
      <?php include "include/nav.php" ?>


          <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome  Admin
                            <small>Subheading</small>
                        </h1>


      <?php
      if (isset($_GET['source'])) {

      $source=$_GET['source'];
      }else {
        $source='';
      }
      switch ($source) {
        case 'add_post':
      include "include/add_sience_post.php";
          break;

        case 'edit_post':
      include "include/edit_sience_post.php";
          break;

        default:
      include "include/view_all_sience_post.php";
          break;
      }
      ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "include/adminfooter.php "; ?>

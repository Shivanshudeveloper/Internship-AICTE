<?php 
  include './includes/auth.php';
  include './includes/header.inc.php'; 
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interns Applied</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Internships</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Internships</h3>
              </div>
              <!-- /.card-header -->
                    <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Internship</th>
                      <th>Total Interns </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include './src/php/dbh.php';
                      $id=$_SESSION['id'];
                      $sql = "SELECT * FROM `post_internship_government` WHERE company_id='$id';";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                          <td>
                          '.$row['id'].'
                             
                          </td>
                          <td>
                          <a href="./interviews.php?uid='.$row['uid'].'">
                          '.$row['title'].'
                          </a>
                          </td>
                          <td>
                            1
                          </td>
                          <td>
                          <a href="./workspace.php" class="btn btn-sm btn-success">
                          More Detail
                      </a>
                          </td>
                        </tr>
                        
                        ';
                      }       
                    ?>              
                  </tbody>
                </table>
              </div>
            </div>
            <!--card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include './includes/footer.inc.php' ?>
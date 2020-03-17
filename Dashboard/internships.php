<?php include './includes/header.inc.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Project</h1>
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

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Start Date</th>
                      <th>Assign Role</th>
                      <th>Workspace</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include './src/php/dbh.php';

                      $sql = "SELECT * FROM internhips WHERE company_id = '12345678';";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                          <td>'.$row['id'].'</td>
                          <td>
                              <a href="./interviews.php?uid='.$row['uid'].'">
                              '.$row['title'].'
                              </a>
                          </td>
                          <td>
                            <div class="">
                            '.$row['start'].'
                            </div>
                          </td>
                          <td>
                              <button class="btn btn-sm btn-info">
                                  Assign Role
                              </button>
                          </td>
                          <td>
                              <a href="./workspace.php" class="btn btn-sm btn-success">
                                  Go to Workspace
                              </a>
                          </td>
                          <td>
                              <button class="btn btn-sm btn-danger">
                                  Delete
                              </button>
                          </td>
                        </tr>
                        
                        ';
                      }
                    
                    ?>


                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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
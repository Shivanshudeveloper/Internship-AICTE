<?php
include './includes/auth.php';
include './includes/header.inc.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mentors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mentors List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <center>
        <a href="./addnewmentor.php" class="btn mt-2 w-50 mb-2 btn-primary">
            Create Mentor
        </a>
    </center>
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mentors</h3>

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
                      <th>Mentor Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Designation</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>
                          <a href="#!">
                              Mentor 1
                          </a>
                      </td>
                      <td>
                        <div class="">
                          8728394774
                        </div>
                      </td>
                      <td><span class="">mentor@mentor.com</span></td>
                      <td>
                      Data Analitics
                      </td>
                      <td>
                          <button class="btn btn-sm btn-success">
                              Active
                          </button>
                      </td>
                      <td>
                          <button class="btn btn-sm btn-danger">
                              Delete
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>
                          <a href="#!">
                              Mentor 2
                          </a>
                      </td>
                      <td>
                        <div class="">
                            8728394774
                        </div>
                      </td>
                      <td><span class="">mentor@mentor.com</span></td>
                      <td>
                      Data Analitics
                      </td>
                      <td>
                          <button class="btn btn-sm btn-success">
                              Active
                          </button>
                      </td>
                      <td>
                          <button class="btn btn-sm btn-danger">
                              Delete
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>
                          <a href="#!">
                              Mentor 1
                          </a>
                      </td>
                      <td>
                        <div class="">
                            8728394774
                        </div>
                      </td>
                      <td><span class="">mentor@mentor.com</span></td>
                      <td>
                      Data Analitics
                      </td>
                      <td>
                          <button class="btn btn-sm btn-success">
                              Active
                          </button>
                      </td>
                      <td>
                          <button class="btn btn-sm btn-danger">
                              Delete
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>
                          <a href="#!">
                              Mentor 1
                          </a>
                      </td>
                      <td>
                        <div class="">
                            8728394774
                        </div>
                      </td>
                      <td>Machine Learning</td>
                      <td>
                            Data Analitics
                      </td>
                      <td>
                          <button class="btn btn-sm btn-success">
                              Active
                          </button>
                      </td>
                      <td>
                          <button class="btn btn-sm btn-danger">
                              Delete
                          </button>
                      </td>
                    </tr>
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
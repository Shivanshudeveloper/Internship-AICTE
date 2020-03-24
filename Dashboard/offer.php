<?php 
include './includes/auth.php';
include './includes/header_students.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Interview Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        
        
        <select name="" id="" class="w-50 mb-2 form-control">
            <option value="">All Internships</option>
            <option value="">Internships 1</option>
            <option value="">Internships 2</option>
            <option value="">Internships 3</option>
            <option value="">Internships 4</option>
        </select>

        
        
        
        
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Internships</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Interns Name</th>
                      <th>Internship Name</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $_SESSION['user']; ?></td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              View Offer Letter
                          </button>
                          <button class="btn btn-sm btn-warning">
                              Rate the Work
                          </button>
                          <button class="btn btn-sm btn-danger">
                              Exit Interview
                          </button>
                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">
                              Generate Experience Letter/ Certificate
                          </button>
                      </td>

                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Interview</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="textarea">Other Interview</label>
                                    <select name="" id="" class="w-50 mb-2 form-control">
                                        <option value="">All Internships</option>
                                        <option value="">Internships 1</option>
                                        <option value="">Internships 2</option>
                                        <option value="">Internships 3</option>
                                        <option value="">Internships 4</option>
                                    </select>
                                </div>
                                <div class="modal-body">
                                    <label for="textarea">Description</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Test User 2</td>
                      <td>Frond End Development</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              View Offer Letter
                          </button>
                          <button class="btn btn-sm btn-warning">
                              Rate the Work
                          </button>
                          <button class="btn btn-sm btn-danger">
                              Exit Interview
                          </button>
                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">
                              Generate Experience Letter/ Certificate
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Test User 3</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              View Offer Letter
                          </button>
                          <button class="btn btn-sm btn-warning">
                              Rate the Work
                          </button>
                          <button class="btn btn-sm btn-danger">
                              Exit Interview
                          </button>
                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">
                              Generate Experience Letter/ Certificate
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Test User 4</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              View Offer Letter
                          </button>
                          <button class="btn btn-sm btn-warning">
                              Rate the Work
                          </button>
                          <button class="btn btn-sm btn-danger">
                              Exit Interview
                          </button>
                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">
                              Generate Experience Letter/ Certificate
                          </button>
                      </td>
                    </tr>
                    </tbody>
              </table>
              </div>
              </div>
            <!-- /.card -->

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include './includes/footer.inc.php' ?>

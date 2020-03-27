<?php 
  include './includes/auth.php';
  include './includes/header.inc.php'; 

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    include './src/php/dbh.php';
    $id = $_SESSION['id'];
    $sql = "select * from student_register s inner join internhip_apply m on m.student_uid = s.student_uid inner join post_internship_government g on g.company_id = m.company_id ";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Machine Learning Internship(Hyd)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $row[''] ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Microsoft
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Project ID: 828327HGD380
                  <br>
                  Project Title: Predicting Hospital Readmission for Patients with Diabetics
                  <br>
                  Duration: 10 Days
                  <br>
                  Internship Description: This is test Description
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <br>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Interns Name</th>
                      <th>Activity Name</th>
                      <th>Reply</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Test User 1</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              Reply
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Test User 2</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              Reply
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Test User 3</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              Reply
                          </button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Test User 4</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              Reply
                          </button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Problems</p>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Deadline 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total Interns on Project:</th>
                        <td>240</td>
                      </tr>
                      <tr>
                        <th>Module Complete</th>
                        <td>45</td>
                      </tr>
                      <tr>
                        <th>Days Spend</th>
                        <td>10 Days Ago</td>
                      </tr>
                      <tr>
                        <th>Budjet</th>
                        <td>Rs. 23,400</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


              <section>
                  <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Data Collection
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">

                            <div class="card">
                                <div class="card-header text-danger">
                                    Backlog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>

                            </div>

                            

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-success">
                                    In Progress
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="card">
                                <div class="card-header text-info">
                                    Review
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-warning">
                                    Complete
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Data Preprocessing
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">

                            <div class="card">
                                <div class="card-header text-danger">
                                    Backlog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>

                            </div>

                            

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-success">
                                    In Progress
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="card">
                                <div class="card-header text-info">
                                    Review
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-warning">
                                    Complete
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Model Building
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">

                            <div class="card">
                                <div class="card-header text-danger">
                                    Backlog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>

                            </div>

                            

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-success">
                                    In Progress
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="card">
                                <div class="card-header text-info">
                                    Review
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-warning">
                                    Complete
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
              </section>

              

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include './includes/footer.inc.php' ?>
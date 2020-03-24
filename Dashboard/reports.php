<?php
include './includes/auth.php'; 
  include './includes/header.inc.php';
 

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reports</h1>
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
        <button class="btn btn-info float-right">
          Save as PDF
        </button>
        <button class="btn mr-2 btn-info float-right">
          Print
        </button>
    
        <select name="" id="" class="w-50 mb-2 form-control">
            <option value="">All Internships</option>
            <option value="">Internships 1</option>
            <option value="">Internships 2</option>
            <option value="">Internships 3</option>
            <option value="">Internships 4</option>
        </select>
        
        
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Total Internships</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>254</h3>

                <p>Total Application</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Accepted</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Rejected</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-12">


          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Internships State</h3>

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
                      <th>State Name</th>
                      <th>Count</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pune</td>
                      <td>383</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Delhi</td>
                      <td>406</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Uttrakhand</td>
                      <td>6048</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Maharashtra</td>
                      <td>848</td>
                    </tr>
                    </tbody>
              </table>
              </div>
              </div>

          



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
              </div>
            <!-- /.card -->

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
                        <th style="width:50%">Total Intens on Project:</th>
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
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include './includes/footer.inc.php' ?>

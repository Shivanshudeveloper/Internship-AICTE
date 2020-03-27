<?php 
include './includes/auth.php';
include './includes/header_students.php' ?>

<section>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Available Internships</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="interview_student.php">Home</a></li>
              <li class="breadcrumb-item active">All Interviews</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Interviews</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <?php
           include './src/php/dbh.php';
            $level= $_GET['id'];
            if($level == 1)
            {
            $sql = "SELECT * FROM internhips;";
            $result = mysqli_query($conn, $sql);
            $resultChk = mysqli_num_rows($result);
            if ($resultChk < 1) {
                echo '
                    <center>
                        <h2>No Result Found</h2>
                    </center>
                ';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="card-body mt-2">
                            <div class="card">
                            <div class="card-body">
                                <span class="float-right">
                                    <p>
                                        <a target="_blank" href="https://www.google.com/maps/@28.535427,77.155449,16z" class="btn ml-2 btn-sm btn-outline-success">
                                            Google Maps
                                        </a>
                                    </p>
                
                                </span>
                                <h1 class="card-title">Company Name: '.$row['company'].'</h1>
                                <br />
                                <h3 class="card-title">Title: '.$row['title'].'</h3>
                                <br>
                                <h5 class="mt-2">
                                <span class="badge badge-info">
                                '.$row['keywords'].'
                                </span>
                                </h5>
                                <h6 class="mt-2">Domain: '.$row['domain'].'</h6>
                                <h6 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stipend'].'</h6>
                                <h6 class="mt-2">Working Hours: '.$row['hours'].'</h6>

                                <h6 class="mt-2">Starting From: '.$row['start'].'</h6>
                                <h6 class="mt-2">End At: ' .$row['end'].'</h6>
                                <h6 class="mt-2">Email: ' .$row['email'].'</h6>
                                <h6 class="mt-2">Address: Microsoft Corporation One Microsoft Way Redmond, WA 98052-6399 USA</h6>
                                <h6 class="mt-2">Phone No: '.$row['phone'].'</h6>
                                <br/> 
                                <h6 class="mt-2">Skill Set: '.$row['attributes'].'</h6>
                
                
                                <p class="card-text mt-2">
                                    '.$row['description'].'
                                </p>
                                <a href="./apply.php?uid='.$row['uid'].'" class="btn btn-primary">Apply</a>
                                <a href="./interview_student.php?uid='.$row['uid'].'" class="btn btn-danger">Reject</a>
                            </div>
                            </div>
                        </div>
                        
                        ';
                }
                
            }
          }else
          {
            $sql = "SELECT * FROM post_internship_government INNER JOIN ubl_register ON post_internship_government.company_id=ubl_register.ubl_company_id;";
            $result = mysqli_query($conn, $sql);
            $resultChk = mysqli_num_rows($result);
            if ($resultChk < 1) {
                echo '
                    <center>
                        <h2>No Result Found</h2>
                    </center>
                ';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="card-body mt-2">
                            <div class="card">
                            <div class="card-body">
                                <span class="float-right">
                                    <p>
                                        <a target="_blank" href="https://www.google.com/maps/@28.535427,77.155449,16z" class="btn ml-2 btn-sm btn-outline-success">
                                            Google Maps
                                        </a>
                                    </p>
                
                                </span>
                                <br />
                                <h3 class="card-title">Title: '.$row['title'].'</h3>
                                <br>
                                <h6 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stiphen'].'</h6>
                                <h6 class="mt-2">Email: ' .$row['email'].'</h6>
                                <h6 class="mt-2">Phone No: '.$row['phone'].'</h6>
                                <br/>               
                                <p class="card-text mt-2">
                                    '.$row['description'].'
                                </p>
                                <a href="./apply.php?uid='.$row['uid'].'&company_id='.$row['company_id'].'&level=2" class="btn btn-primary">Apply</a>
                                <a href="./interview_student.php?uid='.$row['uid'].'&id=2" class="btn btn-danger">Reject</a>
                            </div>
                            </div>
                        </div>
                        
                        ';
                }
                
            }
          }
        
        ?>

        


      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</section>
<script>


</script>


<?php include './includes/footer.inc.php' ?>
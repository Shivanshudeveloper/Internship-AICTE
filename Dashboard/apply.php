<?php
include './includes/auth.php';
include './includes/header_students.php' 
?>

<section>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interview Page Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            if($_GET['level']!=2)
            {
            $uid = $_GET['uid'];
            $student_id=$_SESSION['id'];
            
            $sql = "SELECT * FROM internhip_apply WHERE student_uid = '$student_id' AND  internship_uid = '$uid';";
            $result = mysqli_query($conn, $sql);
            $resultChk = mysqli_num_rows($result);
            $company_id = $_SESSION['id'];
            if ($resultChk < 1) {
                $applyId = "APPLY_".time().uniqid();
                $sql = "INSERT INTO internhip_apply (uid, company_id, student_uid, internship_uid, status) VALUES ('$applyId', '$company_id', '$student_id', '$uid', 'no');";
                mysqli_query($conn, $sql);

                $sql = "SELECT * FROM internhips WHERE uid = '$uid';";
                $result = mysqli_query($conn, $sql);
                $resultChk = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="alert alert-success m-2" role="alert">
                                <b>Successfully applied for internship</b>
                            </div>
                            <div class="card-body mt-2">
                                <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">'.$row['title'].'</h3>
                                    <br>
                                    <h5 class="mt-2">
                                    <span class="badge badge-info">
                                    '.$row['keywords'].'
                                    </span>
                                    </h5>
                                    <h6 class="mt-2">Domain: '.$row['domain'].'</h6>
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
                                </div>
                                </div>
                            </div>
                            
                            ';
                    }
                    
                
            } else {
              $sql = "SELECT * FROM internhips WHERE uid = '$uid';";
              $result = mysqli_query($conn, $sql);
              $resultChk = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="alert alert-info m-2" role="alert">
                        <b>Already Applied for this Internship</b>
                    </div>
                    <div class="card-body mt-2">
                        <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">'.$row['title'].'</h3>
                            <br>
                            <h5 class="mt-2">
                            <span class="badge badge-info">
                            '.$row['keywords'].'
                            </span>
                            </h5>
                            <h6 class="mt-2">Domain: '.$row['domain'].'</h6>
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
                        </div>
                        </div>
                    </div>
                    
                    ';
            }
            }
          }
          else
          {
            $uid = $_GET['uid'];
            $student_id=$_SESSION['id'];
            
            $sql = "SELECT * FROM internhip_apply WHERE student_uid = '$student_id' AND  internship_uid = '$uid';";
            $result = mysqli_query($conn, $sql);
            $resultChk = mysqli_num_rows($result);
            $company_id = $_GET['company_id'];
            if ($resultChk < 1) {
            $uid = $_GET['uid'];
            $student_id=$_SESSION['id'];
                $applyId = "APPLY_".time().uniqid();
                $sql = "INSERT INTO internhip_apply (uid, company_id, student_uid, internship_uid, status) VALUES ('$applyId', '$company_id', '$student_id', '$uid', 'no');";
                mysqli_query($conn, $sql);
                $sql = "SELECT * FROM internhips WHERE company_id = '$company_id';";
                $result = mysqli_query($conn, $sql);
                $resultChk = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <div class="alert alert-success m-2" role="alert">
                                <b>Successfully applied for internship</b>
                            </div>
                            <div class="card-body mt-2">
                                <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">'.$row['title'].'</h3>
                                    <br>
                                    <h5 class="mt-2">
                                    <span class="badge badge-info">
                                    '.$row['keywords'].'
                                    </span>
                                    </h5>
                                    <h6 class="mt-2">Domain: '.$row['domain'].'</h6>
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
                                </div>
                                </div>
                            </div>
                            
                            ';
                    }
                    
                
            }
            else
            {
              $company_id=$_GET['company_id'];
              $student_id=$_SESSION['id'];
              $uid=$_GET['uid'];
              $sql = "SELECT * FROM post_internship_government WHERE company_id = '$company_id' AND uid= '$uid';";
              $result = mysqli_query($conn, $sql);
              $resultChk = mysqli_num_rows($result);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="alert alert-info m-2" role="alert">
                        <b>Already Applied for this Internship</b>
                    </div>
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
                                <h1 class="card-title">Title: '.$row['title'].'</h1>
                                <br>
                                <h6 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stiphen'].'</h6>
                                <h6 class="mt-2">Email: ' .$row['email'].'</h6>
                                <h6 class="mt-2">Phone No: '.$row['phone'].'</h6>
                                <br/>               
                                <p class="card-text mt-2">
                                    '.$row['description'].'
                                </p>
                                <a href="./Index_dashboard.php" class="btn btn-success">Return To DashBoard</a>
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

<?php include './includes/footer.inc.php' ?>
<?php include './includes/header.inc.php' ?>

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
            $uid = $_GET['uid'];

            $sql = "SELECT * FROM internhip_apply WHERE student_uid = 'STUDENT_JDHJKSH786' AND  internship_uid = '$uid';";
            $result = mysqli_query($conn, $sql);
            $resultChk = mysqli_num_rows($result);
            $company_id = "12345678";
            if ($resultChk < 1) {
                $applyId = "APPLY_".time().uniqid();
                $sql = "INSERT INTO internhip_apply (uid, company_id, student_uid, internship_uid, status) VALUES ('$applyId', '$company_id', 'STUDENT_JDHJKSH786', '$uid', 'No');";
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
            
            
            
            

            
        
        ?>

        


      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</section>

<?php include './includes/footer.inc.php' ?>
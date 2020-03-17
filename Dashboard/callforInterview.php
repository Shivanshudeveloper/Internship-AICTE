<?php include './includes/header.inc.php' ?>

<section>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Interview Page</h1>
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
          <h3 class="card-title">Accepted</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <?php 
            include './src/php/dbh.php';
            $stuId = $_GET['stuId'];
            $uid = $_GET['internshipId'];


            $sql = "SELECT * FROM internhips WHERE uid = '$uid';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $start = $row['start'];
                $email = $row['email'];
                $phone = $row['phone'];
                $description = $row['description'];


                $sql = "INSERT INTO interviews_status (internship_uid, student_uid, status) VALUES ('$uid', '$stuId', 'Call for Interview');";
                mysqli_query($conn, $sql);

                $sql = "SELECT * FROM interviews_status WHERE internship_uid = '$uid';";
                $result = mysqli_query($conn, $sql);
                
                $result = mysqli_query($conn, $sql);
                $resultChk = mysqli_num_rows($result);
                if ($resultChk < 1) {
                    echo '
                        <center> No Result Found </center>
                    ';
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $studentId = $row['student_uid'];
                        $sql = "SELECT * FROM student_register WHERE uid = '$studentId';";
                        $result = mysqli_query($conn, $sql);
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo '
                                <div class="card-body mt-2">
                                    <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                        <br>
                                        <h5 class="mt-2">'.$title.'</h5>
                                        <h6 class="mt-2">'.$start.'</h6>
                                        <h6 class="mt-2">Email: '.$email.'</h6>
                                        <h6 class="mt-2">Address: Microsoft Corporation One Microsoft Way Redmond, WA 98052-6399 USA</h6>
                                        <h6 class="mt-2">Phone No: '.$phone.'</h6>
                        
                        
                                        <p class="card-text mt-2">
                                            '.$description.'
                                        </p>

                                        <div class="alert alert-success m-2" role="alert">
                                            Student Successfully Called for Interview
                                        </div>


                                    </div>
                                    </div>
                                </div>
                            ';
                        }
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
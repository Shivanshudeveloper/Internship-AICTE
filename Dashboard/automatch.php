<?php include './includes/header.inc.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Automatched Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="mt-2 mb-2">
                <?php include './includes/msg.inc.php' ?>
            </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            

          <h3 class="card-title">Automatch Students on Basis of Internship</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <div class="card-body">
            <?php 
                include './src/php/dbh.php';
                $uid = $_GET['uid'];
                $sql = "SELECT * FROM internhips WHERE uid = '$uid';";
                $result = mysqli_query($conn, $sql);

                if ($row = mysqli_fetch_assoc($result)) {
                    $skills = $row['attributes'];
                    $skillsArray = explode(',', $skills);


                    $sql = "SELECT * FROM student_register;";
                    $result = mysqli_query($conn, $sql);
                    $resultChk = mysqli_num_rows($result);
                    
                    for ($i=1; $i <= (int)$resultChk; $i++) { 
                        $sql = "SELECT * FROM student_register WHERE id = '$i'";
                        $result = mysqli_query($conn, $sql);
                        if ($row = mysqli_fetch_assoc($result)) {
                            $skills = $row['skills'];
                            $studentSkillsArray = explode(',', $skills);

                            for ($j=0; $j < count($skillsArray); $j++) { 
                                if (in_array($skillsArray[$j], $studentSkillsArray)) {
                                    echo '
                                            <div class="card mt-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                                    <p class="card-text">
                                                    Email: '.$row['email'].'
                                                    <br />
                                                    Technical: '.$row['technical'].'
                                                    
                                                    </p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">Call for Interview</a>
                                                    <a href="#" class="btn btn-sm btn-outline-info">Hold</a>
                                                    <a href="#" class="btn btn-sm btn-outline-success">Message</a>
                                                </div>
                                            </div>
                                    ';
                                }
                            }
                        }

                    }
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['first_name'];
                    }
                }
            ?>


        </div>
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include './includes/footer.inc.php' ?>

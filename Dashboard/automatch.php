<?php 
session_start();
if(!isset($_SESSION['loggedIn']))
{
  header("location:login_corporate.php?task=PlseLogin");
}
else{
  include './includes/header.inc.php';
}
?> 

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
            <div class="">

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
                                      echo '<div class="col">
                                              <div class="card mt-2">
                                                  <div class="card-body">
                                                      <h5 class="card-title">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                                      <p class="card-text">
                                                      Email: '.$row['email'].'
                                                      <br />
                                                      Technical: '.$row['technical'].'
                                                      
                                                      </p>
                                                      <a href="#!" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal'.$row['uid'].'">Call for Interview</a>
                                                      <a href="#!" class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#exampleModalHold'.$row['uid'].'">Hold</a>
                                                     <!--  -->
                                                      <a href="#" class="btn btn-sm btn-outline-success">Message</a>
                                                  </div>
                                              </div>
                                            </div>


                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalHold'.$row['uid'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form class="form-group">

                                                    <div class="form-group">
                                                      <label for="exampleInputEmail1">Reason to Hold</label>
                                                      <textarea class="form-control" row="10" col="18"></textarea>
                                                    </div>

                                                    </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="./holdInterview.php?stuId='.$row['uid'].'&internshipId='.$uid.'" class="btn btn-outline-info">Hold</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal'.$row['uid'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">'.$row['first_name'].' '.$row['last_name'].'</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form class="form-group">

                                                    <div class="form-group">
                                                      <label for="exampleInputEmail1">Interview Timings</label>
                                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputEmail1">Description</label>
                                                      <textarea class="form-control" row="10" col="18"></textarea>
                                                    </div>

                                                    </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="./callforInterview.php?stuId='.$row['uid'].'&internshipId='.$uid.'" class="btn btn-primary">Call for Interview</a>
                                                  </div>
                                                </div>
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

        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include './includes/footer.inc.php' ?>

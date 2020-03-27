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

        <div class="float-right mb-2">
            <a href="#!" class="btn btn-primary">
                Interview in Progress
            </a>
            <a href="#!" class="btn btn-danger">
                Rejected
            </a>
            <a href="./offer.php" class="btn btn-info">
                Offer
            </a>
            <a href="#!" class="btn btn-info">
                Redirect
            </a>
        </div>
        <br>
        <br>






        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Internships</h3>

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
                                    <?php 
                      include './src/php/dbh.php';
                      $id=$_SESSION['id'];
                      $sql = "select * from student_register s inner join internhip_apply m on m.student_uid = s.student_uid inner join post_internship_government g on g.company_id = m.company_id";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) 
                      {
  ?>
                        <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['student_first_name'];?></td>
                      <td><?php echo $row['title']; ?></td>
                      <td>
                      <input type="hidden" name="id1" id="id1" value=<?php echo $row['student_uid']; ?>>
                          <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info" onclick="sendoffer()">
                              Release Offer Letter
                          </button>
                          <button class="btn btn-sm btn-danger">
                              Reject the Candidate
                          </button>
                          <button class="btn btn-sm btn-info">
                              Hold the Candidate
                          </button>
                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">
                              Refer for other Internships
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
                        
                    <?php
                      }
                    
                    ?>


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
<script>
function sendoffer() {
        student_id = $("#id1").val();
         $.post("./src/php/main.php", {
            student_id: student_id,
            offerrelease: true
        }).then(() => {
            console.log("Inserted!")
        })
    }
</script>
<?php include './includes/footer.inc.php'; ?>
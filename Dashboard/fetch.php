<?php
//fetch.php
include './src/php/dbh.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query ="SELECT * FROM tblipinternshala 
 WHERE city REGEXP '".$search."' 
 OR country REGEXP '".$search."' 
 OR category REGEXP '".$search."' 
 OR experience REGEXP '".$search."' 
 OR duration REGEXP '".$search."' 
 OR requirements REGEXP '".$search."' 
 OR salary REGEXP '".$search."' 
 OR title REGEXP '".$search."' 
 ";

}
else
{
 $query = "SELECT * FROM tblipinternshala ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
while( $records = mysqli_fetch_assoc($result) ) {
?>
  <div class="card mt-2">
      <div class="card-body">

          <h5 class="mb-2 text-success float-right"><?php echo $records['salary'];?>.</h5>
          <a class="card-title h2"><?php echo $records["title"];?></a>
          <p class="mt-2 mb-2 card-text">
            <?php echo $records['content'];?>
          </p>
          <br>
          <h4 class="mt-2 mb-2"><span class="font-weight-bold">Requirements:</span> <span class="text-info"><?php echo $records['requirements'];?></span></h4>
          <br>
          <h5 class="mb-2"><b>City:</b> <?php echo $records['city'];?></h5>
          <h5 class="mb-2 text-primary"><b>Category:</b> <?php echo $records['category'];?></h5>
          <h5 class="mb-2"><b>Duration:</b><?php echo $records['duration'];?>.</h5>
          <h5 class="mb-2"><b>Start Date:</b><?php echo $records['date'];?>.</h5>
          <h5 class="mb-2"><b>Working Hours:</b><?php echo $records['working_hours'];?>.</h5>
          
          <br>
          <center>
            <a href=../Dashboard/login.php class="btn w-50 btn-primary">Apply</a>
          </center>
      </div>
  </div>
<?php
}
}
else
{
  $query = "SELECT * FROM tblipinternshala;";
  $result2 = mysqli_query($conn, $query);
  while( $records2 = mysqli_fetch_assoc($result2) ) {
    ?>
    <div class="card mt-2">
      <div class="card-body">
          <h5 class="mb-2 text-success float-right"><?php echo $records2['salary'];?>.</h5>
          <a class="card-title h2"><?php echo $records2["title"];?></a>
          <p class="mt-2 mb-2 card-text">
            <?php echo $records2['content'];?>
          </p>
          <br>
          <h4 class="mt-2 mb-2"><span class="font-weight-bold">Requirements:</span> <span class="text-info"><?php echo $records2['requirements'];?></span></h4>
          <br>
          <h5 class="mb-2"><b>City:</b> <?php echo $records2['city'];?></h5>
          <h5 class="mb-2 text-primary"><b>Category:</b> <?php echo $records['category'];?></h5>
          <h5 class="mb-2"><b>Duration:</b><?php echo $records2['duration'];?>.</h5>
          <h5 class="mb-2"><b>Start Date:</b><?php echo $records2['date'];?>.</h5>
          <h5 class="mb-2"><b>Working Hours:</b><?php echo $records2['working_hours'];?>.</h5>

          <br>
          <center>
            <a href="../Dashboard/login.php" class="btn w-50 btn-primary">Apply</a>
          </center>
      </div>
  </div>
  <?php
}
}
?>

<?php 
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query ="SELECT * FROM tblipinternshala3 
 WHERE city REGEXP '".$search."' 
 OR country REGEXP '".$search."' 
 OR category REGEXP '".$search."' 
 OR experience REGEXP '".$search."' 
 OR duration REGEXP '".$search."' 
 OR requirements REGEXP '".$search."' 
 OR salary REGEXP '".$search."'
 OR title REGEXP '".$search."'  
 "; 
$query2 = "SELECT * FROM internhips ORDER BY id";
$result2 = mysqli_query($conn, $query2);
while( $records2 = mysqli_fetch_assoc($result2)) {

?>
<div class="card mt-2">
      <div class="card-body">
          <h5 class="mb-2 text-success float-right"><?php echo $records2['stipend'];?>.</h5>
          <a class="card-title h2"><?php echo $records2["title"];?></a>
          <p class="mt-2 mb-2 card-text">
            <?php echo $records2['description'];?>
          </p>
          <br>
          <h4 class="mt-2 mb-2"><span class="font-weight-bold">Requirements:</span> <span class="text-info"><?php echo $records2['whoCanApply'];?></span></h4>
          <br>
          <h5 class="mb-2">Domain:<?php echo $records2['domain'];?></h5>
          <h5 class="mb-2"><b>City:</b> <?php echo $records2['locations'];?></h5>
          <h5 class="mb-2"><b>Start Date:</b><?php echo $records2['start'];?>.</h5>
          <h5 class="mb-2"><b>End Date:</b><?php echo $records2['end'];?>.</h5>
          <h5 class="mb-2"><b>Working Hours:</b><?php echo $records2['hours'];?>.</h5>


          <br>
          <center>
            <a href="../Dashboard/login.php" class="btn w-50 btn-primary">Apply</a>
          </center>
      </div>
  </div>
<?php
}
?>
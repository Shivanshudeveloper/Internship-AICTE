<?php 
include './src/php/dbh.php';
include './includes/header1.inc.php';
$sql = "SELECT * FROM post_internship_government INNER JOIN ubl_register ON post_internship_government.company_id=ubl_register.company_id;";
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
            <div class="card-body mt-3">
                <div class="card">
                <div class="card-body">
                    <span class="float-right">
                        <p>
                            <a target="_blank" href="https://www.google.com/maps/@28.535427,77.155449,16z" class="btn ml-2 btn-sm btn-outline-success">
                                Google Maps
                            </a>
                        </p>
    
                    </span>
                    <h1 class="card-title">Company Name: '.$row['organisaton'].'</h1>
                    <br />
                    <h3 class="card-title">Title: '.$row['title'].'</h3>
                    <br>
                    <h6 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stiphen'].'</h6>
                    <h6 class="mt-2">Email: ' .$row['email'].'</h6>
                    <h6 class="mt-2">Phone No: '.$row['phone'].'</h6>
                    <h6 class="mt-2 font-weight-bold text-success">Job Type: Rs. '.$row['job_type'].'</h6>
                    <h6 class="mt-2 font-weight-bold text-success">Internship Type: ' .$row['internship_type'].'</h6>
                    <h6 class="mt-2 font-weight-bold text-success">Location: '.$row['locations'].'</h6>
                    <h6 class="mt-2 font-weight-bold text-success">Qualification Needed: '.$row['qualification'].'</h6>
                    <h6 class="mt-2 font-weight-bold text-success">Specialisation: '.$row['specialisation'].'</h6>

                    <br/>
                    <b>Description :</b>                              
                    <p class="card-text mt-2">
                        '.$row['description'].'
                    </p>
                    <b>Eligibility Criteria :</b>
                    <p class="card-text mt-2">
                       Eligibility Criteria: '.$row['eligibility'].'
                    </p>
                    <b>Logistics:</b>
                    <p class="card-text mt-2">
                        Terms and Conditons: '.$row['terms_of_enagement'].'
                    </p>
                    <b>Logistics : </b>
                    <p class="card-text mt-2">
                        '.$row['logistics'].'
                    </p>
                    <b>Guidelines :</b>
                    <p class="card-text mt-2">
                        '.$row['guidelines'].'
                    </p>
                    <b> Reservation Given To :</b>
                    <p class="card-text mt-2">
                        '.$row['reservation'].'
                    </p>
                    <b>Fees :</b>
                    <p class="card-text mt-2">
                        '.$row['fees'].'
                    </p>

                    <b>Important Dates :</b><p class="card-text mt-2">
                     Apply By :29/03/2020
                    </p>
                    <center>
                    <a href="./apply.php?uid='.$row['uid'].'" class="btn btn-success w-50">Apply</a>
                </div>
                </div>
            </div>
            
            ';
    }
    
}
?>
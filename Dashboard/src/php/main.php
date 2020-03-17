<?php

include './dbh.php';

if (isset($_POST['internship_post'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $locations = mysqli_real_escape_string($conn, $_POST['locations']);
    $numberInternRequiried = mysqli_real_escape_string($conn, $_POST['numberInternRequiried']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $stipend = mysqli_real_escape_string($conn, $_POST['stipend']);
    $start = mysqli_real_escape_string($conn, $_POST['startdate']);
    $end = mysqli_real_escape_string($conn, $_POST['end']);
    $contract = mysqli_real_escape_string($conn, $_POST['contract']);
    $whoCanApply = mysqli_real_escape_string($conn, $_POST['whoCanApply']);
    $domain = mysqli_real_escape_string($conn, $_POST['domain']);
    $eligibility = mysqli_real_escape_string($conn, $_POST['eligibility']);
    $perks = mysqli_real_escape_string($conn, $_POST['perks']);
    $certificaion = mysqli_real_escape_string($conn, $_POST['certificaion']);
    $hours = mysqli_real_escape_string($conn, $_POST['hours']);


    $languages = mysqli_real_escape_string($conn, $_POST['languages']);
    $interview = mysqli_real_escape_string($conn, $_POST['interview']);

    $internshipId = "INTERNSHIP_".time().uniqid();


    $companyId = "12345678";

    $attributes = '';


    if (!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $selected){
            $attributes = $attributes.$selected.',';
        }
    }
    $attributes = rtrim($attributes, ",");


    $sql = "INSERT INTO internhips (uid, company_id, type, title, description, locations, numberInternRequiried, keywords, email, phone, country, company, stipend, start, end, contract, whoCanApply, domain, eligibility, perks, certificaion, hours, languages, interview, attributes) VALUES ('$internshipId' , '$companyId','$type','$title', '$description', '$locations', '$numberInternRequiried', '$keywords', '$email', '$phone', '$country', '$company', '$stipend', '$start', '$end', '$contract', '$whoCanApply', '$domain', '$eligibility', '$perks', '$certificaion', '$hours', '$languages', '$interview', '$attributes');";
    mysqli_query($conn, $sql);
    header('Location: ../../automatch.php?uid='.$internshipId);
}

if (isset($_POST['industryProblem_btn'])) {
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $research = mysqli_real_escape_string($conn, $_POST['research']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $solveby = mysqli_real_escape_string($conn, $_POST['solveby']);
    $studentResearcher = mysqli_real_escape_string($conn, $_POST['studentResearcher']);
    $studentStream = mysqli_real_escape_string($conn, $_POST['studentStream']);
    $studentExpertise = mysqli_real_escape_string($conn, $_POST['studentExpertise']);
    $workResearch = mysqli_real_escape_string($conn, $_POST['workResearch']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $stipend = mysqli_real_escape_string($conn, $_POST['stipend']);
    $certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    

    
    $company_uid = "12345678";

    $sql = "INSERT INTO problem_statements (uid , company_uid,problem, description, location, research, category, solveby, studentResearcher, studentStream, studentExpertise, workResearch, duration, stipend, certificate, level) VALUES ('$uid' , '$company_uid','$problem', '$description', '$location', '$research', '$category', '$solveby', '$studentResearcher', '$studentStream', '$studentExpertise', '$workResearch', '$duration', '$stipend', '$certificate', '$level');";
    mysqli_query($conn, $sql);
    header('Location: ../../solutions.php');
}

if (isset($_POST['messageSend'])) {
    $uid=mysqli_real_escape_string($conn,$_POST['userId']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $company_id = mysqli_real_escape_string($conn, $_POST['company_id']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $msg_from=mysqli_real_escape_string($conn,$_POST['']);
    $msg_from_name="";
    $sql = "INSERT INTO `message`(`id`,`company_id`, `uid`, `msg_from`, `msg_from_name`, `msg`, `msg_date`) VALUES ('$company_id', '$uid', '$user','$msg_from','$msg_from_name', '$message', '$date');";
    $res=mysqli_query($conn,$sql);
}

if(isset($_POST['loadData']))
{
$sql1="SELECT * FROM message";
$res1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($res1))
{
echo '
<div class="incoming_msg">

<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
</div>
'.$row['uid'].'
<div class="received_msg">
  <div class="received_withd_msg">
    <p>'.$row['msg'].'</p>
    <span class="time_date"> 11:01 AM    |    Today</span></div>
</div>
</div>
';
}
}

if(isset($_POST['loadData_company']))
{
$sql1="SELECT `msg` FROM message";
$res1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($res1))
{
echo '
<div class="incoming_msg">
<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
<div class="received_msg">
  <div class="received_withd_msg">
    <p>'.$row['msg'].'</p>
    <span class="time_date"> 11:01 AM    |    Today</span></div>
</div>
</div>
';
}
}

?>

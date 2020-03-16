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
    $start = mysqli_real_escape_string($conn, $_POST['start']);
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

    $attributes = '';


    if (!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $selected){
            $attributes = $attributes.$selected.',';
        }
    }
    $attributes = rtrim($attributes, ",");


    $sql = "INSERT INTO internhips (uid, type, title, description, locations, numberInternRequiried, keywords, email, phone, country, company, stipend, start, end, contract, whoCanApply, domain, eligibility, perks, certificaion, hours, languages, interview, attributes) VALUES ('$internshipId' ,'$type','$title', '$description', '$locations', '$numberInternRequiried', '$keywords', '$email', '$phone', '$country', '$company', '$stipend', '$start', '$end', '$contract', '$whoCanApply', '$domain', '$eligibility', '$perks', '$certificaion', '$hours', '$languages', '$interview', '$attributes');";
    mysqli_query($conn, $sql);
    header('Location: ../../automatch.php?uid='.$internshipId);


}

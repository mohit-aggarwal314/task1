<?php
//get data from form  
$fname = $_POST['full-name'];
$email = $_POST['email'];
$eid = $_POST['employee-id'];
$department = $_POST['department'];
$supervisor = $_POST['supervisor-name'];
$certification_type = $_POST['certification-type'];
$certification_provider = $_POST['certification-provider'];
$certification_cost = $_POST['certification-cost'];
$reason_for_request = $_POST['reason-for-request'];
$estimated_completion_date = $_POST['estimated-completion-date'];
$to = "aggarwalmohit011@gmail.com";
$subject = "Mail From website";
$txt ="Full Name:  ". $fname . "\r\n Employee ID:  " . $eid . "\r\n Department:  " . $department . "\r\n  Supervisor Name:  " . $supervisor . "\r\n Certification Type: " . $certification_type . "\r\n Certification Provider: " . $certification_provider . "\r\n Certification Cost: " . $certification_cost . "\r\n Reason for Request:" . $reason_for_request . "\r\n Estimated Completion Date:" . $estimated_completion_date;
$headers = "From: noreply@digitalestate.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.php");
?>
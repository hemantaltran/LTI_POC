<?php
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');
$conn = mysqli_connect('localhost','root','','wordpress');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "con failed";
}else{
    echo "conn success";
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address= $_POST['email_address'];
$contact_number = $_POST['contact_number'];
$your_company_name = $_POST['your_company_name'];
$country = $_POST['country'];
$your_industry = $_POST['your_industry'];
$service_technology_interested_in = $_POST['service_technology_interested_in'];
$reffered_by = $_POST['reffered_by'];
$let_us_know_how_we_can_help_you_today = $_POST['let_us_know_how_we_can_help_you_today'];
$is_agreed = $_POST['is_agreed'];

$sql_query = "insert into contact_form(first_name,last_name,email_address,contact_number,your_company_name,country,your_industry,service_technology_interested_in,reffered_by,let_us_know_how_we_can_help_you_today) values('$first_name','$last_name','$email_address','$contact_number','$your_company_name','$country','$your_industry','$service_technology_interested_in','$reffered_by','$let_us_know_how_we_can_help_you_today')";
$query = mysqli_query($conn,$sql_query) or die(mysqli_error());

if($query){
    echo "successfull";
}
else{
    echo "failed";
}
?>
<?php
/*
//get data from form

$name = $_POST['Full-name'];
$email= $_POST['email-adress'];
//$message= $_POST['message'];
//$to = "yasserkadar62@gmail.com";
$to = "msookfuraitjwreyxh@nvhrw.com";
$subject = "Mail From Portfolio website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ; //. "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");

*/

    //if(isset($_POST['submit'])){
        $name=$_POST['Full-name'];
        $email=$_POST['email-adress'];
        //$phone=$_POST['phone'];
        //$msg=$_POST['msg'];

        $to="yasserkadar62@gmail.com"; // Receiver Email ID, Replace with your email ID
        $subject='Form Submission';
        $message="Name :".$name."\n". //"Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
        $headers="From: ".$email;

         if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong!";
        }
    //}
?>
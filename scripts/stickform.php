<?php
/*handle the information of sticky form on contact.php*/

$nameErr = $emailErr = $subjectErr = $messageErr = $submitInfo = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
   if (empty($_POST["name"])) {
     $nameErr = "Tell me your name!";
   } else {
     $name = input_process($_POST["name"]);
   }

   if (empty($_POST["email"])) {
     $emailErr = "Give email so I can contact you!";
   } else {
     $email = input_process($_POST["email"]);
   }
    
   if (empty($_POST["subject"])) {
     $subjectErr = "Please write a subject!";
   } else {
     $subject = input_process($_POST["subject"]);
   }

   if (empty($_POST["message"])) {
     $messageErr = "Say to me anything you want!";
   } else {
     $message = input_process($_POST["message"]);
   }

   if ((!empty($_POST["submit"])) && (!empty($_POST["name"])) && (!empty($_POST["email"])) 
       && (!empty($_POST["subject"])) && (!empty($_POST["message"]))) {
     $submitInfo = "Message sent sucessfully!";
   } else {
     $submitInfo = "Try again!";
   }
}

/*process input text, trim string, delete slash, recognize htmlspecialchars*/
function input_process($data) {
   $d = trim($data);
   $d = stripslashes($data);
   $d = htmlspecialchars($data);
   return $d;
}
?>
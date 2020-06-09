<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailfrom = $_POST['email'];
        $message = $_POST['message'];

        $mailto = 'activitreeorg@gmail.com';
        $headers = "From: " .$mailfrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        mail($mailto, $subject, $txt, $headers);
        header("Location: index.php?mailsent");
    }
?>
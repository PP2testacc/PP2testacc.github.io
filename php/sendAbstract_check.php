<?php

    session_start();
    include("dblogin.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){  

        if (empty($_POST["senderName"])) {
            header("Location: ../html/sendAbstract.php");
            die(); 
        }
        else{
            $senderName = mysqli_real_escape_string($conn, $_POST['senderName']);
        }
        
        if (empty($_POST["senderOrganization"])) {
            header("Location: ../html/sendAbstract.php");
            die(); 
        }
        else{
            $senderOrganization = mysqli_real_escape_string($conn, $_POST['senderOrganization']);
        }
        
        if (empty($_POST["senderEmail"])) {
            header("Location: ../html/sendAbstract.php");
            die(); 
        }
        else{
            $senderEmail = mysqli_real_escape_string($conn, $_POST['senderEmail']);
        }
        
        if (empty($_POST["senderPaperTitle"])) {
            header("Location: ../html/sendAbstract.php");
            die(); 
        }
        else{  
            $senderPaperTitle = mysqli_real_escape_string($conn, $_POST['senderPaperTitle']);
        }
        
        if (empty($_POST["senderAbstract"])) {
            header("Location: ../html/sendAbstract.php");
            die(); 
        }
        else{
            $senderAbstract = mysqli_real_escape_string($conn, $_POST['senderAbstract']);
        }
        
        
        

        $sql = "INSERT INTO abstracts (SenderName,SenderOrganization,SenderEmail,SenderPaperTitle,SenderAbstract)
        VALUES ('$senderName','$senderOrganization','$senderEmail','$senderPaperTitle','$senderAbstract')";
   
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    
    } else {
        echo 'form not submited!';
    }

?>

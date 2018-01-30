<?php

    session_start();
    include("dblogin.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){  

        if (empty($_POST["name"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $name = mysqli_real_escape_string($conn, $_POST['name']);
        }
        
        if (empty($_POST["title"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $title = mysqli_real_escape_string($conn, $_POST['title']);
        }
        
        if (empty($_POST["affiliation"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $affiliation = mysqli_real_escape_string($conn, $_POST['affiliation']);
        }
        
        if (empty($_POST["address"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{  
            $address = mysqli_real_escape_string($conn, $_POST['address']);
        }
        
        if (empty($_POST["postCode"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $postCode = mysqli_real_escape_string($conn, $_POST['postCode']);
        }
        
        if (empty($_POST["tel"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        }
        
        if (empty($_POST["fax"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $fax = mysqli_real_escape_string($conn, $_POST['fax']);
        }
        
        if (empty($_POST["email"])) {
            header("Location: ../html/registration.php");
            die(); 
        }
        else{
            $email = mysqli_real_escape_string($conn, $_POST['email']);
        }
        
        
        $attendDinner = mysqli_real_escape_string($conn, $_POST['attendDinner']);
        
       
        $presentPaper = mysqli_real_escape_string($conn, $_POST['presentPaper']);

        
        if (empty($_POST["paperTitle"])) {
            $paperTitle = "0";
        }
        else{
            $paperTitle = mysqli_real_escape_string($conn, $_POST['paperTitle']);
        }
        
        if (empty($_POST["paperAuthors"])) {
             $paperAuthors = "0";
        }
        else{
             $paperAuthors = mysqli_real_escape_string($conn, $_POST['paperAuthors']);
        }
        
        if (empty($_POST["paperAreas"])) {
             $paperAreas = "0";
        }
        else{
            $paperAreas = mysqli_real_escape_string($conn, $_POST['paperAreas']);
        }
        
         if (empty($_POST["paperPresenters"])) {
             $paperPresenters = "0";
        }
        else{
            $paperPresenters = mysqli_real_escape_string($conn, $_POST['paperPresenters']);
        }
        
       
        
        
        

        $sql = "INSERT INTO registrations (Name,Title,Affiliation,Address,PostCode,Tel,Fax,Email,AttendDinner,PresentPaper,PaperTitle,PaperAuthors,PaperAreas,PaperPresenters)
        VALUES ('$name','$title','$affiliation','$address','$postCode','$tel','$fax','$email','$attendDinner','$presentPaper','$paperTitle','$paperAuthors','$paperAreas','$paperPresenters')";
   
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

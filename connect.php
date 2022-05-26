<?php
ini_set('display_errors', 'On'); ini_set('html_errors', 0); error_reporting(-1);
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        
        $conn = mysqli_connect('localhost', 'root', '', 'newUse') or die("Connection Failed:" .mysqli_connect_error());
        
        if(isset($_POST["gs"]) && isset($_POST["note"]) && isset($_POST["apt"]) && isset($_POST["email"])) {
            
            $gs = $_POST["gs"];
            $note = $_POST["note"];
            $apt = $_POST["apt"];
            $email = $_POST["email"];
            
            $sql = " INSERT INTO users1 (gs, note, apt, email) VALUES ( '$gs', '$note', '$apt', '$email')";
            
            $query = mysqli_query($conn,$sql);
                if ($query) {
                    echo 'Entry Successfull';
                } else{
                    echo "Error Occured";
                }
        }
    }
?>                                                                 
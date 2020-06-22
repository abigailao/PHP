<!--PHP met MySQL Opdracht: Laat alle cursisten zien uit de school-database-->

    <!--PHP DATABASE CONNECT----------------------------------------------------------------------------------------------->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "school");
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }
    $email=$_POST['email'];
    $wachtwoord=$_POST['wachtwoord'];

//$sql is the query. You've select email and wachtwoord, which are both necessary for the login form.
    $sql = "SELECT * from cursist where email='".$email."'AND wachtwoord='".$wachtwoord."' limit 1";
    $result = $conn->query($sql);

    if ($result-> num_rows == 1){
        echo "Welkom";
        exit();
    }
    else {
        echo "Sorry, geen toegang!";
        exit();
    }

    $conn-> close();
    ?>

<!--This site was used as a reference: https://www.onlineittuts.com/how-to-create-login-form-in-php.html &
this video: https://www.youtube.com/watch?v=aIsu9SPcGbU-->
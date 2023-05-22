<?php
    // start a session
    session_start();

    // connect to database (PDO - PHP database Object)
    $database = new PDO(
        "mysql:host=devkinsta_db;dbname=Contact_Form", 
        'root', // username
        'WlekfIFX5rxSbNj2' // password 
    );

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // $sql = "SELECT * FROM tables where email =:email";
    // $query = $database->prepare( $sql );
    // // execute
    // $query->execute([
    //     'email'=>$email
    // ]);
    // $user = $query->fetch();

    if ( empty( $name ) || empty($email) || empty($message) ) {
        $error = 'All fields are required';
    } else if ( strlen( $message ) < 10 ) {
        $error = "Your message must be at least 10 letters or more";
    // }else if ($user){
    //     $error = "This email is own by someone, pls try again with another email.";
    } else {
        // recipe
        $sql = "INSERT INTO tables ( `name`, `email`, `message` )
            VALUES (:name, :email, :message)";
        // prepare
        $query = $database->prepare( $sql );
        // execute
        $query->execute([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        $success = "Submit Successfully ";
    }

    if ( isset( $error ) ) {
        // store the error message in session
        $_SESSION['error'] = $error;
        // redirect the user back to login.php
        header("Location: /");
        exit;
    }
    
    if ( isset( $success ) ) {
        // store the error message in session
        $_SESSION['success'] = $success;
        // redirect the user back to login.php
        header("Location: /");
        exit;
    }

    ?>

    
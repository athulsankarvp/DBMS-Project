<?php 

include('connection.php');

if(isset($_POST['change_movie'])){
    $screencode = $_POST['screencode'];
    $title = $_POST['movie_title'];
    $poster = $_POST['movie_poster'];
    
    $sql = "UPDATE changemovie SET  title='$title', poster='$poster' WHERE screencode=$screencode";

    if(mysqli_query($conn, $sql)){
        $del ="DELETE FROM bookings where screencode=$screencode";
        if ($conn->query($del) === TRUE) {
            header('location:index.php');
          } else {
            echo "Error deleting record: " . $conn->error;
          }
        

    } else { 
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
    }
}


?>
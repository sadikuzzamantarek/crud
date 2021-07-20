<?php
    include 'conn.php';

    $id = $_GET['id'];

    $delete = "DELETE FROM registration where id = $id";
    $query = mysqli_query($conn,$delete);
    
    if($query){
        ?>
        <script>
            alert('Delete successfull');
        </script>
        <?php
        header('location:select.php');
    }else{
        ?>
        <script>
            alert('Err..Delete Unsuccessfull :(');
        </script>
        <?php
    }

?>
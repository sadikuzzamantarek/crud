<?php
include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>

<body>
    <section class="bg-dark text-light" id="register">
        <div class="container py-5">
            <div class="row mt-5 py-5">
                <div class="col-lg-4 d-flex flex-column">
                    <h2>Register</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae asperiores laudantium eum maxime
                        debitis, harum fugiat reiciendis numquam illo alias! Labore facilis repellendus sint aliquam
                        officia culpa, quam beatae quia!</p>
                        <a href="select.php" class="btn btn-outline-primary">Check Forms</a>
                </div>
                <div class="col-lg-8">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="">
                        <div class="form-group d-flex flex-row justify-content-between">
                           
                            <input type="text" name="name" id="" class="form-control mr-2" placeholder="Enter your name" required>
                           
                            <input type="text" class="form-control" placeholder="Your qualification" name="degree" required>
                        </div>

                        <div class="form-group d-flex flex-row justify-content-between">
                            
                            <input type="text" name="phone" id="" class="form-control mr-2" placeholder="Phone number" required>
                            
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
 
                        <div class="form-group d-flex flex-row justify-content-between">
                            <input type="text" name="refer" id="" class="form-control mr-2" placeholder="Any Reference" required>
                            <input type="text" class="form-control" placeholder="Prefered Language" name="lang">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="" value="Register" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php
if(isset($_POST['submit'])){
    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $degree =mysqli_real_escape_string($conn, $_POST['degree']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $phone =mysqli_real_escape_string($conn, $_POST['phone']);
    $refer =mysqli_real_escape_string($conn, $_POST['refer']);
    $lang =mysqli_real_escape_string($conn, $_POST['lang']);

    $insert = "INSERT INTO registration(name,email,phone,degree,refer,lang) values('$name','$email', '$phone','$degree','$refer','$lang')";

    $query = mysqli_query($conn,$insert);

    if($query){
        ?>
        <script>
            alert('Registration Successful');
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Registration Failed :(');
        </script>
        <?php
    }
    header("https://google.com");

}

    ?>



    <!-- JS FIlES -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
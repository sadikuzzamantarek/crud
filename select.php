<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registered</title>
</head>

<body>
    <section class="select">
        <div class="container">
            <div class="py-5">
            <table class="table table-dark">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DEGREE</th>
                    <th>MOBILE</th>
                    <th>EMAIL</th>
                    <th>REFER</th>
                    <th>POST</th>
                    <th colspan="2">OPERATION</th>

                </thead>
                <tbody>
                    <?php
include 'conn.php';
$select = 'SELECT * FROM registration ';
$query = mysqli_query($conn, $select);

while(
$result = mysqli_fetch_assoc($query)
){



                    ?>
                    <tr>
                        <td><?php echo $result['id']  ?></td>
                        <td><?php echo $result['name']  ?></td>
                        <td><?php echo $result['degree']  ?></td>
                        <td><?php echo $result['phone']  ?></td>
                        <td><?php echo $result['email']  ?></td>
                        <td><?php echo $result['refer']  ?></td>
                        <td><?php echo $result['lang']  ?></td>
                        <td><a href="update.php?id=<?php echo $result['id']  ?>"><i class="fas fa-edit text-light"></i></a></td>
                        <td><a href="delete.php?id=<?php echo $result['id']  ?>"><i class="fas fa-trash-alt text-light"></i></a></td>

                    </tr>
                    <?php

                    }
                    
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </section>

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
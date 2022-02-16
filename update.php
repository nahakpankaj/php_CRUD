<?php include "php/update.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>

<body>
    <form action="php/update.php" method="POST">
        <h4 class="display-4 text-center">UPDATE FORM</h4><hr><br>
        <?php if(isset($_GET['error'])){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error'];
            ?>
        </div>
        <?php }?>
        <hr><br>
        <div class="container">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                value="<?=$rows['Name']?>"
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                value="<?=$rows['Email']?>">
            </div>
            <input type="text" name="id" value="<?=$rows['id']?>" hidden>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="read.php" class="btn btn-outline-primary">View</a>
        </div>
    </form>

</body>

</html>
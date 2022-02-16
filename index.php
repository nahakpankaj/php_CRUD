<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="php/create.php" method="POST">
        <h4 class="display-4 text-center">CREATE FORM</h4>
        <hr><br>
        <?php if (isset($_GET['error'])) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'];
                ?>
            </div>
        <?php } ?>
        <hr><br>
        <div class="container">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($_GET['name']))
                                                                                            echo ($_GET['name']); ?>" placeholder="Enter Name">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_GET['email']))
                                                                                            echo ($_GET['email']); ?>" placeholder="Enter Email">

            </div>
            
            <button type="submit" class="btn btn-primary" name="create">Create</button>
            <a href="read.php" class="btn btn-info">View</a>
        </div>
    </form>

</body>

</html>
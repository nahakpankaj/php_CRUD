<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div>
            <h4 class="display-4 text-center">RECORD DATA</h4>
            <hr><br>
            <?php if (isset($_GET['success'])) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success'];
                    ?>
                </div>
            <?php } ?>
            <?php if (mysqli_num_rows($RESULT)) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Sl No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($RESULT)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $row['Name'] ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-success">Update</a>
                                    <a href="php/delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="link-right">
                <a href="index.php" class="btn btn-outline-primary">Create</a>
            </div>
        </div>

    </div>
</body>

</html>
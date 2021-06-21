<?php include "db.php";?>
<?php include "functions.php";?>

<?php delete();?>

<?php include "includes/header.php"; ?>
    <div class="container">
    <div class="col-md-6">
    <h2 class="text-center"><strong>Delete</strong></h2>
    <form action="delete.php" method="post">
    <div class="form-group">
    <label for="userName">UserName</label>
    <input type="text" name="user" class="form-control">
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pass" class="form-control">
    </div>
    <div class="form-group">
        <select name="id" id="" class="form-control">
            <?php 
            findAll();
            ?>
            
        </select>
    </div>

    <div class="col-md-6">
    <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
    </div>

    </form>

    </div>
    </div>
<?php include "includes/footer.php"; ?>
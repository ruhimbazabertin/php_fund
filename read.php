<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php";?>

<?php
      //$query ="SELECT * FROM users";

      //$result = mysqli_query($connection, $query);

     // if(!$result){
        //  die('QUERY FAILED');
//}
?>
    <div class="container">
    <h2><strong>Display All Data</strong></h2>
    <div class="col-md-6">
        <?php
        //while($row = mysqli_fetch_assoc($result)){
            ?>
            <pre>
                <?php
           // print_r($row);
           readData();
            ?>
            </pre>
            <?php
        //}
        
        ?>
    </div>
    </div>

<?php include "includes/footer.php";?>
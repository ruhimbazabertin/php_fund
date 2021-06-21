<?php include "db.php";


function create(){
if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //$connection = mysqli_connect('localhost', 'root', '', 'php');

    //if($connection){
    //    echo "Database is connected properly";
    //}else{
    //    die ("Database connection is failed.".mysqli_error());
    //}

    $query ="INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('QUERY FAILED');
    }else{
        echo "The new record created properly";
    }

}
}

function readData(){
    global $connection;
    $query ="SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){

        print_r($row);
    }
}

function findAll(){
    global $connection;
      $query ="SELECT * FROM users";

      $result = mysqli_query($connection, $query);

      if(!$result){
          die('QUERY FAILED');

}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
echo "<option value='$id'>$id</option>";
} 
}

function update(){
    if(isset($_POST['submit'])){
    global $connection;
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $id       = $_POST['id'];
    
        $query = "UPDATE users SET username ='$username', password = '$password' WHERE id = $id ";
        //$query .= "username ='$username'";
        //$query .= "password ='$password'";
        //$query .= "WHERE id = $id";
        $result = mysqli_query($connection, $query);
    
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }else{
            echo "The record updated properly";
        }
    
}
}
function delete(){
    if(isset($_POST['submit'])){
        global $connection;
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $id       = $_POST['id'];
        
            $query = "DELETE FROM users WHERE id = $id ";
            $result = mysqli_query($connection, $query);
        
            if(!$result){
                die("Query Failed".mysqli_error($connection));
            }else{
                echo "The record deleted properly";
            }
}
}
?>
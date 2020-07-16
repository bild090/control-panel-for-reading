
<?php
if(isset($_POST["submit"])){
    $right=$_POST["right"];
    $left=$_POST["left"];
    $forward=$_POST["forward"];
    $backward=$_POST["back"];
    $stop=$_POST["stop"];

    
    $hostname="localhost";
    $userName="root";
    $passward="";
    $DB_name="panel";

   $conn = new mysqli($hostname,$userName,$passward,$DB_name);
   
    if($conn->connect_error){
        die("connection filed ".$conn->connect_error);
    }
    $sql="INSERT INTO direction (rights,lefts,forward,backward,stop) VALUES ('$right','$left','$forward','$backward','$stop')";

    if(mysqli_query($conn,$sql)){
        echo " your data has been saved!!";
    }
    else{
        echo " ops didn't save your data!!";
    }
    $conn->close();
}
else{
    echo " submit not";
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <title></title>

    <script>
        $(document).ready(function(){
            $("#dir").load("readC.php");
        });

    </script>
</head>
<body>

<div id="dir">

<?php
   
   $hostname="localhost";
   $username="root";
   $pass="";
   $dbname="panel";

   $conn= mysqli_connect($hostname,$username,$pass,$dbname);

   $sql ="SELECT * from direction ORDER BY id DESC LIMIT 1";;
   $result=mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) >0){

      $row =mysqli_fetch_assoc($result);
        if($row['rights'] != ""){
            echo $row['rights'];
        }

        if($row['forward'] != ""){
            echo $row['forward'];
        }

        if($row['backward'] != ""){
            echo $row['backward'];
        }

        if($row['stop'] !=""){
            echo $row['stop'];
        }

        if($row['lefts'] != ""){
            echo $row['lefts'];
        }
       
   }
   else{
       echo "no result";
   }
    
   mysqli_close($conn);
?>
</div>
    </body>
    </html>
    
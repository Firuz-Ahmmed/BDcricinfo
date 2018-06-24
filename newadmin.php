<!DOCTYPE html>
<html>

<body>
    <p></p>
    <?php
    {
       
    
    
        $hostname="localhost"; 
         $username="root"; 
         $password=""; 
         $database="cricinfo";
        $con=mysqli_connect($hostname,$username,$password,$database);
        if(!$con)
        {
            die("Connection failled;".mysqli_connect_error());
        }
        $s="insert into admin (username,password,email,mobile,gender,address) values('".$_POST["name"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["gender"]."','".$_POST["address"]."')";
        if(mysqli_query($con, $s))
        {
            echo 'New Admin Created Successfully.';
        }
        else{
            echo 'Error '.$sql .mysqli_connect_error($con);
        }
        mysqli_close($con);
    }
?>
</body>

</html>

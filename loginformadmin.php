<?php
$nameerr=$passerr=$namer=$passr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $error=0;
    if(empty($_POST["username"]))
    {
        $error++;
        $nameerr="Required";
    }
    else
    {
        $namer=$_POST["username"];
        
    }
    
    if(empty($_POST["password"]))
    {
        $error++;
        $passerr="Required";
    }
    else
    {
        $passr=$_POST["password"];
        
    }
    if($error==0)
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
        $s="SELECT username,password FROM admin WHERE username='$namer' and password='$passr'";
        $Comp=mysqli_query($con,$s) or die("unable to connect");
			   
		
		$Rows=mysqli_fetch_array($Comp);
		
		if($Rows['username']==$namer && $Rows['password']==$passr)
		{
				
		        echo "New Admin Successfully Created";
			    header("Location:admin.php");
		        exit();
    }
}
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="header">Login</div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

            <table>
                <tr>
                    <td> User name</td>
                    <td>
                        <input type="text" name="username">
                    </td>
                    <td>
                        <?php echo "$nameerr" ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password">
                    </td>
                    <td>
                        <?php echo "$passerr" ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </body>

    </html>

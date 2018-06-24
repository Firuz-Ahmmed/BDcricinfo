<?php
$playerserr=$Format=$runserr=$wicketerr=$rankerr=$debuerr=$roleerr="";
$playersr=$Format=$runsr=$wicketr=$rankr=$debur=$roler="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $error=0;
    if(empty($_POST["players"]))
    {
        $error++;
        $playerserr="Required";
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
        $s="delete from players_info where player_name='".$_POST['players']."'";
        if(mysqli_query($con, $s))
        {
            echo 'Deleted successfully'<a href="home.php">Click here To Go HOME</a>;
        }
        else
        {
            echo 'Error '.$s .mysqli_connect_error($con);
        }
        mysqli_close($con);
    }
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Insert</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form action="" method="POST">
            <h1 style="color:white">Who's Record You Want To Delete</h1>
            <table>
                <tr>
                    <td>Select Players</td>
                    <td>
                        <select name="players">
                            <option value="tamim" selected> Tamim Iqbal</option>
                            <option value="soumya">Soumya Sarker</option>
                            <option value="rahim">Mushfiqur Rahim</option>
                            <option value="mashrafi">Mashrafi Bin Mortaza</option>
                        </select>
                    </td>
                    <td>
                        <?php echo "$playerserr" ?>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr <tr></tr <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
                </tr>

            </table>
        </form>
    </body>

    </html>

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
    else
    {
        $playersr=$_POST["players"];
        
    }
    
    if(empty($_POST["runs"]))
    {
        $error++;
        $runserr="Required";
    }
    else
    {
        $runsr=$_POST["runs"];
        
    }
    if(empty($_POST["wicket"]))
    {
        $error++;
        $wicketerr="Required";
    }
    else
    {
        $wicketr=$_POST["wicket"];
        
    }
    if(empty($_POST["rank"]))
    {
        $error++;
        $rankerr="Required";
    }
    else
    {
        $rankr=$_POST["rank"];
        
    }
    if(empty($_POST["debu"]))
    {
        $error++;
        $debuerr="Required";
    }
    else
    {
        $debur=$_POST["debu"];
        
    }
    if(empty($_POST["role"]))
    {
        $error++;
        $roleerr="Required";
    }
    else
    {
        $roler=$_POST["role"];
        
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
        $s="update  players_info set odi_runs='".$_POST["runs"]."',odi_wicket='".$_POST["wicket"]."',odi_rank='".$_POST["rank"]."',debut_odi='".$_POST["debu"]."',players_role='".$_POST["role"]."') where player_name='".$_POST['players']."'";
       if(mysqli_query($con, $s))
        {
            echo 'Updated successfully'<a href="home.php">Click here To Go HOME</a>;
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
                <tr>
                    <td>ODI Runs</td>
                    <td>
                        <input type="text" name="runs">
                    </td>
                    <td>
                        <?php echo "$runserr" ?>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>ODI Wicket</td>
                    <td>
                        <input type="text" name="wicket">
                    </td>
                    <td>
                        <?php echo "$wicketerr" ?>
                    </td>
                </tr>
                <tr>
                    <td>ODI Ranking</td>
                    <td>
                        <input type="text" name="rank">
                    </td>
                    <td>
                        <?php echo "$rankerr" ?>
                    </td>
                </tr>
                <tr>
                    <td>ODI Debut Match</td>
                    <td>
                        <input type="text" name="debu">
                    </td>
                    <td>
                        <?php echo "$debuerr" ?>
                    </td>
                </tr>
                <tr>
                    <td>Players Role</td>
                    <td>
                        <input type="text" name="role">
                    </td>
                    <td>
                        <?php echo "$roleerr" ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>

    </html>

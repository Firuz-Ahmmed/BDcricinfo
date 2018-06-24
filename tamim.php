<!DOCTYPE html>
<html>

<body style="background-color:cyan">
    <div class="header">
        <div style="position:absolute;top:10px;left:850px;">
            <a> <img src="Tamim-iqbal.jpg" alt="Tamim-iqbal" width="500px" height="500px" /></a>
        </div>
        <table>
            <tr>
                <th>ODI RUNS</th>


                <th>ODI WICKET</th>

                <th>ODI RANK</th>

                <th>ODI DEBUT MATCH</th>

                <th>PLAYERS ROLE</th>

            </tr>
            <?php
        $hostname="localhost"; 
         $username="root"; 
         $password=""; 
         $database="cricinfo";
        $con=mysqli_connect($hostname,$username,$password,$database);
        if(!$con)
        {
            die("Connection failled;".mysqli_connect_error());
        }
        $s="SELECT * FROM players_info where player_name='tamim'";
        $DETAILS=mysqli_query($con, $s);
        if(mysqli_num_rows($DETAILS)>0)
			  {
				  while($row = mysqli_fetch_assoc($DETAILS)) 
				  {
                  echo "<tr>";
                      echo "<td>";
				  echo $row['odi_runs'];
				   echo "</td>";
				  echo "<td>";
				  echo $row['odi_wicket'];
				   echo "</td>";
				  echo "<td>";
				  echo $row['odi_rank'];
				 echo "</td>";
				  echo "<td>";
				  echo $row['debut_odi'];
				 echo "</td>";
				  echo "<td>";
				  echo $row['players_role'];
				   echo "</td>";
				    echo "</tr>";
                  }
			  }

        ?>
        </table>
</body>

</html>

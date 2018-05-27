<html>  
<head></head>  
  
<body>  
  	
  	<h3>Current Players</h3>
    <table style="margin: 0px auto;"> 
    	<tr>
    		<th>Name</th>
    		<th>Age</th>
    		<th>Salary</th>
    		<th>Job</th>
    	</tr>
        <?php   
  
            foreach ($players as $name => $player)  
            {  
                echo '<tr><td><a href="index.php?player='.$player->name.'">'.$player->name.'</a></td><td>'.$player->age.'</td><td>'.$player->salary.'</td><td>'.$player->job.'</td></tr>';  
            }  
  
        ?>  
    </table>  
  
</body>  
</html> 
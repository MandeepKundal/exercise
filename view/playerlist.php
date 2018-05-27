<html>  
<head>
	<style>
		h3 {
			text-align: center;
		}
		table, td, th {    
		    border: 1px solid #ddd;
		    text-align: center;
		}

		table {
		    border-collapse: collapse;
		    width: 100%;
		    max-width: 800px;
		    text-align: center;
		}

		th, td {
		    padding: 15px;
		}

		th {
			background-color: #f9a743;
    		color: white;
		}

		tr:hover {
			background-color:#f5f5f5;
		}
	</style>
</head>  
  
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
<?php 

include_once("model/Player.php");  
  
class Model {  
    public function getPlayerList()  
    {  
        return array(  
            "Jonas Valenciunas" => new Player("Jonas Valenciunas", "26", "4.66m", "Center"),  
            "Kyle Lowry" => new Player("Kyle Lowry", "32", "28.7m", "Point Guard"),  
            "Demar DeRozan" => new Player("Demar DeRozan", "28", "26.54m", "Shooting Guard"),
            "Jakob Poeltl" => new Player("Jakob Poeltl", "22", "2.704m", "Center")  
        );  
    }  
      
    public function getPlayer($name)  
    {  
        $allPlayers = $this->getPlayerList();  
        return $allPlayers[$name];  
    }

    function getPlayerDataJson() {
        $json = '[{"name":"Jonas Valenciunas","age":26,"job":"Center","salary":"4.66m"},{"name":"Kyle Lowry","age":32,"job":"Point Guard","salary":"28.7m"},{"name":"Demar DeRozan","age":28,"job":"Shooting Guard","salary":"26.54m"},{"name":"Jakob Poeltl","age":22,"job":"Center","salary":"2.704m"}]';
        return $json;
    }

    function getPlayerDataFromFile($filename) {
        $file = file_get_contents($filename);
        return $file;
    }  
      
      
}  

?>
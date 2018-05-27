<?php

include_once("model/Model.php");  
  
class Controller {  
     public $model;   
  
     public function __construct()    
     {    
          $this->model = new Model();  
     }   
      
     public function invoke()  
     {  
          if (!isset($_GET['player']))  
          {  
               // Show a list of all available players  
               $players = $this->model->getPlayerList();  
               include 'view/playerlist.php'; 
          } 
          else 
          { 
               // Show the requested player 
               $player = $this->model->getPlayer($_GET['player']); 
               include 'view/viewplayer.php';  
          }  
     }

     public function readPlayers($source, $filename = null) {
          $playerData = null;

          switch ($source) {
               case 'array':
                    $playerData = $this->getPlayerDataArray();
               break;
               case 'json':
                    $playerData = $this->getPlayerDataJson();
               break;
               case 'file':
                    $playerData = $this->getPlayerDataFromFile($filename);
               break;
          }

          if (is_string($playerData)) {
               $playerData = json_decode($playerData);
          }

          return $playerData;
     }

     public function writePlayer($source, $player, $filename = null) {
          switch ($source) {
               case 'array':
                    $this->playersArray[] = $player;
               break;
               case 'json':
                    $players = [];
                    if ($this->playerJsonString) {
                         $players = json_decode($this->playerJsonString);
                    }
                    $players[] = $player;
                    $this->playerJsonString = json_encode($player);
               break;
               case 'file':
                    $players = json_decode($this->getPlayerDataFromFile($filename));
                    if (!$players) {
                         $players = [];
                    }
                    $players[] = $player;
                    file_put_contents($filename, json_encode($players));
               break;
          }
     }

}  

?>
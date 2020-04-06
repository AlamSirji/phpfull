<?php
class Model
{
  public function __construct(){
    require_once(INCLUDES . "header.php");
  }
  public function printSyllabus(){
    require_once(VIEWS . "syllabus.php");
  }
  public function playGame($gameName){
    switch ($gameName) {
      case "wwcd":
        require_once(GAMES . "wwcd.php");
        break;

      default:
        // code...
        break;
    }
  }
  public function printTopic($topicName){
    switch ($topicName) {
      case 'superGlobals':
        require_once(TOPICS . "superGlobals.php");
        break;

      default:
        // code...
        break;
    }
  }
  public function __destruct(){
    require_once(INCLUDES . "footer.php");
  }
}

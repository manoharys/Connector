<?php 
  include("../../config/config.php");
  include("../classes/User.php");
  include("../classes/Message.php");

  $limit = 2; //Number of message to load
  
  $message = new Message($con, $_REQUEST['userLoggedIn']);
  echo $message->getConvosDropdown($_REQUEST, $limit);

?>
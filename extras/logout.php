<?php 
  session_start();

  session_destroy();
  header('location: /leon/13_sessions.php');
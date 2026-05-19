<?php

require_once 'models/Formation.php';

$formations = Formation::getAll();

require 'views/formations.php';

?>
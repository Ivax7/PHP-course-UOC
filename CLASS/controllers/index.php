<?php

$tasks = $app['database']->selectAll('prueba1');

require 'views/index.view.php';


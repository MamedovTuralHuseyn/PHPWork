<?php

use ishop\App;

   require_once dirname(__DIR__) . '/config/init.php';
   require_once LIBS . '\functions.php';
   require_once CONF . '\routs.php';
   


   new \ishop\App;

  debug(\ishop\Router::getRoutes());
   
<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('engel_app_homepage', new Route('/hello/{name}', array(
    '_controller' => 'EngelAppBundle:Default:index',
)));

return $collection;

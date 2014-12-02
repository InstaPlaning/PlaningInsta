<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('planing_insta_homepage', new Route('/hello/', array(
    '_controller' => 'PlaningInstaBundle:Advert:index',
)));

return $collection;

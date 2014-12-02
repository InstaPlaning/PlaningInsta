<?php

namespace PlaningInstaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction($name)
    {
    $content = $this->get('templating')->render('PlaningInstaBundle:Advert:index.html.twig');
    return new Response($content);
  }
}

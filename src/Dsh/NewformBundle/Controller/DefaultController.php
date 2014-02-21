<?php

namespace Dsh\NewformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bundle\NewformBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NewformBundle:Default:index.html.twig', array('name' => $name));
    }
}

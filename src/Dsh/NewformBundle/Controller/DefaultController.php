<?php

namespace Dsh\NewformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DshNewformBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Dsh\NewformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DshNewformBundle:Default:index.html.twig', array('name' => $name));
    }
*/


class DefaultController extends Controller

{
    Public function indexAction()
    {
        $person = new Person();
        
        $person->setName('billy the kiddy');
        $person->setAge('47');

	    $form = $this->createformbuilder()
	    
	    ->add('name','text')
	    ->add('age','integer')
	    ->add('save', 'submit')
	    ->getForm()
	    
	    ;
	    
	    return $this->render('DshNewformBundle:Default:index.html.twig', array(
	    'dazform' => $form->createView(),
	    ));
	    
	 }

  }


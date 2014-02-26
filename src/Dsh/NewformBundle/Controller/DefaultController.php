<?php

namespace Dsh\NewformBundle\Controller;

use Dsh\NewformBundle\Entity\person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $person = new person();
        
        $person->setName('Billythekiddie');
        $person->setAge('47');
        $person->setFootballteam('chelsea');
               
        $em = $this->getDoctrine()->getManager();
        $em->persist($person);
        $em->flush();
        
        $id = 2;
        
        $person = $this->getDoctrine()
        ->getRepository('DshNewformBundle:Person')
        ->find($id);

    if (!$person) {
        throw $this->createNotFoundException(
            'No person found for id'.$id
        );
    
   }
        
/*
     
     $em = $this->getDoctrine()->getManager();
     
     $person->setFootballteam('Liverpool');
     
     $em->persist($person);
      $em->remove($person);
           $em->flush();
*/
     
          
     
     exit(\Doctrine\Common\Util\Debug::dump($person));   
        
        
     return $this->render('DshNewformBundle:Default:index.html.twig');
               
    }
}



<?php

namespace Dsh\NewformBundle\Controller;

#use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Render;


class NewformController #extends Controller

{
    Public function formAction()
    {
	    $form = $this->createformbuilder()
	    
	    ->add('name','text')
	    ->add('age','integer')
	    ->add('save', 'submit')
	    ->getForm()
	    
	    ;
	    
	    return $this->render('DshNewformBundle:Default:form.html.twig', array('anynameform' => $form->createView(),
	    ));
	    
	 }

}

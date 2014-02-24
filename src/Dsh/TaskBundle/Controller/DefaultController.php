<!--

<?php

// src/Dsh/TaskBundle/Controller/DefaultController.php
namespace Dsh\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dsh\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('DshTaskBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

-->




    

 








    
        
    

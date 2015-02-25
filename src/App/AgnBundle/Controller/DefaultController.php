<?php

namespace App\AgnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\AgnBundle\Entity\AgnRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $title = $em->getRepository('AppAgnBundle:AgnUsers')->execProcedure();
        //$title = AgnRepository::
        return $this->render('AppAgnBundle:Default:index.html.twig',array(
                'title' => 'Dashboard'
            )
        );
    }
    
    public function testAction(){
        return $this->render('AppAgnBundle:Default:test.html.twig',array(
                'title' => 'Test'
            )
        );
    }
}

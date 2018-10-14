<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends Controller
{
    

    /**
    *@Route("/legal", name="legalmention")
     */
    public function legalAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/legal.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
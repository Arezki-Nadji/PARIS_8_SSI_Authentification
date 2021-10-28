<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte")
     * @IsGranted("ROLE_USER")
     */
    public function index(): Response
    {
        /**
         * @Route("/" ,name="compte")
         * @IsGranted
         */
        
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
}

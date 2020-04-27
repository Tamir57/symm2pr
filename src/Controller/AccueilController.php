<?php

namespace App\Controller;

use App\Repository\ProgrammeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(ProgrammeRepository $RepoProgramme)
    {
        $programmes = $RepoProgramme->findAll();

        return $this->render('accueil/index.html.twig', [
            'programmes' => $programmes,
        ]);
    }
}

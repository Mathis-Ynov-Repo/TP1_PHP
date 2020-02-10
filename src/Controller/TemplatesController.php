<?php

namespace App\Controller;

use App\Repository\CardTemplateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TemplatesController extends AbstractController
{
    /**
     * @Route("/templates", name="templates")
     */
    public function index(CardTemplateRepository $templateRepository)
    {
        $templates = $templateRepository->findAll();
        return $this->render('templates/index.html.twig', [
            'templates' => $templates,
            'controller_name' => 'TemplatesController',
        ]);
    }
}

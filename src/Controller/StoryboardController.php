<?php

namespace App\Controller;

use App\Repository\StoryboardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoryboardController extends AbstractController
{
    #[Route('/storyboard', name: 'storyboard')]
    public function index(StoryboardRepository $storyboardRepository): Response
    {
        $story = $storyboardRepository->findAll();
        return $this->render('storyboard/Storyboard.html.twig',[
            '$repo' => $story
        ]);
    }
}

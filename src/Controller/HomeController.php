<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends AbstractController
{
    #[Route(path: '/{_locale}', name: 'app_home', requirements: ['_locale' => 'fr|en|it|es'])]
    // #[Route('/', name: 'app_home')
    public function index(Request $request, TranslatorInterface $translator): Response
    {   
        $firstTranslation = $translator->trans('Salut');
        $secondTranslation = $translator->trans('Ça fonctionne');
        $thirdTranslation = $translator->trans('J\'aime Symfony');

        return $this->render('home/index.html.twig', compact('firstTranslation', 'secondTranslation', 'thirdTranslation'));
    }
}

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
        $fourthTranslation = $translator->trans('Alice commençait à en avoir assez d\'être assise à côté de sa soeur sur la berge, et de n\'avoir rien à faire; une fois ou deux, elle avait jeté un coup d\'oeil dans le livre que lisait sa soeur, mais il ne contenait ni images ni conversations, "et à quoi sert un livre", pensait Alice, "sans images ni conversations" ? Elle était donc en train de se demander (du mieux qu\'elle pouvait, car la chaleur de la journée la rendait très somnolente et stupide) si le plaisir de faire une chaîne de marguerites valait la peine de se lever et de cueillir les marguerites, quand soudain un lapin blanc aux yeux roses courut tout près d\'elle.');

        return $this->render('home/index.html.twig', compact('firstTranslation', 'secondTranslation', 'thirdTranslation', 'fourthTranslation'));
    }
}

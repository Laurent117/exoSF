<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class accueilController extends abstractController
{
    /**
     * @Route("/twig_accueil", name="twig_accueil")
     */

    public function twigArticle()
    {
        $article = 'article';
        // utilisation de la méthode render pour appeler un fichier Twig et le compiler en html
        // en lui envoyant des variables
        return $this->render('accueil.html.twig', [
            'article' => $article
        ]);
    }
}
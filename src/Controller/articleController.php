<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class articleController extends abstractController
{

    /**
     * @Route("/twig_article", name="twig_article")
     */

    public function twigArticle()
    {

        // utilisation de la méthode render pour appeler un fichier Twig et le compiler en html
        // en lui envoyant des variables
        return $this->render('article.html.twig');
    }

}
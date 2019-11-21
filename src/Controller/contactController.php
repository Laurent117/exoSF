<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class contactController extends abstractController
{
    /**
     * @Route("/twig_contact", name="twig_contact")
     */

    public function twigContact()
    {
        $contact = 'contact';
        // utilisation de la méthode render pour appeler un fichier Twig et le compiler en html
        // en lui envoyant des variables
        return $this->render('contact.html.twig', [
            'contact' => $contact
        ]);
    }
}
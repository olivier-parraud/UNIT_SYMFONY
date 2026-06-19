<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ProfilController extends AbstractController
{
    #[Route('/mon-profil', name: 'app_user_profile')]
    #[IsGranted('ROLE_USER')] // Sécurise la page : redirige vers la connexion si anonyme
    public function index(): Response
    {
        // Récupère l'utilisateur réellement connecté en session
        $user = $this->getUser();

        // Envoie l'utilisateur au template Twig
        return $this->render('profil/index.html.twig', [
            'user' => $user,
        ]);
    }
}
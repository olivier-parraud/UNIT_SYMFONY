<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est connecté, on le redirige immédiatement vers son profil
        if ($this->getUser()) {
            return $this->redirectToRoute('app_user_profile');
        }

        // Récupère l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // Dernier nom d'utilisateur saisi
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('home/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/creer-les-comptes-test', name: 'app_create_accounts')]
    public function createAccounts(EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        // SÉCURITÉ : Vérifie si le compte test existe déjà en base pour éviter une erreur SQL de doublon
        $existingUser = $em->getRepository(User::class)->findOneBy(['email' => 'user@test.com']);
        if ($existingUser) {
            return new Response('<h1>Les comptes existent déjà en base de données !</h1>
                <p>Vous pouvez vous connecter directement sur la page d\'accueil.</p>');
        }

        // 1. CRÉATION DU COMPTE UTILISATEUR STANDARD
        $user = new User();
        $user->setEmail('user@test.com');
        $user->setRoles(['ROLE_USER']); 
        $user->setPassword($passwordHasher->hashPassword($user, 'user123'));
        $em->persist($user);

        // 2. CRÉATION DU COMPTE ADMINISTRATEUR
        $admin = new User();
        $admin->setEmail('admin@test.com');
        $admin->setRoles(['ROLE_ADMIN']); 
        $admin->setPassword($passwordHasher->hashPassword($admin, 'admin123'));
        $em->persist($admin);

        // On envoie tout en base de données
        $em->flush();

        return new Response('<h1>Comptes créés avec succès ! 🚀</h1>
            <p><strong>Compte User :</strong> user@test.com / user123</p>
            <p><strong>Compte Admin :</strong> admin@test.com / admin123</p>');
    }
}
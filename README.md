# ETAPE A :

## Étape 1 : Préparer l'environnement
1. Installer Docker et Docker-Compose (si ce n'est pas déjà fait)
Assurez-vous que Docker et Docker-Compose sont installés et
configurés correctement sur votre machine.

Quelles commandes permettent de vérifier les versions de ces
deux éléments et par conséquent de vérifier qu’ils sont bien
installés ?

Pour Docker : 
`docker -v`

<img src="/img/docker.png">

Pour Docker-compose :
`docker-compose -v`

<img src="/img/docker-compose.png">


2. Installer Composer (si ce n'est pas déjà fait)
Symfony nécessite Composer pour gérer ses dépendances. Vous
pouvez le télécharger depuis getcomposer.org.

Quelles commandes permettent de vérifier les versions de ces
deux éléments et par conséquent de vérifier qu’ils sont bien
installés ?

Pour Composer :
`composer -v`

<img src="/img/composer.png">


3. Installer symfony CLI (si ce n'est pas déjà fait)
https://symfony.com/download#step-1-install-symfony-cli

Je l'ai déjà fait.

## Étape 2 : Créer un dossier de projet
Créez un répertoire pour votre projet Symfony nommez-le
“UNIT_SYMFONY” qui hébergera votre readme et les autres dossiers du
projet

Je l'ai déjà fait.

## Étape 3 : Préparer le fichier Docker Compose
Ce fichier est fourni en annexe de ce document.
Expliquer dans le readme.md à la racine du projet chaque ligne de ce
fichier

Créer un fichier docker-compose.yml
Créez ce fichier à la racine de votre dossier de projet avec le contenu
approprié fourni en annexes.
Expliquez dans le readme du dossier projet ce qu’il fait ligne par ligne
dans une ou deux phrases pour chaque services.


Le fichier docker-compose.yml commenté ligne par ligne est directement commenté dans le fichier orignal.
./UNIT_SYMFONY/docker-compose.yml


## Étape 4 : Préparer le fichier default.conf

Créer un fichier de configuration Nginx
Créez un dossier nginx et le fichier default.conf dedans, avec le
contenu approprié fourni en annexe.
Expliquez dans le readme du dossier projet ce qu’il fait ligne par ligne

Le fichier default.conf commenté ligne par ligne est directement commenté dans le fichier orignal.
./UNIT_SYMFONY/nginx/default.conf


## Étape 5 : Préparer le fichier Dockerfile
Ce fichier est fourni en annexe de ce document.
Expliquer dans le readme.md à la racine du projet chaque ligne de ce
fichier et pourquoi l’utiliser.
Créer un fichier Dockerfile
Créez ce fichier à la racine de votre dossier de projet avec le contenu
approprié fourni en annexes.
Expliquez dans le readme du dossier projet ce qu’il fait ligne par ligne


Le fichier Dockerfile commenté ligne par ligne est directement commenté dans le fichier orignal.
./UNIT_SYMFONY/Dockerfile


Pourquoi utiliser ce Dockerfile ?

1. Dépasser les limites de l'image officielle
L'image officielle fournie par Docker Hub (php:8.2-fpm) est très épurée. Elle contient le strict minimum pour faire tourner PHP, mais elle ne possède ni Git, ni Unzip, ni Composer.

Or, Symfony est un framework moderne qui dépend entièrement de Composer pour installer ses packages (les bundles). Sans ce Dockerfile, ton conteneur PHP serait incapable d'installer ou de mettre à jour les dépendances de ton projet Symfony.

2. Le principe de l'automatisation et de la reproductibilité
Le Dockerfile est une "recette de cuisine". Au lieu d'entrer manuellement dans le conteneur pour installer Composer et les outils à chaque fois que tu recrées ton environnement, Docker lit ce fichier et automatise toute l'installation.

Cela garantit que ton application fonctionnera exactement de la même manière sur ton ordinateur de développement, sur celui de ton formateur, ou sur un serveur de production.


## Étape 6 : Installer Symfony

Positionnez vous dans le terminal visual studio dans votre dossier projet
Taper cette commande :
symfony new app --version="7.2.x" --webapp
Ceci pour installer les fichiers de symfony dans le dossier app
Observez le résultat dans votre visual studio


## Étape 5 : Configurer la base de données sur le projet
Modifiez le fichier .env de Symfony dans le répertoire app pour
connecter la base de données (modification ci-dessous, ajouter
seulement la ligne “DATABASE_URL”).
Trouver le moyen de générer une clef de sécurité forte.
Inclure sa création dans le readme.

Le fichier .env est a été modifié dans le fichier orignal.
./UNIT_SYMFONY/.env



__________________________________________________________


1. Entrer dans le conteneur par l’invite de commande taper :

`docker exec -it symfony_app bash`

2. Quelle commande doit être lancée avant cette commande ?

`docker compose up -d --build`

<img src="/img/exec.png">

Trouver la commande pour sortir de cet environnement.

Pour sortir de l'environnement j'utilise la commande :
`exit`


## Étape 6 : Tester l'application
1. Accédez à votre application Symfony sur http://localhost:8080.
2. Tu es prêt pour développer ton projet Symfony avec une base bien
configurée ! 🚀
Maintenant observe ta page et trouvez le lien pour apprendre à coder
sous Symfony
1. Créer un menu pour te connecter à une page administrateur et
utilisateur
2. Test et fait migrer tes données dans la base de données
3. Réalise une page esthétiquement pro d'accueil avec son menu
en haut à droite de connexion, rien de plus.
4. Cette page doit bien sûr persister aussi.
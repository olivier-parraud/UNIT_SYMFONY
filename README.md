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


La version du docker-compose.yml commenté ligne par ligne directement dans le fichier orignal.
./UNIT_SYMFONY/docker-compose.yml


## Étape 4 : Préparer le fichier default.conf

Créer un fichier de configuration Nginx
Créez un dossier nginx et le fichier default.conf dedans, avec le
contenu approprié fourni en annexe.
Expliquez dans le readme du dossier projet ce qu’il fait ligne par ligne

_5

Étape 5 : Préparer le fichier Dockerfile
Ce fichier est fourni en annexe de ce document.
Expliquer dans le readme.md à la racine du projet chaque ligne de ce
fichier et pourquoi l’utiliser.
Créer un fichier Dockerfile
Créez ce fichier à la racine de votre dossier de projet avec le contenu
approprié fourni en annexes.
Expliquez dans le readme du dossier projet ce qu’il fait ligne par ligne
Étape 6 : Installer Symfony

Positionnez vous dans le terminal visual studio dans votre dossier projet
Taper cette commande :
symfony new app --version="7.2.x" --webapp
Ceci pour installer les fichiers de symfony dans le dossier app
Observez le résultat dans votre visual studio

_6

Étape 5 : Configurer la base de données sur le projet
Modifiez le fichier .env de Symfony dans le répertoire app pour
connecter la base de données (modification ci-dessous, ajouter
seulement la ligne “DATABASE_URL”).
Trouver le moyen de générer une clef de sécurité forte.
Inclure sa création dans le readme.
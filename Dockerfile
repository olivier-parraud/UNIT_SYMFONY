# Définit l'image de base officielle sur laquelle on va construire notre propre image.
# Ici, on part d'une distribution Linux où PHP 8.2 et l'environnement FPM sont déjà préinstallés.
FROM php:8.2-fpm

# Met à jour la liste des paquets système de la distribution Linux (apt-get update)
# puis installe les outils "curl" (pour télécharger), "unzip" (pour décompresser) et "git" (gestion de version).
# Le drapeau "-y" permet de valider automatiquement toutes les confirmations d'installation.
RUN apt-get update && apt-get install -y curl unzip git

# Télécharge l'installateur officiel de Composer via l'outil "curl" et l'exécute avec "php".
# Ensuite, la commande "mv" déplace et renomme le fichier "composer.phar" vers un dossier système global.
# Cela permet d'exécuter la commande "composer" depuis n'importe quel dossier du conteneur.
RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer
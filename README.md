# Bon de commande

L'application bon de commande est une application basé sur CakePhp. Cette dernière permet de créer, modifier et d'archiver des bons de commande établi par un ou plusieurs services.


## Essayez l'application et faites des retours
Cette application est la toute première que j'ai conçu via cakePhp.

[View source and download on GitHub](https://github.com/leknoppix/bondecommande)

Cette application n'étant pas encore fini, je vous invite déjà à tester dès à présent cette monture.


## Installation
Afin de l'installer, il vous faudra.

*   Un serveur Apache (avec url rewrite actif) avec PHP5, Mysql
*   Une base de donnée

En premier, connectez-vous à votre serveur de base de donnée, sélectionnez votre base de donnée puis importer le fichier database.sql se trouvant à la racine.
Une fois cela effectué, éditez le fichier: `app/Config/database.php` afin que cela corresponde à votre configuration.
Modifiez également le fichier `app/Config/adresse.php` afin de le faire correspondre à votre entité.
Ensuite ouvrez votre navigateur favori en indiquant en dernier dossier le dossier `bondecommande`. Si vous avez suivi toute les instructions, vous devriez arrivé à une page d'identification. Les identifiants sont: 
*   login: admin
*   password: admin

## Retour d'expérience et bug
Afin de me permettre d'apprendre de mes erreurs et/ou faire évolué le projet, n'hésitez pas à forker le projet, à le faire vire et remonter vos expériences professionnelles.
Merci d'avance.
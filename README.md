# Bon de commande

L'application **Bon de commande** est une application basée sur CakePHP. Cette dernière permet de créer, modifier et d'archiver des bons de commande établis par un ou plusieurs services.


## Essayez l'application et faites des retours

Cette application est la toute première que j'ai conçu via CakePHP.

[View source and download on GitHub](https://github.com/leknoppix/bondecommande)

Cette application n'étant pas encore finie, je vous invite à tester dès à présent cette monture.


## Installation

Afin de l'installer, il vous faudra.

- Serveur HTTP (Apache2 + mod_rewrite ou Nginx)
- PHP5
- MySQL

En premier, connectez-vous à votre serveur de base de données, sélectionnez votre base de données, puis importez le fichier database.sql qui se trouve à la racine.

Une fois cela effectué, éditez le fichier: `app/Config/database.php` afin que cela corresponde à votre configuration.
Modifiez également le fichier `app/Config/adresse.php` afin de le faire correspondre à votre entité.

Ensuite ouvrez votre navigateur favori en indiquant en dernier dossier le dossier `bondecommande`. Si vous avez suivi toutes les instructions, vous devriez arriver à une page d'identification. Les identifiants sont: 

- login: admin
- password: admin

## Retour d'expérience et bugs

Afin de me permettre d'apprendre de mes erreurs et/ou faire évoluer le projet, n'hésitez pas à forker le projet, créer des [issues](https://github.com/leknoppix/bondecommande/issues) ou me soumettre des [pull-requests](https://github.com/leknoppix/bondecommande/pulls).

Merci d'avance.

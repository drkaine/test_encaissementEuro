[![Pipeline-CI](https://github.com/drkaine/test_technique_api_voyage/actions/workflows/CI.yml/badge.svg)](https://github.com/drkaine/test_technique_api_voyage/actions/workflows/CI.yml)

Script qui prend en argument un json et rend un json

Pour l'utiliser :
-   cloner le repository
-   lancer dans le terminal "composer install"
-   instancier la classe Runner avec un json des cartes d'embarquement avec les paramètres :
    *   vehicule
    *   from
    *   to
    *   seat
    *   gate
    *   baggage
    *   vehiculeNumber
-   pour récupérer le résultat il faut appeler le paramètre $runner->result

Fait en php 8.2 pour la compatibilité avec php CS Fixer
Avec PhpUnit 10 et phpStan

Piste d'amélioration :
-   Ajouter des tests pour les cas limites (les cas d'erreurs)
-   AJouter une gestion des erreurs
-   Ajouter des interfaces pour limiter la dépendance entre les classes
-   Ajouter des fichiers de config pour libérer et rendre les fichiers de tests plus lisibles

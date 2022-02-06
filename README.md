# back-jeu-de-memoire
Back pour le jeu de mémoire avec Lumen

Back end php avec le microframework LUMEN: https://lumen.laravel.com/
J'ai choisi d'utiliser lumen car c'est un microframework léger et facile à prendre en main. 
(il me semble qu'on l'utilise pendant la formation PHP.)
Et mySQL en base de donnée. 
J'ai utilisé POSTMAN pour tester les requetes sur mon API (commentaires dans le fichier routes/web.php)

J'ai utilisé les commits + commentaires pour expliquer mon code. 
Malheuresement je n'utilise pas les commandes SQL 
(SELECT * FROM `players` pour afficher tous les "players" par exemple mais peut être dans un prochain commit si j'ai le temps...)

## Pour installer le serveur: 
* Aller dans le dossier "player" => Commande : Composer install
* Créer une nouvelle database
* Créer à la racine du dossier player un fichier .env et le remplir en précisant bien la database créée
* Commande : php artisan migrate (pour creer la table "players"
* Lancer le serveur : php -S localhost:8000 -t public 
* Tester sur : http://localhost:8000/api/players

## Fichier .env
* DB_CONNECTION=mysql
* DB_HOST=localhost
* DB_PORT=3306
* DB_DATABASE= Celle qui vient d'être créée. 
* DB_USERNAME= Ur Username
* DB_PASSWORD= Ur Password

## Partie Front:

https://github.com/Furiie/Jeu-de-memoire

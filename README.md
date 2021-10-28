# PARIS_8_SSI_Authentification
### Configuration
Vous avez besoin d'installer :
-PHP version > 5.8/
-Composer/
-Symfony/
### Après avoir colonner le repo
-lancer la commande : composer install;
### Base de donnée 
Vous trouvez une base de donnée SQL que vous pourrez charger sur un environement tel que Xampp/Wampp etc ..</br>
puis rendez vous dans le fichier .env à la ligne 30 et saisissez le user name et le password de la base de donnée<br/>
DATABASE_URL="mysql://user_name:password@127.0.0.1:3306/paris_8_ssi?serverVersion=5.7"
### Lancer le site 
Lancer le site avec la commande <br/>
-symfony server:start<br/>
http://127.0.0.1:8000/login


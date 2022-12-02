
# Comment déployer
Cloner le dépôt
``` console
git clone https://github.com/Schrodinger0/submitMeIfYouCan
```
Configurer le fichier .env <br />
Créer la base de données à l'aide de myPhpAdmin <br />
Entrez dans le référentiel cloné
``` console
cd submitMeIfYouCan
```
lancer la commande d'installation du compositeur depuis le terminal
``` console
composer install
```
migrer la base de données
``` console
php artisan migrate
```
maintenant servir l'application !
``` console
php artisan serve
```
vérifiez maintenant http://127.0.0.1:8000

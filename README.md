a ajouté dans le .env des 3 API pour Postgresql
```env
DB1_CONNECTION=data
DB1_HOST=127.0.0.1
DB1_PORT=5432
DB1_DATABASE=bddname
DB1_USERNAME=bdduser
DB1_PASSWORD=bddpassword
```
depuis la racine du projet
```bash
cd account.api.collect.verything & php artisan migrate & php artisan db:seed & php artisan serve -d --port=8001 & cd .. 
```

```bash
cd address.api.collect.verything & php artisan migrate & php artisan db:seed & php artisan serve -d --port=8002 & cd .. 
```

```bash
cd user.api.collect.verything & php artisan migrate & php artisan db:seed & php artisan serve -d --port=8003 & cd .. 
```

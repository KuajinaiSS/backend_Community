# backend_Community
## Clonar el repositorio
```bash
git clone https://github.com/KuajinaiSS/Prueba_2.git
```
### Instalar Backend
```bash
cd backend
copy .env.example .env
```
### Configuraremos el .env con las credenciales de Mysql
DB_USERNAME=root
DB_PASSWORD=

```bash
php composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

### Uso del Backend
`php artisan serve`

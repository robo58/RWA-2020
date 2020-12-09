# RWA Laravel v8 2020

**Potrebno**
- Xampp ( Apace, MySql, PHP, Pearl)
- Composer
- NPM
- 
#### Kreiranje novog projekta

`composer create-project --prefer-dist laravel/laravel imeProjekta`
 ili
`laravel new imeProjekta`

Nakon kreiranja moramo pokrenuti 

`php artisan key:generate`

`composer require`

`php artisan ui bootstrap/vue/react --auth`

`npm install`

`npm run dev`

### Ako zelite nastaviti na projekt iz ovog repozitorija 

##### Pokrenuti git clone https://github.com/robo58/RWA-2020.git unutar mape gdje zelite aplikaciju

##### Kreirati bazu "ime_baze" na localhost/phpmyadmin

#### .env file 

pokrenuti u terminalu cp .env.example .env da bi kreirali .env datoteku

`DB_DATABASE=ime_baze // Ime vase baze`

`DB_USERNAME=root`

`DB_PASSWORD=`

#### Naredbe pri kreiranju aplikacije

`composer require`

`npm install`

`npm run dev`

`php artisan migrate`


## Kreiranje modela

    php artisan make:model ImeModela -opcija

##### -opcija

-m = Migracija

-c = Controller

-r = Resource

##### ili

-a = kreira i migraciju i kontroler, te kontroler bude resource kontroler


## Tinker

    php artisan tinker
    
## Materijali

https://laracasts.com/series/laravel-6-from-scratch

https://laravel.com/docs/8.x/installation

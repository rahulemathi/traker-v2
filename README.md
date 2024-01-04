
# Traker in Laravel

This Project is made using laravel with filamentphp 





## Screenshots
Login 

![Login Screen](https://github.com/rahulemathi/traker/blob/main/images/image%201.png?raw=true)

Dashboard
![Dashboard](https://github.com/rahulemathi/traker-v2/blob/main/images/dashboard.png?raw=true)

Details
![Detail](https://github.com/rahulemathi/traker-v2/blob/main/images/details.png?raw=true)

Mileage
![Mileage](https://github.com/rahulemathi/traker-v2/blob/main/images/mileage.png?raw=true)

## Run Locally

Clone the project

```bash
    git clone https://github.com/rahulemathi/traker-v2.git
```

Go to the project directory

```bash
    cd traker
```

Install composer update

```bash
    composer install
```

rename the .env.example file to .env file

```bash
    mv .env.example .env
```

generate key

```bash
    php artisan key:generate
```

make migration

```bash
    php artisan migrate
```

Start the serve

```bash
    php artisan serve
```
Link the Storage

```bash
php artisan storage:link
```

create a user
```bash
php artisan make:filament-user
```

make sure that your APP_URL = http://127.0.0.1:8000 to set the images working
## Authors

- [@rahulemathi](https://github.com/rahulemathi)

# Thinking about what to work next with
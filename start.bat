%systemDrive%\xampp\mysql\bin\mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab7;"

php -r "copy('.env.example', '.env');"

call composer install

call php artisan migrate

call php artisan db:seed --class=CountrySeeder

call php artisan db:seed --class=TripSeeder

call php artisan key:generate

call php artisan storage:link

code .

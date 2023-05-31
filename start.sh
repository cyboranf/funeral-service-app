/opt/lampp/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab7;" # Linux

/Applications/xampp/xamppfiles/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ai1_lab7;"  # Mac

php -r "copy('.env.example', '.env');"

composer install

php artisan migrate

php artisan db:seed --class=CountrySeeder

php artisan db:seed --class=TripSeeder

php artisan key:generate

php artisan storage:link

code .

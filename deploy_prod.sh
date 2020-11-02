cd /var/www/los-romka-project/

git pull origin main

composer install

php bin/console cache:clear
php bin/console cache:warmup

echo "Successfully deployed!"

cd /var/www/los-romka-project/

git pull origin main

composer install

bin/console cache:clear
bin/console cache:warmup

echo "Successfully deployed!"

echo 'DELETE DATABASE'
bin/console doctrine:database:drop --force

echo 'CREATE DATABASE'
bin/console doctrine:database:create

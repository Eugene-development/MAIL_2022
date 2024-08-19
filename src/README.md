git add . && git commit -m "c" && git push


env
env

sudo docker run --rm -v $(pwd):/app composer install --ignore-platform-reqs

sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache

sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache



sudo docker-compose down && cd ../vXXX && sudo docker-compose up --build -d
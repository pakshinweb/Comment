##Deploy

### Copy project
```
git clone https://github.com/pakshinweb/Comment.git
```
```
cd Comment/
```
### Install Docker
```
sudo apt-get update
sudo apt-get install docker-ce docker-ce-cli containerd.io
```
### Stop all
```
docker stop $(docker ps -q -a)
```
### Build
```
docker-compose build
docker-compose up -d
docker-compose exec php mkdir ./database/seeds
```
### composer install
```
docker-compose exec php composer install --no-scripts 
```
```
docker-compose exec php chown -R www-data:www-data ./
docker-compose exec php mv .env.example .env
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate 
```
http://localhost

##Deploy

### Copy project
```
git clone https://github.com/pakshinweb/Comment.git
```
```
cd Comment/
```
### Stop all
```
docker stop $(docker ps -q -a)
```
### Build
```
docker-compose build
docker-compose up -d
docker-compose exec php chown -R www-data:www-data ./
docker-compose exec php mv .env.example .env
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate 
```

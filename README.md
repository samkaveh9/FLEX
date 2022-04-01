## Project setup

#### create mysql folder or run below command in terminal:
```
mkdir mysql
```

#### setup composer
```
docker-compose composer install
```

### copy .env.example file to .env in scr folder

#### generate application key
```
docker-compose artisan key:generate
```


#### and then migrate the tables
```
docker-compose artisan migrate
```

# Congenial Adventure

## Install

```shell script
composer install
```

## Setup
```shell script
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

## Preview

#### Linux with `symfony cli`
```shell script
symfony server:start
```
```shell script
curl --request POST \
  --url https://127.0.0.1:8000/api/products \
  --header 'content-type: application/json' \
  --data '{"name": "Foo Bar","price": "123.45"}'
```

#### Linux with docker:
```shell script
docker run \
  --rm \
  --name symfony-rest-api \
  --volume ${PWD}:/www/api.localhost \
  --publish 80:80 \
    gander/dev:7.3
```
```shell script
curl --request POST \
  --url http://api.localhost/api/products \
  --header 'content-type: application/json' \
  --data '{"name": "Lorem ipsum","price": "333.33"}'
```
 

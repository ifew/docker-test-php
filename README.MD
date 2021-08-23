# Sample PHP Docker image

## Docker run this image
docker run -d -p 80:80 -e MYSQL_DB_HOST=mysql -e MYSQL_DATABASE=test -e MYSQL_USER=root -e MYSQL_PASSWORD=1234 -e MYSQL_ROOT_PASSWORD=1234 --net db_network --name myweb docker.io/ifew/docker-test-php:7.3

## Build image
docker build . -t ifew/docker-test-php:7.3

## Push image to repo
docker push ifew/docker-test-php:7.3

## If want to push to AWS ECR
### authentication
aws ecr get-login-password --region ap-southeast-1 | docker login --username AWS --password-stdin xxxx.dkr.ecr.ap-southeast-1.amazonaws.com/test

### Tag your image
docker tag ifew/docker-test-php:v1 xxxx.dkr.ecr.ap-southeast-1.amazonaws.com/test:v1

### push your image
docker push xxxx.dkr.ecr.ap-southeast-1.amazonaws.com/test:v1
# Building a LAMP Server using docker-compose
- PHP Output using samplehello.php


![php1](https://user-images.githubusercontent.com/122565356/212879045-5c59417a-503c-442e-8570-9cb0f465bafa.png)

- phpMyAdmin Output


<img width="845" alt="php2" src="https://user-images.githubusercontent.com/122565356/212879583-c48c1788-023c-4a05-a0b0-0ec31c6dd072.png">
Run below command:

```
docker-compose up -d
```
You will get `Fatal Error`

<img width="887" alt="php3" src="https://user-images.githubusercontent.com/122565356/212879799-ddb52d01-15b6-4b5b-9074-24f43c79d48e.png">
Login to docker container and run the below commands:

```
docker exec -it `containerID/containername` /bin/bash
docker-php-ext-install mysqli
docker-php-ext-enable mysqli
apachectl restart
```
Final Ouput:

<img width="896" alt="php4" src="https://user-images.githubusercontent.com/122565356/212882372-b218f241-8ecf-4278-9f33-77de76c66617.png">

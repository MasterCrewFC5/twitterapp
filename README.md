Twitterapp
========================

Welcome to the Symfony Standard Edition 3.4 - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

Configure docker 
--------------
Create the container (not pushed on the hub yet)
````
docker build -t creemson/application ./Docker/Symfony
docker build -t creemson/data ./Docker/Data
docker build -t creemson/apache_php ./Docker/ApachePHP
````

Check all the container
````
docker ps -a
````

Build
````
docker-compose up
````

access a container
````
docker exec -ti <container-id> bash
````

Configure symfony
--------------

check the doc [2]

Enjoy!

[1]:  https://docs.docker.com/compose/
[2]:  https://symfony.com/doc/3.4/setup.html


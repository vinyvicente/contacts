## Contacts Book

### Requirements

   * Docker
   
### Installation

Stack: PHP 7.4, SQLite, Symfony 3.4 (specified for test)

```shell script
# stop all containers to don't disturb your tests :)
docker stop $(docker ps -a -q) 
docker-compose up
docker exec -it contacts_api composer install
```

Then, just access: http://localhost:8080

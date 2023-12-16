1. Билдим контейнеры `docker-compose up -d --build`
2. Делаем импорт дамп базы данных схема `docker exec -i db mysql -uroot -ptest_pass skillboxdb < ./schema.sql`
3. Делаем импорт дамп базы данных данные `docker exec -i db mysql -uroot -ptest_pass skillboxdb < ./data.sql`


## Проверка
1. Первое задание в тестовом видео
2. проверка 2 задание команда `docker exec -it app php  part2.php`
3. проверка 3 задание команда `docker exec -it app php  part3.php`
4. проверка 4задание команда `docker exec -it app php  part4.php`
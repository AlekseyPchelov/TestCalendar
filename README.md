# Описание запуска приложения
Для запуска приложения потребуется Docker. Скачать можно по ссылке - https://www.docker.com/

### Запуск приложения
Из корневой директории выполнить команду:

```docker-compose up -d```

### Запуск скрипта миграций
Выполнить команду:

```docker exec -i testcalendar-backend-1 php yii migrate/up```

#### Сайт - http://localhost:20080/
#### Админка - http://localhost:21080/

### Логин и пароль для входа в роли пользователя
* test0 (test1, test2, test3)
* 12345678

### Для входа в роли админа
* admin
* adminadmin

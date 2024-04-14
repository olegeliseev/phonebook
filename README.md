# Тестовое задание для компании Effective Mobile

Реализация телефонного справочника на чистом PHP

## Проект выложен на бесплатном хостинге beget.com

Попробовать его в действии можно по ссылке: https://beget.com/ru

![main](https://github.com/olegeliseev/phonebook/assets/66223707/3c6f2be6-c3d3-442d-a3fe-795a436bf683)

## Требования к локальной установке

* PHP 8.2+
* Composer
* Apache с настроенным DocumentRoot на папку /public (пример настройки ниже)

## Установка

Перейдите в папку, в которой хотите поместить проект, и клонируйте репозиторий:

```sh
$ git clone https://github.com/olegeliseev/phonebook.git
```

Выделите виртуальный хост под этот проект и настройте его следующим образом:

```apacheconf
<VirtualHost *:80>
    DocumentRoot "/path/to/phonebook/public"
    ServerName phonebook.loc
    
  <Directory "/path/to/phonebook/public">
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
```

Перейдите в папку проекта и выполните:

```sh
$ composer install
```

Composer используется только для автозагрузки классов

## Функциональность проекта

* Добавление контакта с именем и номером телефона, возможность выбрать цвет для каждого контакта
* Просмотр всех контактов на главной странице
* Возможность удаления контакта соответствующей кнопкой

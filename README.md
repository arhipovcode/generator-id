# PHP Generator ID

PHP Generator ID - это пакет PHP, который предоставляет удобный способ генерации уникальных идентификаторов для ваших приложений. 
Он может использоваться для создания уникальных идентификаторов для пользователей, заказов, транзакций и многого другого.

## Требования

- PHP 7.4

## Установка

Чтобы установить PHP Generator ID, вы можете использовать Composer:
``` bash
$ composer require arhipovcode/php-generator-id
```

## Использование
Чтобы использовать PHP Generator ID, просто создайте экземпляр класса и вызовите метод generate():
```php
use MyUsername\Generator\Id;

$idGenerator = new Id();
$uniqueId = $idGenerator->generate();

echo $uniqueId; // "5f9f3c7d-bd5c-4b94-9f01-3a3e7b6f4c2b"
```

<h1>Гостевая книга</h1>

Процесс развёртывания:
1) Гит клон
2) composer install 
3) cp .env.example .env
4) php artisan key:generate
5) настройка БД в .env
6) php artisan migrate
7) php artisan db:seed (по желанию, создаст фейковые комментарии)
8) php artisan serve

![Image alt](https://github.com/North-Guard/GuestBook/blob/master/screen.png)
<h1>Гостевая книга</h1>

Процесс развёртывания:
1) Гит клон
2) composer install 
3) cp .env.example .env
4) настройка БД в .env
5) php artisan migrate
6) php artisan db:seed (по желанию, создаст фейковые комментарии)

![Image alt](https://github.com/North-Guard/GuestBook/blob/master/screen.png)
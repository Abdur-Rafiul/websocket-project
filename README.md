
## Websocket Setup

1.composer require beyondcode/laravel-websockets -w <br> <br>
2.php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"  <br> <br>
3.php artisan migrate  <br> <br>
4.php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"  <br> <br>
5.composer require pusher/pusher-php-server  <br> <br>

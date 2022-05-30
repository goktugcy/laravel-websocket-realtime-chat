
# Laravel Websocket Realtime Chat

Laravel websocket & laravel echo ile realtime sohbet örneği.


## Ekran Görüntüleri

https://user-images.githubusercontent.com/17319750/170995446-b7f573d1-0b89-4e68-b98d-a1775d209216.mp4

  
## Kurulum



```bash
.env.example -> .env
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=local
PUSHER_APP_KEY=local
PUSHER_APP_SECRET=local
PUSHER_APP_CLUSTER=mt1

```

```bash
composer install
php artisan migrate
npm install && npm run dev
```

```bash
php artisan serve
php artisan websocket:serve
```


  
## Kullanım



```bash
localhost:8000/chat/with/userid 
localhost:8000/chat/with/1  * 
```

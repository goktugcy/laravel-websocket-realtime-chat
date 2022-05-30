
# Laravel Websocket Realtime Chat

Laravel websocket & laravel echo ile realtime sohbet örneği.


## Ekran Görüntüleri

https://user-images.githubusercontent.com/17319750/170995649-ac1086be-c5ee-463e-8bbd-1f075334d47c.mp4

  
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

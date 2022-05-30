
# Laravel Websocket Realtime Chat

Laravel websocket & laravel echo ile realtime sohbet örneği.


## Ekran Görüntüleri

![Uygulama Ekran Görüntüsü](https://i.ibb.co/b7VpJRk/sssssaaaa.gif)

  
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


  

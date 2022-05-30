
# Laravel Websocket Realtime Chat

Laravel websocket & laravel echo ile realtime sohbet örneği.


## Ekran Görüntüleri

<video src='[your URL here](https://rr1---sn-4g5e6nzl.c.drive.google.com/videoplayback?expire=1653928755&ei=87qUYqPWJsf18gTqmISgAg&ip=85.103.108.127&cp=QVRKVUpfV1dTRlhPOmN3RzBIcF9kNW9wbFZDeWdGbkw4dHdOSjZfZzBQQkwxRXZvVC14cVp4MFk&id=8c6cc33ddc7a5c8c&itag=37&source=webdrive&requiressl=yes&ttl=transient&susc=dr&driveid=15JASYDIAslL3EHFXUTaeogHoySepb9Ii&app=explorer&mime=video/mp4&vprv=1&prv=1&dur=35.015&lmt=1653914102353362&subapp=DRIVE_WEB_FILE_VIEWER&txp=0011224&sparams=expire,ei,ip,cp,id,itag,source,requiressl,ttl,susc,driveid,app,mime,vprv,prv,dur,lmt&sig=AOq0QJ8wRgIhAJ1Fbocke_lg4vx86pkgojVc5U23pkqfXX0mmbdwcIk0AiEAuJYqgPXI0xNV5OgHO3HqQvW3OwhZS-O7yx4ApkhtAjM=&cpn=8_9YkqgglMKjKv1i&c=WEB_EMBEDDED_PLAYER&cver=1.20220525.01.00&redirect_counter=1&cm2rm=sn-nv4e67d&req_id=a91001736741a3ee&cms_redirect=yes&cmsv=e&mh=In&mm=34&mn=sn-4g5e6nzl&ms=ltu&mt=1653914189&mv=m&mvi=1&pl=21&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIhAJ3Xzib23vtJCMYOz7PalWS7G1P1J9CpUlfMiFVWezxYAiBmKIHeK79ASnNSjgJsneqr6CwGgmVw5KqokDnPK-T8Qw%3D%3D)' width=180/>

  
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

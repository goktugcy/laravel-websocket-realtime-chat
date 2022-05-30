
# Laravel Websocket Realtime Chat

Laravel websocket & laravel echo ile realtime sohbet örneği.


## Ekran Görüntüleri

<video controls="" autoplay="" name="media"><source src="https://rr1---sn-4g5e6nzl.c.drive.google.com/videoplayback?expire=1653928755&amp;ei=87qUYqPWJsf18gTqmISgAg&amp;ip=85.103.108.127&amp;cp=QVRKVUpfV1dTRlhPOmN3RzBIcF9kNW9wbFZDeWdGbkw4dHdOSjZfZzBQQkwxRXZvVC14cVp4MFk&amp;id=8c6cc33ddc7a5c8c&amp;itag=37&amp;source=webdrive&amp;requiressl=yes&amp;ttl=transient&amp;susc=dr&amp;driveid=15JASYDIAslL3EHFXUTaeogHoySepb9Ii&amp;app=explorer&amp;mime=video/mp4&amp;vprv=1&amp;prv=1&amp;dur=35.015&amp;lmt=1653914102353362&amp;subapp=DRIVE_WEB_FILE_VIEWER&amp;txp=0011224&amp;sparams=expire,ei,ip,cp,id,itag,source,requiressl,ttl,susc,driveid,app,mime,vprv,prv,dur,lmt&amp;sig=AOq0QJ8wRgIhAJ1Fbocke_lg4vx86pkgojVc5U23pkqfXX0mmbdwcIk0AiEAuJYqgPXI0xNV5OgHO3HqQvW3OwhZS-O7yx4ApkhtAjM=&amp;cpn=8_9YkqgglMKjKv1i&amp;c=WEB_EMBEDDED_PLAYER&amp;cver=1.20220525.01.00&amp;redirect_counter=1&amp;cm2rm=sn-nv4e67d&amp;req_id=a91001736741a3ee&amp;cms_redirect=yes&amp;cmsv=e&amp;mh=In&amp;mm=34&amp;mn=sn-4g5e6nzl&amp;ms=ltu&amp;mt=1653914189&amp;mv=m&amp;mvi=1&amp;pl=21&amp;lsparams=mh,mm,mn,ms,mv,mvi,pl&amp;lsig=AG3C_xAwRQIhAJ3Xzib23vtJCMYOz7PalWS7G1P1J9CpUlfMiFVWezxYAiBmKIHeK79ASnNSjgJsneqr6CwGgmVw5KqokDnPK-T8Qw%3D%3D" type="video/mp4"></video>

  
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

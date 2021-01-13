server {
    #
    root /var/www/html/fxiv2/web;
    #
    index  index.php index.html index.htm;
    #
    server_name  fxinsites.com www.fxinsites.com;
    
    #    
    access_log  /var/www/html/fxiv2/nginx-access.log;
    error_log   /var/www/html/fxiv2/nginx-error.log;

    # Enable HSTS. This forces SSL on clients that respect it, most modern browsers. The includeSubDomains flag is optional.
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains";

    if ($http_host ~* "^www.fxinsites.com"){
        rewrite ^(.*)$ https://fxinsites.com$1 redirect;
    }
 
    rewrite ^/mo-hinh-nen-spinning-top$ https://news.fxinsites.com/mo-hinh-nen-spinning-top/ redirect;
    rewrite ^/usd-index-la-gi-tam-quan-trong-cua-usd-index$ https://news.fxinsites.com/usd-index-la-gi-tam-quan-trong-cua-usd-index/ redirect;
    rewrite ^/su-dung-chi-bao-ema-trong-giao-dich-forex$ https://news.fxinsites.com/cach-su-dung-cap-doi-duong-ema-trong-giao-dich-forex/ redirect;
    rewrite ^/ichimoku-cloud-cong-cu-lam-mua-lam-gio-tren-thi-truong$ https://news.fxinsites.com/ichimoku-cloud-cong-cu-lam-mua-lam-gio-tren-thi-truong/ redirect;
    rewrite ^/nhung-dieu-can-biet-ve-thi-truong-con-gau-va-thi-truong-con-bo-tot/$ https://news.fxinsites.com/pivot-point-la-gi-cach-giao-dich-hieu-qua-voi-pivot-point/ redirect;
    rewrite ^/pivot-point-la-gi-cach-giao-dich-hieu-qua-voi-pivot-point/$ https://news.fxinsites.com/pivot-point-la-gi-cach-giao-dich-hieu-qua-voi-pivot-point/ redirect;
    rewrite ^/mo-hinh-gia$ https://news.fxinsites.com/mo-hinh-coc-va-tay-cam-la-gi-nhung-dac-diem-va-han-che-ve-mo-hinh-coc-va-tay-cam/ redirect;
#rewrite ^/chi-bao-adx-cong-cu-xac-dinh-suc-manh-xu-huong		
    rewrite ^/tong-quan-ve-bieu-do-nen-nhat-candle-stick-chart-va-5-mo-hinh-nen-co-ban$ https://news.fxinsites.com/bieu-do-nen-nhat-la-gi-cac-mo-hinh-nen-co-ban/ redirect;
#rewrite ^/cach-su-dung-chi-bao-rsi-de-xac-dinh-diem-qua-mua-hoac-qua-ban		
#rewrite ^/giao-dich-breakout-va-nhung-dieu-can-biet		
#rewrite ^/anh-huong-cua-nonfarm-payrolls-doi-voi-thi-truong-ngoai-hoi		
    rewrite ^/mo-hinh-gia-harmonic/$ https://news.fxinsites.com/mo-hinh-gia-harmonic/ redirect;
#rewrite ^/mo-hinh-vai-dau-vai-va-ung-dung-trong-thi-truong-forex		
#rewrite ^/usd-index-la-gi-tam-quan-trong-cua-usd-index		
    rewrite ^/phan-ky-va-phan-ky-kin$ https://news.fxinsites.com/phan-ky-la-gi-cach-giao-dich-phan-ky-hieu-qua/ redirect;
#rewrite ^/su-dung-chi-bao-ema-trong-giao-dich-forex		
#rewrite ^/chi-bao-adx-cong-cu-xac-dinh-suc-manh-xu-huong		
#rewrite ^/tong-hop-cong-cu-do-luong-bien-dong-tren-thi-truong		
#rewrite ^/su-dung-chi-bao-ema-trong-giao-dich-forex		
#rewrite ^/chi-bao-adx-cong-cu-xac-dinh-suc-manh-xu-huong		
    rewrite ^/mo-hinh-vai-dau-vai-va-ung-dung-trong-thi-truong-forex$ https://news.fxinsites.com/mo-hinh-vai-dau-vai-va-cach-ng-dung-trong-thi-trng-forex/ redirect;
    rewrite ^/5-bieu-do-nen-dao-chieu-manh-trong-giao-dich-forex/$ https://news.fxinsites.com/5-bieu-do-nen-dao-chieu-manh-nhat-trong-giao-dich-forex/ redirect;
    rewrite ^/giao-dich-breakout-va-nhung-dieu-can-biet$ https://news.fxinsites.com/cac-dac-diem-can-chu-y-khi-giao-dich-breakout/ redirect;
#rewrite ^/nhung-li-thuyet-co-ban-ve-chi-bao-macd		
    rewrite ^/non-farm-payroll-ban-tin-quan-trong-bac-nhat-trong-forex$ https://news.fxinsites.com/nonfarm-payrolls-la-gi-anh-huong-cua-nfp-doi-voi-thi-truong-ngoai-hoi/ redirect;
#rewrite ^/bieu-do-nen-nhat-la-gi-cac-mo-hinh-nen-co-ban/		
    rewrite ^/mo-hinh-hai-dinh-hai-day$ https://news.fxinsites.com/mo-hinh-hai-dinh-hai-day/ redirect;
    rewrite ^/phan-ky-va-phan-ky-kin$ https://news.fxinsites.com/phan-ky-la-gi-cach-giao-dich-phan-ky-hieu-qua/ redirect;
    rewrite ^/su-dung-chi-bao-ema-trong-giao-dich-forex$ https://news.fxinsites.com/cach-su-dung-cap-doi-duong-ema-trong-giao-dich-forex/ redirect;
    rewrite ^/nhung-li-thuyet-co-ban-ve-chi-bao-macd$ https://news.fxinsites.com/chi-bao-macd-va-nhung-li-thuyet-co-ban/ redirect;
#rewrite ^/phan-tich-ky-thuat-la-gi-vai-tro-cua-phan-tich-ky-thuat-trong-forex		
    rewrite ^/cach-su-dung-chi-bao-rsi-de-xac-dinh-diem-qua-mua-hoac-qua-ban$ https://news.fxinsites.com/cach-su-dung-chi-bao-rsi-de-xac-dinh-diem-qua-mua-hoac-qua-ban-2/ redirect;

    rewrite ^/bao-cao-cot-la-gi-cach-su-dung-bao-cao-cot-hieu-qua$ https://news.fxinsites.com/bao-cao-cot-la-gi-cach-su-dung-bao-cao-cot-hieu-qua/ redirect;
    rewrite ^/chi-bao-nhanh-va-chi-bao-cham$ https://news.fxinsites.com/tim-hieu-chi-bao-nhanh-va-chi-bao-cham-tren-san-forex/ redirect;
    rewrite ^/tong-hop-cac-lop-hoc-forex-tu-ngay-03-0905$ https://fxinsites.com/ redirect;
    rewrite ^/tong-hop-tin-tuc-forex-tu-ngay-08-1406$ https://fxinsites.com/ redirect;

    location / {
        try_files $uri $uri/ /index.php?$args;
        proxy_set_header   X-Real-IP             $remote_addr;
        proxy_set_header   X-Forwarded-For       $proxy_add_x_forwarded_for;
        proxy_set_header   X-Forwarded-Proto https; 
       # proxy_set_header X-Forwarded-Host $host;
        proxy_set_header X-Forwarded-Proto $scheme;              
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass    unix:/var/run/php/php7.2-fpm.sock;
        fastcgi_param   SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
        client_max_body_size 100M;
    }

    # Media: images, icons, video, audio, HTC
    location ~* \.(?:jpg|jpeg|gif|png|ico|cur|gz|svg|svgz|mp4|ogg|ogv|webm|webp|htc|xml|svg+xml)$ {
        expires 7d;
        access_log off;
        add_header Cache-Control "public";
    }

    # CSS and Javascript
    location ~* \.(?:css|js)$ {
        expires 7d;
        access_log off;
        add_header Cache-Control "public";
    }

    listen [::]:443 ssl; # managed by Certbot
    listen 443 ssl; # managed by Certbot
    ssl_certificate /var/www/html/fxiv2/ssl/fullchain.pem; # managed by Certbot
    ssl_certificate_key /var/www/html/fxiv2/ssl/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot
}

# Redirect HTTP -> HTTPS
server {

    listen 80;
    server_name www.fxinsites.com fxinsites.com;

    if ($host = www.fxinsites.com){
        return 301 https://fxinsites.com$request_uri;
    }

    if ($host = fxinsites.com) {
        return 301 https://$host$request_uri;
    } # managed by Certbot    
    
    return 301 https://fxinsites.com$request_uri;
}

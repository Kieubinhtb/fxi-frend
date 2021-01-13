server {
    #
    root /var/www/html/fxiv2;
    #
    index  index.php index.html index.htm;
    #
    server_name  frontend.fxinsites.com;
    
    #    
    access_log  /var/www/html/fxiv2/nginx-access.log;
    error_log   /var/www/html/fxiv2/nginx-error.log;

    # Enable HSTS. This forces SSL on clients that respect it, most modern browsers. The includeSubDomains flag is optional.
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains";

    location / {
        try_files $uri $uri/ /web/index.php?$args;
        proxy_set_header   X-Real-IP             $remote_addr;
        proxy_set_header   X-Forwarded-For       $proxy_add_x_forwarded_for;
        proxy_set_header   X-Forwarded-Proto https;
       # proxy_set_header X-Forwarded-Host $host;
        proxy_set_header X-Forwarded-Proto $scheme;
              
    }

   location /php/.* {
       try_files $uri $uri/ /php/index.php?$args;
       #root /var/www/htmlfxiv2/php/;
       #expires max;
       #add_header Pragma public;
       #add_header Cache-Control "public, must-revalidate, proxy-revalidate";
   }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass    unix:/var/run/php/php7.2-fpm.sock;
        fastcgi_param   SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;

        client_max_body_size 100M;
    }

    # Media: images, icons, video, audio, HTC
    location ~* \.(?:jpg|jpeg|gif|png|ico|cur|gz|svg|svgz|mp4|ogg|ogv|webm|htc)$ {
        expires 7d;
        access_log off;
        add_header Cache-Control "public";
    }

    # CSS and Javascript
    location ~* \.(?:css|js)$ {
        expires 1M;
        access_log off;
        add_header Cache-Control "public";
    }

    
    listen [::]:443 ssl; # managed by Certbot
    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/frontend.fxinsites.com/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/frontend.fxinsites.com/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot


}
# Redirect HTTP -> HTTPS
server {
    if ($host = frontend.fxinsites.com) {
        return 301 https://$host$request_uri;
    } # managed by Certbot

    listen 80;
    server_name  frontend.fxinsites.com;
    return 404; # managed by Certbot

    gzip on;
    gzip_comp_level    5;
    gzip_min_length    256;
    gzip_proxied       any;
    gzip_vary          on;

    gzip_types
    application/atom+xml
    application/javascript
    application/json
    application/ld+json
    application/manifest+json
    application/rss+xml
    application/vnd.geo+json
    application/vnd.ms-fontobject
    application/x-font-ttf
    application/x-web-app-manifest+json
    application/xhtml+xml
    application/xml
    font/opentype
    image/bmp
    image/svg+xml
    image/x-icon
    text/cache-manifest
    text/css
    text/plain
    text/vcard
    text/vnd.rim.location.xloc
    text/vtt
    text/x-component
    text/x-cross-domain-policy;
    # text/html is always compressed by gzip module
}

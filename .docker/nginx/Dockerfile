FROM nginx:1.13.5-alpine

MAINTAINER Luis Alexandre Deschamps Brandão <techmago@ymail.com>

COPY nginx.conf /etc/nginx/nginx.conf
COPY vhost.conf /etc/nginx/conf.d/default.conf

RUN addgroup -g 82 www-data
RUN adduser -u 82 -D -H -G www-data -s /bin/false www-data

EXPOSE 80
EXPOSE 443

STOPSIGNAL SIGTERM

CMD ["nginx", "-g", "daemon off;"]

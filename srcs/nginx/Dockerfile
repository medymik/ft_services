FROM alpine:latest

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
RUN apk update
RUN apk add nginx
RUN apk add openssl
RUN apk add openssh
RUN apk add telegraf supervisor

# nginx
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/CN=localhost"
COPY srcs /tmp/
RUN mv /tmp/nginx.conf /etc/nginx/nginx.conf
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx


# SSH
RUN adduser -D user
RUN echo "user:password"|chpasswd
RUN ssh-keygen -A
RUN chmod +x /tmp/start.sh

RUN mv /tmp/index.html /www/index.html

# supervisor
ADD supervisord.conf /etc/supervisord.conf
COPY telegraf.conf /etc/telegraf.conf

EXPOSE 80 443 22

CMD [ "/usr/bin/supervisord" ]

# base image alpine:latest
FROM alpine

COPY setup.sh .
RUN ["/bin/sh", "setup.sh"]
COPY vsftpd.conf /etc/vsftpd.conf
COPY supervisord.conf /etc/supervisord.conf
COPY telegraf.conf /etc/telegraf.conf

CMD [ "/usr/bin/supervisord" ]
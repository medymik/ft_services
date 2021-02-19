FROM alpine

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
RUN apk add influxdb openrc supervisor telegraf
RUN openrc &> /dev/null
RUN touch /run/openrc/softlevel
COPY telegraf.conf /etc/telegraf.conf
COPY supervisord.conf /etc/supervisord.conf

EXPOSE 8086

CMD [ "/usr/bin/supervisord" ]

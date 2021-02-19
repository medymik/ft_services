FROM alpine

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
RUN apk update && apk add libc6-compat supervisor telegraf
RUN wget https://dl.grafana.com/oss/release/grafana-7.3.1.linux-amd64.tar.gz
RUN tar -zxvf grafana-7.3.1.linux-amd64.tar.gz
RUN mv grafana-7.3.1 grafana
COPY start.sh .
ADD grafana.db /grafana/data/grafana.db
COPY supervisord.conf /etc/supervisord.conf
COPY telegraf.conf /etc/telegraf.conf

CMD [ "/usr/bin/supervisord" ]

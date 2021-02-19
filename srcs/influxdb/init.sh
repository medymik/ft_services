service influxdb start
influx -execute 'create database influxdb'
/usr/bin/supervisord
if [ ! -f "/var/lib/mysql/ib_buffer_pool" ];
then
    /etc/init.d/mariadb setup &> /dev/null
    service mariadb restart &> null
    mysql --user=root < req.sql
    mysql --user=root wordpress < wordpress.sql
fi
sed -i 's/skip-networking/# skip-networking/g' /etc/my.cnf.d/mariadb-server.cnf
service mariadb restart
/usr/bin/supervisord

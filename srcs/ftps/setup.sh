# vsftpd : ftp server
# supervisor : process health check
# telegraf : collect metrics / found at the testing pkgs of alpine
# openssl : used to generate an ssl cert and key
echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
apk update && apk add vsftpd supervisor telegraf openssl

# generate ssl cert and key
mkdir -p /usr/share/ssl/certs
cd /usr/share/ssl/certs
openssl req -x509 -sha256 -nodes -days 365 -subj "/CN=FTP" -newkey rsa:2048 -keyout vsftpd.key -out vsftpd.pem

# add user
adduser -D admin
echo "admin:admin" | chpasswd
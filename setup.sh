#!/bin/bash

minikube delete
minikube start
# apply metallb
# namespace
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.4/manifests/namespace.yaml
# controller and speaker
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.4/manifests/metallb.yaml
# secret key
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
# layer 2 metallb config
kubectl apply -f srcs/metallb.yaml

eval $(minikube -p minikube docker-env)
docker build -t ftps srcs/ftps
kubectl apply -f srcs/ftps

docker build -t mysql srcs/mysql
kubectl apply -f srcs/mysql

docker build -t grafana srcs/grafana
kubectl apply -f srcs/grafana

docker build -t influxdb srcs/influxdb
kubectl apply -f srcs/influxdb

docker build -t phpmyadmin srcs/phpmyadmin
kubectl apply -f srcs/phpmyadmin

docker build -t wordpress srcs/wordpress
kubectl apply -f srcs/wordpress

docker build -t nginx srcs/nginx
kubectl apply -f srcs/nginx

minikube dashboard

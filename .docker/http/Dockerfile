FROM php:7.3.27-apache-stretch

ARG DEBIAN_FRONTEND=noninteractive

RUN a2enmod rewrite &&\
    apache2ctl configtest

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

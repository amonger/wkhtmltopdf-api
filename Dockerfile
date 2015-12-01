FROM ubuntu

RUN apt-get update -y
RUN apt-get install php5 wkhtmltopdf -y
RUN apt-get install xvfb -y
RUN a2enmod rewrite
COPY ./api/virtual-host.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D FOREGROUND"]

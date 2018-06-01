FROM php:7.2

RUN apt-get update && apt-get install -y supervisor libmcrypt-dev libxml2-dev mysql-client git libsodium-dev

# Install the PHP mcrypt extention
#RUN docker-php-ext-install

# Install the PHP pdo_mysql extention
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install sockets

#ARG INSTALL_XDEBUG=false
#RUN if [ ${INSTALL_XDEBUG} = true ]; then \
#    # Install the xdebug extension
#    pecl install xdebug && \
#    docker-php-ext-enable xdebug \
#;fi
RUN mkdir -p /var/log/supervisor
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

CMD env > /tmp/.MyApp.env

RUN apt-get -y install rsyslog cron
ADD cron/crontab /app/crontab
RUN crontab /app/crontab
ADD cron/bin/start-cron.sh /usr/bin/start-cron.sh
RUN chmod +x /usr/bin/start-cron.sh
RUN touch /var/log/cron.log

WORKDIR /var/www

CMD ["/usr/bin/supervisord"]

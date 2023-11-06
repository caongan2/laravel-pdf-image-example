FROM webdevops/php-nginx:8.2
COPY . /var/www/html
COPY ./docker/nginx.conf /etc/nginx/conf.d/
COPY ./docker/entry-point.sh /var/www/html/entry-point.sh
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
    git \
    zip \
    nano \
    wkhtmltopdf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN ["chmod", "+x", "entry-point.sh"]
# RUN /bin/sh -c /var/www/html/entry-point.sh
COPY ./docker/crontab /etc/cron.d/my-cron
RUN chmod 0644 /etc/cron.d/my-cron
RUN crontab /etc/cron.d/my-cron

EXPOSE 80

FROM php:7.1-fpm-alpine

MAINTAINER Luis Alexandre Deschamps Brandão <techmago@ymail.com>

# Install dependencies
RUN apk --no-cache --update add \
    icu-dev \
    autoconf \
    bash \
    build-base \
    curl \
    curl-dev \
    cyrus-sasl-dev \
    freetype-dev \
    git \
    libgsasl-dev \
    libjpeg-turbo-dev \
    libmcrypt-dev \
    libmemcached-dev \
    libpng-dev \
    libxml2-dev \
    postgresql-dev \
    sqlite-dev \
    wget \
    zlib-dev \
    freetype-dev && \
    rm -rf /tmp/* && \
    rm -rf /var/cache/apk/*

# Configure PHP extensions
RUN docker-php-ext-configure json && \
    docker-php-ext-configure session && \
    docker-php-ext-configure ctype && \
    docker-php-ext-configure tokenizer && \
    docker-php-ext-configure simplexml && \
    docker-php-ext-configure dom && \
    docker-php-ext-configure mbstring && \
    docker-php-ext-configure zip && \
    docker-php-ext-configure pdo && \
    docker-php-ext-configure pdo_mysql && \
    docker-php-ext-configure curl && \
    docker-php-ext-configure iconv && \
    docker-php-ext-configure xml && \
    docker-php-ext-configure phar && \
    docker-php-ext-configure intl && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

# Build and install PHP extensions
RUN docker-php-ext-install \
    bcmath \
    json \
    session \
    calendar \
    ctype \
    tokenizer \
    simplexml \
    dom \
    mbstring \
    mcrypt \
    zip \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    curl \
    iconv \
    xml \
    phar \
    pgsql \
    soap \
    gd \
    intl

# Install Imagick
RUN apk add --update --no-cache autoconf g++ imagemagick-dev libtool make pcre-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make pcre-dev

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#configure hosts
RUN echo "10.200.0.1    rest.local.cmd" >> /etc/hosts

#configure laravel CRONTAB
#RUN chmod 755 /etc/crontabs/root
#RUN echo "* * * * * php /var/www/app/artisan schedule:run" > /etc/crontabs/root
#RUN crond restart

# Configure php-fpm
# COPY www.conf /usr/local/etc/php-fpm.d/www.conf
# COPY zz-docker.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /var/www/app

# Open port 9000
EXPOSE 9000

# Execute command
CMD ["php-fpm"]

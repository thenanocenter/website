FROM node:8

RUN npm install webpack -g

WORKDIR /var/www

COPY ./docker/frontend.docker-entrypoint.sh /

RUN chmod +x /frontend.docker-entrypoint.sh

ENTRYPOINT ["/frontend.docker-entrypoint.sh"]

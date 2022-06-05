FROM nginx:latest
COPY nginx.conf /etc/nginx/nginx.conf
WORKDIR /usr/share/nginx/mitra-shop.loc
RUN apt-get update && apt-get install -y \
    && groupadd vboxsf -g 998 \
    && usermod -aG vboxsf www-data \
    && usermod -aG vboxsf nginx

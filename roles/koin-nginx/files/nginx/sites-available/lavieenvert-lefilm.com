server {
    include https_config;

    server_name www.lavieenvert-lefilm.com;
    return 301 $scheme://lavieenvert-lefilm.com$request_uri;
}

server {
    include https_config;
    server_name lavieenvert-lefilm.com;

    index index.html;
    root /home/seirl/www/lavieenvert-lefilm.com;
}

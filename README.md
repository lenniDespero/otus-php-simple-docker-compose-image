# Simple docker compose image with nginx and php7.3-fpm

####Usage

`$ git clone https://github.com/lenniDespero/otus-php-simple-docker-compose-image.git`


`$ cd otus-php-simple-docker-compose-image`


`$ docker-compose up`

Navigate to http://localhost:8080

Request:
>POST / HTTP/1.1
Content-Type: application/x-www-form-urlencoded 
Content-Length: 48
>
string=(()()()()))((((()()()))(()()()(((()))))))

Response
>HTTP/1.1 200 OK
Status: 200 All ok

or

>HTTP/1.1 400 Bad Request
Status: 400 Bad Request


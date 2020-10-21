FROM alpine:latest

RUN apk update
RUN apk add nodejs 
RUN apk add nodejs-npm
RUN node -v
WORKDIR /usr/src/app
RUN npm i react-router-dom
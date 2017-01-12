FROM php:alpine

COPY app /app
COPY vendor-build /app/vendor

ENV PATH /app/vendor/bin:${PATH}
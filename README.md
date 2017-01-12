---

> :a: Notice: This project is in **alpha** stage.

---

# eucliid

Euphemistic CLI for Yii 2.0 Framework (optionally built with Docker)

> "Training starts when I say so!" --Zlatan

## What is this?
 
This repository contains the configuration and build instructions to create a minimal standalone Yii 2.0 CLI application.

In addition to running it from source or bundling as a phar (experimental), it can also been run from a Docker image.
A 'docker-packaged' eucliid CLI application is about 60 MB in size, it is build on Alpine Linux (~4 MB), PHP 7 (~50 MB) and Yii 2.0 framework (~6 MB).
This image is intentionally built without composer and 'the-asset-plugin' on the image itself to ensure a minimal amount of PHP-code and dependencies.

You can build a custom CLI application from this image by using `FROM schmunk42/eucliid` or host-mount single commands and custom console configurations.


## Requirements

- docker

## Usage

via `docker`

    docker run schmunk42/eucliid yii

via `docker-compose` (see docs/examples)

    docker-compose run yii

## Configuration

*Experimental*

See files in examples.

## Building the image

Update `vendor-build` folder.

    docker-compose run composer update

Build image

    docker-compose build

## Credits

- `composer.json` taken from cebe/assetfree-yii2

## Resources

tbd

---



# Docker CI Examples
This repo shows you how to setup a CI pipeline using Docker and various CI providers.

*Providers:*
- [Travis CI](#travis-ci)
- [Circle CI])(#circle-ci)
- [Codeship](#codeship)

## Overview

The aim of this repo is to setup a CI pipeline to test and build a sample application (PHP) running on Docker (with Docker Compose) using various CI providers.

### Workflow


### Files
- `src/` This folder contains the source file for your app, PHP in this case.
- `tests/` Tests cases to run against your code.
- `.travis.yml` The [Travis CI](https://travis-ci.org/) config file. Here you tell Travis how to run test and build the application.
- `docker-compose.yml` The Docker Compose config file.
- `Dockerfile` This Dockerfile is used by the CI server to build an image for the app.

## Travis CI [![Build Status](https://travis-ci.org/diarmuidie/docker-ci-examples.svg?branch=master)](https://travis-ci.org/diarmuidie/docker-ci-examples)

Make sure you have setup the `DOCKER_USERNAME` and `DOCKER_PASSWORD` environment variables in Travis so that Travis can push the built images to Docker Hub:
![Travis ENV Config](https://cloud.githubusercontent.com/assets/707037/18232505/bdc084de-72c8-11e6-9759-3265dcc0a033.png)

#### The Config file

- **sudo** You need to run Travis with sudo enabled so you can install/update Docker Engine.
- **language** Change this to whatever language your app is written in.
- **services** Selecting Docker lets Travis pre-install the Docker Engine.
- **env** Define some ENV options to make the file easier to read/DRY.
- **before_install** Install test requirements.
- **script** This is where tests are run.
- **after_success** Build the production image, tag and push to [Docker Hub](https://hub.docker.com/r/diarmuidie/travis-docker-ci-example/).

## Circle CI

Coming soon...

## Codeship

Coming soon...

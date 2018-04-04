# workshop-php-skeleton
Skeleton of a dockerized php application ready to start working

# BUILD
## Create docker image
`docker build . -t workshop-php-skeleton`

`-t` flag tags the image built with a given name which will be used to create the container.

## RUN COMPOSER INSTALL
`docker run -ti --rm -u $UID:$UID -e COMPOSER_HOME=/application/.composer -v $(pwd):/application workshop-php-skeleton php composer.phar install`

- `-u` flag indicates under which user the command is going to be run with (docker runs as _root_ by default).
- `-e` flag allows to set environment variables.
- `-v` flag mounts a local directory within the container so any change in that directory is available in the container.

## RUN TESTS
`docker run -ti --rm -u $UID:$UID -e COMPOSER_HOME=/application/.composer -v $(pwd):/application workshop-php-skeleton php bin/phpunit -c phpunit.xml.dist`

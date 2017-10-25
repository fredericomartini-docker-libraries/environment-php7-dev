#!/bin/bash

#docker run --rm --user='non-root' --workdir=$(pwd) -v $(pwd):$(pwd) fredericomartini/php:7.0-dev php $@

docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.0-cli php $@

#!/bin/bash

docker run --rm --user='non-root' --workdir=$(pwd) -v $(pwd):$(pwd) fredericomartini/php:7.0-dev php $(pwd)/$@

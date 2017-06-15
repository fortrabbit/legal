#!/bin/bash

docker run -d --rm --name "fr-www" -p 127.0.0.1:30080:80 -v `pwd`:/srv/app uk-tests/fr-www
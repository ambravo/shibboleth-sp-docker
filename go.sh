#!/usr/bin/env bash

bash stop.sh

bash build.sh

bash run.sh

docker push ghcr.io/ambravo/shibboleth-sp:latest
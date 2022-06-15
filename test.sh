#!/usr/bin/env bash

docker run --rm --network host williamyeh/wrk -c 60 -t 60 -d 300 --timeout 30 http://localhost:8098 &

while true; do
  curl localhost:8098/reset.php
  sleep 1
done

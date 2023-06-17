#!/bin/env bash
rndmnum=$RANDOM
cd src
php -S localhost:$rndmnum > /dev/null 2>&1 &
if [ $? -eq 0 ]; then
  echo "[I]:sucess. copy the link below"
  sleep 0.5
  echo "localhost:"$rndmnum
  exit 0
else
  echo "[E]:could not start php environment"
fi

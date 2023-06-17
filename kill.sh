#!/bin/env bash
pkill php
if [ $? -eq 0 ]; then
  echo "[I]:SUCESS. closed local php environment"
  exit 0
else
  echo "[E]:could not close php server"
  exit 1

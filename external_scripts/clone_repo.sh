#!/usr/bin/env sh

rm -rf /var/www/storage/app/repos/lumen
git clone https://github.com/laravel/lumen.git /var/www/storage/app/repos/lumen 2>&1

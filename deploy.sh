#!/usr/local/bin/bash
export SHELL="/usr/local/bin/bash"
export PATH="/usr/local/bin:/usr/bin:/bin"

echo "Deploying master"
echo "[ $(date) ]"

echo "setting deployment notice"
\mv /home/mariussc/www/website/deploy_index.php /home/mariussc/www/website/index.php

echo "cloning new version"
git clone -q -b master git@github.com:martyschaer/website.git /home/mariussc/www/new_version

echo "copying files.."
\cp -R /home/mariussc/www/new_version/. /home/mariussc/www/website/

echo "cleaning up"
rm -rf /home/mariussc/www/new_version
rm -rf /home/mariussc/www/website/.git
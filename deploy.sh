#!/usr/local/bin/bash
export SHELL="/usr/local/bin/bash"
export PATH="/usr/local/bin:/usr/bin:/bin"

echo "Deploying master"
echo "[ $(date) ]"

mv /home/mariussc/www/website/deploy_index.html /home/mariussc/www/website/index.html
git clone -q -b master git@github.com:martyschaer/website.git /home/mariussc/www/new_version

cp -R /home/mariussc/www/new_version/. /home/mariussc/www/website/

rm -rf /home/mariussc/www/new_version
rm -rf /home/mariussc/www/website/.git
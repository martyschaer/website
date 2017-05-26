#!/usr/local/bin/bash
export SHELL="/usr/local/bin/bash"
export PATH="/usr/local/bin:/usr/bin:/bin"
rm -rf /home/mariussc/www/website
git clone -q -b master git@github.com:martyschaer/website.git /home/mariussc/www/website
rm -rf /home/mariussc/www/website/.git
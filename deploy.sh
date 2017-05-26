#!/bin/bash
rm -rf /home/mariussc/www/website.bak
cp -r /home/mariussc/www/website /home/mariussc/www/website.bak
git clone -b master git@github.com:martyschaer/website.git /home/mariussc/www/website.new
rm -rf /home/mariussc/www/website/
mv /home/mariussc/www/website.new/ /home/mariussc/www/website/
rm -rf /home/mariussc/www/website/.git
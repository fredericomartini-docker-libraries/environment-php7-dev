#!/bin/bash

#turn on containers
./start-environment start

#cp virtualhost
docker cp config/apache2/sites-enabled/suaradio.conf apache2-php:/etc/apache2/sites-enabled/

#replace php.ini
docker exec apache2-php sed -i "s,error_reporting =.*,error_reporting = E_ALL \& ~E_NOTICE,g" /etc/php/7.0/apache2/php.ini

#restart service
docker exec  apache2-php service apache2 reload


<?php
define('GPIO', '/sys/class/gpio');
define('GPIO4', GPIO.'/gpio4');
file_put_contents(GPIO.'/export', 4);
file_put_contents(GPIO4.'/direction','out');
echo "ON" . PHP_EOL;
file_put_contents(GPIO4.'/value', 1);
sleep(5);
echo "OFF" . PHP_EOL;
file_put_contents(GPIO4.'/value', 0);
file_put_contents(GPIO.'/unexport', 4);

<?php
exec('cd /usr/share/nginx/golovtsov/');
exec('git add *');
exec("git commit -m 'auto commit from server'");
exec('git push');

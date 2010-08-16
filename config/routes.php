<?php
# copy require_once block into APP/config/routes.php and put on top of other URL patterns
# require_once App::pluginPath('maintenance').'/config/routes.php';

if (Configure::load('maintenance.settings') && Configure::read('Server.maintenance'))
{
    Router::connect('/*', array('plugin' => 'maintenance', 'controller' => 'maintenance'));
}

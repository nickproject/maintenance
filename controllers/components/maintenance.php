<?php
class MaintenanceComponent extends Object {
    function initialize(&$controller) {
        $this->Controller = $controller;

        if (Configure::load('maintenance.settings') && Configure::read('Server.maintenance'))
        {
            $offline_url = array('plugin' => 'maintenance', 'controller' => 'maintenance');
            if ($this->Controller->here == Router::url($offline_url)) return;
            $this->Controller->redirect($offline_url);
        }
    }
}

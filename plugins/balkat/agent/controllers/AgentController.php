<?php namespace Balkat\Agent\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class AgentController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Balkat.Agent', 'agent');
    }
}

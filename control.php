<?php
require_once 'init.php';

switch ($action) {
    default :
        include_once $conf -> root_path.'/app/controllers/CalcControl.class.php';

        $control = new CalcControl();
        $control -> generateView();
    break;
    case 'calcCalculate' :
        include_once $conf -> root_path.'/app/controllers/CalcControl.class.php';
        
        $control = new CalcControl();
        $control -> calculate();
    break;
}
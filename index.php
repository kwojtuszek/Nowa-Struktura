<?php
require_once dirname(__FILE__).'/init.php';

include $conf -> root_path.'/control.php';

// Inny sposób:
//przekierowanie przeglądarki klienta (redirect)
//header("Location: ".$conf->root_path."/app/calc.php");
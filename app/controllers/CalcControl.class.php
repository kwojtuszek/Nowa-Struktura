<?php

require_once 'CalcVariables.class.php';
require_once 'CalcResult.class.php';

class CalcControl {

    private $variables;
    private $result;

    public function __construct() {
        $this -> variables = new CalcVariables();
        $this -> result = new CalcResult();
    }

    public function getVariables() {
        $this -> variables -> amount = getFromRequest('amount');
        $this -> variables -> percentage = getFromRequest('percentage');
        $this -> variables -> years = getFromRequest('years');
    }

    public function validate() {
        if (! (isset($this -> variables -> amount) && isset($this -> variables -> percentage) && isset($this -> variables -> years))) {
            return false;
        }

        getMessages() -> addInfo("Przekazano parametry.");

        if ($this -> variables -> amount == "") {
            getMessages() -> addError("Nie podano wysokości kredytu.");
        }
        if ($this -> variables -> percentage == "") {
            getMessages() -> addError("Nie podano oprocentowania.");
        }
        if ($this -> variables -> years == "") {
            getMessages() -> addError("Nie podano okresu kredytowania.");
        }

        if (! getMessages() -> isError()) {
            if (! is_numeric($this -> variables -> amount)) {
                getMessages() -> addError("Wysokość kredytu nie jest liczbą!");
            }
            if (! is_numeric($this -> variables -> percentage)) {
                getMessages() -> addError("Oprocentowanie nie jest liczbą!");
            }
            if (! is_numeric($this -> variables -> years)) {
                getMessages() -> addError("Okres kredytowania nie jest liczbą!");
            }  
        }

        return ! getMessages() -> isError();
    }

    public function calculate() {
        
        $this -> getVariables();

        if ($this -> validate()) {

            getMessages() -> addInfo("Podane parametry są poprawne. Wykonuję obliczenia.");
            $this -> variables -> amount = intval($this -> variables -> amount);
            $this -> variables -> percentage = intval($this -> variables -> percentage);
            $this -> variables -> years = intval($this -> variables -> years);

            $this -> result -> result = (($this -> variables -> percentage/100 * $this -> variables -> amount) + $this -> variables -> amount) / ($this -> variables -> years*12);

            $this -> result -> result = round($this -> result -> result, 2);
        }

        $this -> generateView();
    }

    public function generateView() {

        getSmarty() -> assign('page_title', 'Kalkulator Kredytowy: Nowa Struktura');

        getSmarty() -> assign('variables', $this -> variables);
        getSmarty() -> assign('result', $this -> result);

        getSmarty() -> display('credit_view.tpl');
    }
}
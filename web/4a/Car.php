<?php

Class Car {
    public $brand;
    public $gas_in_tank;
    public $legally_driveable;

    function drive() {
        echo 'Driving...';
    }

    function fill_up($amount) {
        $this->gas_in_tank += $amount;
        /*FIXME validate amount as number*/
    }

    function inspect($fatal_faults) {
        if ($fatal_faults > 0) {
            $this->legally_driveable = false;
        } else {
            $this->legally_driveable = true;
        }
    }
}
?>

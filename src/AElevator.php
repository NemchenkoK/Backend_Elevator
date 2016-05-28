<?php
abstract class AElevator {
    protected $limit;
    protected $maxFloor;
    protected $state;
    
    abstract public function getInfo();
    abstract public function checkedPeople();
    abstract public function loadingPeople($people);
    abstract public function unloadingPeople($people);
    abstract public function go($floor);
}


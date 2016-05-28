<?php
abstract class AElevator {
    protected $limit;
    protected $people;
    protected $maxFloor;
    protected $currFloor;
    
    abstract public function getInfo();
    abstract public function checkedPeople();
    abstract public function loadingPeople($people);
    abstract public function unloadingPeople($people);
    abstract public function go($floor);
}


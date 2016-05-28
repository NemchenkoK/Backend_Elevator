<?php
class Elevator extends AElevator {
    use TElevator;
    
    private $state;
    
    public function __construct($limit, $maxFloor) {
        $this->limit = $limit;
        $this->maxFloor = $maxFloor;
        $this->state = json_decode(file_get_contents(__DIR__ . '\\elevator_state.json'), TRUE);
    }
}
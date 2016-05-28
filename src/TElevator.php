<?php
trait TElevator {
    public function getInfo() {
        return 'The elevator is located on the ' . $this->state['currFloor'] . 'th floor and in elevator ' . $this->state['people'] . ' people.' . PHP_EOL ;
    }
    public function checkedPeople() {
        try {
            if($this->state['people'] > $this->limit) {
                throw new Exception('Limit elevator is exceeded!');
            }
            return $this;
        } catch (Exception $ex) {
            exit(PHP_EOL. $ex->getMessage() . PHP_EOL);
        }
    }
    public function loadingPeople($people) {
        $this->state['people'] = $people;
        file_put_contents(__DIR__ . '\\elevator_state.json', json_encode($this->state));
        return $this;
    }
    public function unloadingPeople($people) {
        try {
            if ($this->state['people'] < $people) {
                throw new Exception('Attempt to unload more people than they have in the elevator!');
            }
            $this->state['people'] -= $people;
            file_put_contents(__DIR__ . '\\elevator_state.json', json_encode($this->state));
            return $this;
        } catch (Exception $ex) {
            exit(PHP_EOL. $ex->getMessage(). PHP_EOL);
        }
    }
    public function go($floor) {
        $this->checkedPeople();
        try {
            if(($floor <= 0) || ($this->state['currFloor'] == $floor)) {
                throw new Exception('You try go on wrong floor!');
            }
            if($this->maxFloor < $floor) {
                throw new Exception('This floor not exists in the building!');
            }
        } catch (Exception $ex) {
            exit(PHP_EOL. $ex->getMessage() . PHP_EOL);
        }
        $this->state['currFloor'] = $floor;
        file_put_contents(__DIR__ . '\\elevator_state.json', json_encode($this->state));
    }
}


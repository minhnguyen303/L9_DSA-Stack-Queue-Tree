<?php
include_once 'Patient.php';

class EmergencyDepartment
{

    public $patients;

    public function __construct()
    {
        $this->patients = new SplDoublyLinkedList();
    }

    public function isEmpty()
    {
        return ($this->patients == null);
    }

    public function add($patient)
    {
        if (!$this->isEmpty()) {
            foreach ($this->patients as $key => $value) {
                if ($value->code < $patient->code) {
                    continue;
                }
                $this->patients->add($key, $patient);
                return;
            }
            $this->patients->push($patient);
        } else {
            $this->patients->push($patient);
        }
    }

    public function get()
    {
        return $this->patients->shift();
    }
}
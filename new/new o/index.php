<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

abstract class Manager {
    abstract public function showProject($project);
}

class Employee extends Manager{
    public function showProject($project = "Apple") {
        return "I am working on " . $project;
    }

    public function startProject($project) {
        return $this->showProject($project);
    }
}

$employee = new Employee();
echo $employee->showProject();
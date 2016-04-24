<?php

abstract class Teacher
{
    protected $_expirience;
    protected $_name;
    protected $_id;

    public function __construct($id, $name, $expirience) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_age = $age;
    }

    public function getId() {
        return $this->_id;
    }

    public function getAge() {
        return $this->_expirience;
    }

    public function getName() {
        return $this->_name;
    }

    public function live(Course $course) {
        if ($course->addTeacher($this)) {
            echo $this->getName() . ' is living now in ' .
                $course->getName();
        } else {
            echo $this->getName() . ' is not living in city ' .
                $course->getCity()->getName();
        }
    }
}
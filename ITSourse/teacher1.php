<?php

class Crew
{
    private $_name;
    private $_lastname;
    private $_course;   
}
class Teacher extends Crew
{
    public function __construct($name, $lastname)
    {
        $this->_name = $name;
        $this->_lastname = $lastname;
    }
    public function getName()
    {
        return $this->_name;  
    }

    public function getLastname()
    {
        return $this->_lastname;  
    }


}

$teachers = array(
    new Teacher("Денис","Мещеряков"),
    new Teacher("Светлана","Мещерякова"),
    new Teacher("Юлия","Черная"),
    new Teacher("Андрей","Дущенко"),
    new Teacher("Дмитрий","Тонких"),
    new Teacher("Никита","Корчевский"),
    new Teacher("Полина","Абакумова"),
    new Teacher("Вячеслав","Василенко"),
    new Teacher("Михаил","Чебаненко"),
    new Teacher("Олег","Кияшко"),
    new Teacher("Вячеслав","Карнаух"),
    new Teacher("Богдан","Соломыкин")
);

foreach ($teachers as $teacher) {
    echo $teacher->getName() . " " . $teacher->getLastname() . "<br>";
}
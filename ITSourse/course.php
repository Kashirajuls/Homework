<?php
class Courses
{
    private $_title;
    private $_term;
    private $_date;
    private $_level;    
}
class Course extends Courses
{
    public function __construct($title, $term, $date, $level)
    {
        $this->_title = $title;
        $this->_term = $term;
        $this->_date = $date;
        $this->_level = $level;
    }
    public function getTitle()
    {
        return $this->_title;  
    }

    public function getTerm()
    {
        return $this->_term;  
    }

    public function getDate()
    {
        return $this->_date;  
    }

    public function getLevel()
    {
        return $this->_level;  
    }
}

$Courses = array(
    new Course("Базовый курс HTML5, CSS3, Bootstrap 3",
    	       "24 занятия",
    	       "С 12.05.2016",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("Основы JavaScript",
    	       "24 занятия",
    	       "С 11.05.2016",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("HR практика для начинающих",
    	       "16 занятия",
    	       "С 12.05.2016",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("Тестирование QA + Web тестирование",
    	       "18 занятия",
    	       "С 24.05.2016",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("Курс основы PHP/MYSQL/AJAX",
    	       "24 занятия",
    	       "Набор закрыт",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("ВЕРСТКА ONLINE",
    	       "24 занятия",
    	       "Скоро начало...",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("Основы интернет-маркетинга",
    	       "18 занятия",
    	       "Набор закрыт",
    	       "Начальный уровень (базовые знания не обязательны)"),
    new Course("Основы JavaScript",
    	       "24 занятия",
    	       "С 11.05.2016",
    	       "Начальный уровень (базовые знания не обязательны)"),
    
);

foreach ($Courses as $Course) {
    echo '<b>'.$Course->getTitle().'</b>' . "<br>"
              . $Course->getTerm() . "<br>"
              . $Course->getDate() . "<br>"
              . $Course->getLevel() . "<br>";
}
?>
<?php

/**
 * Опишите как можно подробнее it-школу со всеми сущностями. К примеру, в школе есть такие сущности, как: студенты,
 * преподователи, администрация, занятия, домашние задания, контрольные etc. Создайте классы на все сущности и
 * методы для взаимодействия между этими сущностями. Желательно использовать: наследование, абстрактные классы,
 * интерфейсы, конструктор, деструктор.
 */
require_once 'teacher1.php';
require_once 'course.php';

abstract class ItSchool
{
function Execute()
{
	echo $teachers;
	echo $Courses;
}
}
?>
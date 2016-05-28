<?php
require __DIR__ . '/vendor/autoload.php';

$newElevator = new Elevator(4, 9);
echo $newElevator->getInfo();                                                   //Первый запуск лифта
$newElevator->loadingPeople(4)->checkedPeople()->go(9);                         //Лифт отвозит 4 человек на 9 этаж
echo $newElevator->getInfo();                                                   //Инфа по прибытию
$newElevator->unloadingPeople(4)->loadingPeople(4)->checkedPeople()->go(6);     //Выгрузили 4 человек, приняли 4 и поехали на 6-й этаж
echo $newElevator->getInfo();                                                   //Инфа
$newElevator->unloadingPeople(2)->go(1);                                        //Вышло 2 человека, остальные поехали на 1-й этаж
echo $newElevator->getInfo();                                                   //Инфа
$newElevator->unloadingPeople(2);                                               //На 1-м этаже все вышли, и лифт остался ожидать следущего вызова



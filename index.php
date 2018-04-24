<?php

/*
	1. Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании.

Инкапсуляция - объединение объектов обладающих общими свойствами, к которым можно применять общие методы.
*/

/*
	2. Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?

Плюсы:
- код более читабельный
- легче найти ошибку
- легче обеспечить безопасность данных

Минусы: Сложновато разобраться с статическими объектами
*/



// Машина
class Car
{
    public $mark;
    public $model;
    public $color;
}

$сarAudi = new Car();
$сarAudi->mark = 'Audi';
$сarAudi->model = 'R8';
$сarAudi->color = 'red';

$сarBMV = new Car();
$сarBMV->mark = 'BMV';
$сarBMV->model = 'X5';
$сarBMV->color = 'black';


// Телевизор
class TV
{
    public $mark;
    public $resolution;
    public $diagonal;
}

$tvLG = new TV();
$tvLG->mark = 'LG';
$tvLG->resolution = '4K';
$tvLG->diagonal = 'black';

$tvSony = new TV();
$tvSony->mark = 'Sony';
$tvSony->resolution = 'FULL HD';
$tvSony->diagonal = 'white';



// Шариковая ручка
class BallpointPen
{
    public $mark;
    public $collection;
    public $color;
}

$penParker = new BallpointPen();
$penParker->mark = 'Parker';
$penParker->collection = 'Jotter';
$penParker->color = 'blue';

$penPero = new BallpointPen();
$penPero->mark = 'Pero';
$penPero->collection = 'Caran';
$penPero->color = 'red';


// Утка
class Duck
{
    public $breed;
    public $dwelling;
}
$duckPekin = new Duck();
$duckPekin->breed = 'Пекинская утка';
$duckPekin->dwelling = 'Китай';

$duckRussia = new Duck();
$duckRussia->breed = 'Русская утка';
$duckRussia->dwelling = 'Россия';


// Товар
class Goods
{
    public $name;
    public $category;
    public $price;
}

$goodsApple = new Goods();
$goodsApple->name = 'iPhone';
$goodsApple->category = 'Телефон';
$goodsApple->price = 25000;

$goodsSamsyng = new Goods();
$goodsSamsyng->name = 'Samsung S8';
$goodsSamsyng->category = 'Телефон';
$goodsSamsyng->price = 24000;
?>
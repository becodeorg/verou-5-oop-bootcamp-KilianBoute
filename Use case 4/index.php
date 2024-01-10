<?php

declare(strict_types=1);

require_once "Student.php";

$group1 = [];
$group2 = [];

$namesGroup1 = [
    "Jon Snow",
    "Arya Stark",
    "Daenerys Targaryen",
    "Tyrion Lannister",
    "Brienne of Tarth",
    "Samwell Tarly",
    "Ser Davos Seaworth",
    "Jorah Mormont",
    "Grey Worm",
    "Ser Barristan Selmy"
];
$namesGroup2 = [
    "Cersei Lannister",
    "Joffrey Baratheon",
    "Ramsay Bolton",
    "Euron Greyjoy",
    "The Night King",
    "Petyr Baelish",
    "Gregor Clegane",
    "Walder Frey",
    "Roose Bolton",
    "Viserys Targaryen"
];

function fillGroup(&$group, $names)
{
    foreach ($names as $key => $name) {
        $group[] = new Student($name, rand(1, 20));
    }
}

fillGroup($group1, $namesGroup1);
fillGroup($group2, $namesGroup2);

echo "<pre>";
print_r($group1);
print_r($group2);
echo "</pre>";

function getAverage($group)
{
    $totalPoints = 0;
    foreach ($group as $key => $student) {
        $totalPoints += $student->getGrade();
    }
    return $totalPoints / count($group);
}

echo "Average group1: " . getAverage($group1) . "</br>";
echo "Average group2: " . getAverage($group2) . "</br>";

function moveStudent(&$group1, &$group2, $studentName)
{
    foreach ($group1 as $key => $student) {
        if ($student->getName() === $studentName) {
            unset($group1[$key]);
            $group2[] = $student;
            return;
        }
    }
    foreach ($group2 as $key => $student) {
        if ($student->getName() === $studentName) {
            unset($group2[$key]);
            $group1[] = $student;
            return;
        }
    }
    echo "Student not found.";
}

moveStudent($group1, $group2, "Daenerys Targaryen");

echo "<p>---Move student Daenerys Targaryen---</p>";
echo "<pre>";
print_r($group1);
print_r($group2);
echo "</pre>";

echo "<p>Average group1: " . getAverage($group1) . "</p>";
echo "<p>Average group2: " . getAverage($group2) . "</p>";

function swapLowTopStudents(&$group1, &$group2)
{
    $lowest = 20;
    $top = 0;
    $lowestStudent = null;
    $topStudent = null;

    foreach ($group1 as $key => $student) {
        if ($student->getGrade() > $top) {
            $topStudent = $student;
            $top = $student->getGrade();
        }
    }
    foreach ($group2 as $key => $student) {
        if ($student->getGrade() < $lowest) {
            $lowestStudent = $student;
            $lowest = $student->getGrade();
        }
    }

    moveStudent($group1, $group2, $topStudent->getName());
    moveStudent($group1, $group2, $lowestStudent->getName());
}

swapLowTopStudents($group1, $group2);

echo "<p>---Swap lowest and top student---</p>";
echo "<pre>";
print_r($group1);
print_r($group2);
echo "</pre>";

echo "<p>Average group1: " . getAverage($group1) . "</p>";
echo "<p>Average group2: " . getAverage($group2) . "</p>";

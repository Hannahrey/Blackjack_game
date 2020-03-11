<?php

$card_deck = [
    'Hearts' => [
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        'Jack' => 10,
        'Queen'=> 10,
        'King' => 10,
        'Ace'=> 11],
    'Clubs' => [
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        'Jack' => 10,
        'Queen'=> 10,
        'King'=> 10,
        'Ace'=> 11],
    'Spades' => [
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        'Jack' => 10,
        'Queen'=> 10,
        'King'=> 10,
        'Ace'=> 11],
    'Diamonds' => [
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        'Jack' => 10,
        'Queen'=> 10,
        'King'=> 10,
        'Ace'=> 11],
];

echo '<pre>';
var_dump($card_deck);
echo '</pre>';

return shuffle($card_deck);


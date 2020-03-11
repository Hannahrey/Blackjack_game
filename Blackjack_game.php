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



shuffle($card_deck);

foreach ($card_deck as $suit) {
    shuffle($suit);
};

$card = array_slice($suit, 0, 12);


echo '<pre>';
var_dump($card);
echo '</pre>';



//
//echo '<pre>';
//var_dump($card_deck);
//echo '</pre>';
//


//
//shuffle($suit);
//foreach ($suit as $card) {
//    echo $card;
//
//
//$get_card();
//



//
//shuffle($card_deck);
//echo '<pre>';
//var_dump($card_deck);
//echo '</pre>';
//
//
//$player1_score =
//
//
//if ($player1_score >= $player2_score && <= 21) {
//    echo 'Player 1 wins';
//} else if ($player2_score >= $player1_score && <= 21) {
//    echo 'Player 2 wins';
//} else if ($player1_score == $player2_score && <= 21) {
//    echo 'You draw';
//    }
//};


//echo '<pre>';
//var_dump($card_deck);
//echo '</pre>';
//
//return shuffle($card_deck);


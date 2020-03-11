<?php

$deck = [
    'Hearts' => [
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'Jack' => 10,
        'Queen'=> 10,
        'King' => 10,
        'Ace'=> 11],
    'Clubs' => [
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'Jack' => 10,
        'Queen'=> 10,
        'King'=> 10,
        'Ace'=> 11],
    'Spades' => [
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'Jack' => 10,
        'Queen'=> 10,
        'King'=> 10,
        'Ace'=> 11],
    'Diamonds' => [
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'Jack' => 10,
        'Queen'=> 10,
        'King'=> 10,
        'Ace'=> 11],
];
function draw_card($deck) {
    $random_suit = array_rand($deck);
    $random_card = array_rand($deck[$random_suit]);
    $selected_card = [
        'name' => $random_card . ' of ' . $random_suit,
        'score' => $deck[$random_suit][$random_card],
    ];
    unset($deck[$random_suit][$random_card]);
    return $selected_card;
};


$card_drawn = draw_card($deck);

$player1_score =




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


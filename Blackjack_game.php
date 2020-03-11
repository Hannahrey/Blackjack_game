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

//Calculating Player 1 score
function draw_card1($deck) {
    $random_suit = array_rand($deck);
    $random_card = array_rand($deck[$random_suit]);
    $selected_card1 = [
        'name' => $random_card . ' of ' . $random_suit,
        'score' => $deck[$random_suit][$random_card],
    ];
    unset($deck[$random_suit][$random_card]);
    return $selected_card1;
};

$selected_card1 = draw_card1($deck);
echo $selected_card1['score'] . '<br>';

function draw_card2($deck) {
    $random_suit = array_rand($deck);
    $random_card = array_rand($deck[$random_suit]);
    $selected_card2 = [
        'name' => $random_card . ' of ' . $random_suit,
        'score' => $deck[$random_suit][$random_card],
    ];
    unset($deck[$random_suit][$random_card]);
    return $selected_card2;
};

$selected_card2 = draw_card2($deck);
echo $selected_card2['score'] . '<br>';

//Player one total score
$player1_score = $selected_card1['score'] + $selected_card2['score'];
echo 'Total score for Player 1: ' .  $player1_score . '<br>';


//Calculating Player 2 score
function draw_card3($deck) {
    $random_suit = array_rand($deck);
    $random_card = array_rand($deck[$random_suit]);
    $selected_card3 = [
        'name' => $random_card . ' of ' . $random_suit,
        'score' => $deck[$random_suit][$random_card],
    ];
    unset($deck[$random_suit][$random_card]);
    return $selected_card3;
};

$selected_card3 = draw_card3($deck);
echo $selected_card3['score'] . '<br>';

function draw_card4($deck) {
    $random_suit = array_rand($deck);
    $random_card = array_rand($deck[$random_suit]);
    $selected_card4 = [
        'name' => $random_card . ' of ' . $random_suit,
        'score' => $deck[$random_suit][$random_card],
    ];
    unset($deck[$random_suit][$random_card]);
    return $selected_card4;
};

$selected_card4 = draw_card4($deck);
echo $selected_card4['score'] . '<br>';

$player2_score = $selected_card3['score'] + $selected_card4['score'];
echo 'Total score for Player 2: ' .  $player2_score . '<br>';


if ($player1_score > $player2_score && $player1_score < 22) {
    echo '<br>' . '<h1>'. 'Player 1 wins' .'</h1>';
} else if ($player2_score > $player1_score && $player2_score < 22) {
    echo '<br>' . '<h1>'. 'Player 2 wins' .'</h1>';
} else if ($player1_score == $player2_score) {
    echo '<br>' . '<h1>'. 'You draw!' .'</h1>';
}



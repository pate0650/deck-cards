<?php


/**
 * PART 1 FOR EACH CARD
 * Create a deck of card
 * create two arrays for numbers and suits
 * loop for suits (i.g = heart,ace...)
 *  in that another loop for ranks.....
 *    output loop for html (class) cards
 */



// array for suits
 $suits = ['clubs','diamonds','hearts','spades'];
 

 // array for ranks 
 $ranks = [2,3,4,5,6,7,8,9,10,'J','Q','K','A'];
 

 /** PART 2 RANDON CARDS
  *  Us array form part 1
  *loop 52 cards randomly (No nested loop needed)
  * Use given function "rand() to loop 1 to length of Suit (length of array) ("Use Count Function")
  *loop 52 cards randomly (No nested loop needed)
  * Use given function "rand() to loop 1 to length of rank (length of array) ("Use Count Function")

  */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>
<body>
  <div id="deck" class="deck">
  <!__ PHP EXTENTION GOES HERE __>
  <?php 
    //using foreach loop for suits and in that for ranks
      foreach ( $suits as $suit) { ?>
        <?php foreach ($ranks as $rank){ ?>
       
    <div class="card">
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
      <div class="suit"><img src="images/<?php echo $suit; ?>.png"></div>
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
    </div>
        <?php } /* CLOSE RANKS*/?>
    <?php } /* CLOSE SUITS*/?>
  </div>

  <div id="deck" class="deck">
  
  <!__PHP AGAIN FOR PART TWO __>
    <?php
    // use for loop to create cards 
          for ($i = 0; $i < 52 ; $i++) : ?>
          <?php 
            $suit = $suits[rand(0, count($suits)-1)];
            $rank = $ranks[rand(0,count($ranks)-1)];
          ?>
    <div class="card">
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
      <div class="suit"><img src="images/<?php echo $suit; ?>.png"></div>
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
    </div>
     <?php endfor; ?>
  </div>
</body>
</html>
<?php
/*
	QUESTS
*/
//NOW SET IN THE QUESTS TABLE IN THE MYSQL DATABASE
/*
	REWARDS
*/
//SMALL CHEST
$chest1minOrbs = 5;
$chest1maxOrbs = 25;
$chest1minDiamonds = 1;
$chest1maxDiamonds = 5;
$chest1minShards = 0;
$chest1maxShards = 0;
$chest1minKeys = 0;
$chest1maxKeys = 0;
//BIG CHEST
$chest2minOrbs = 3726;
$chest2maxOrbs = 6471;
$chest2minDiamonds = 76;
$chest2maxDiamonds = 239;
$chest2minShards = 1;
$chest2maxShards = 5; // THIS VARIABLE IS NAMED IMPROPERLY, A MORE ACCURATE NAME WOULD BE $chest2minItemID AND $chest2maxItemID, BUT I DON'T WANT TO RENAME THIS FOR COMPATIBILITY REASONS... IF YOU'RE GETTING A BLANK CUBE IN YOUR DAILY CHESTS, YOU SET THIS TOO HIGH
$chest2minKeys = 1;
$chest2maxKeys = 5;
//REWARD TIMES (in seconds)
$chest1wait = 3;
$chest2wait = 86400;
?>

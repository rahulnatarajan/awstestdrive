<?php

/********************************************
 EXCERPT CONTROLL FUNCTION
*********************************************/
function irex_lite_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/******* theme check fix ***********/
if ( ! isset( $content_width ) ){
    $content_width = 900;
}





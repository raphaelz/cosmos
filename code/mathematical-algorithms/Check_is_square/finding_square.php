<?php

/* Part of Cosmos by OpenGenus Foundation */

/* Example Usage:
    if(isSquare(17)) {
        echo "Number is square";
    } else {
        echo "Number is not a square";
    }
*/

function isSquare($num) {
	return (sqrt($num) === floor(sqrt($num))) ? true : false;
}
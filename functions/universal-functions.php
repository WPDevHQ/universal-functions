<?php

function universal_revisions-limit( $num ) { 
	$num = 3;
	return $num;
}
add_filter( 'wp_revisions_to_keep', 'universal_revisions-limit', 10, 2 );
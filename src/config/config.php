<?php

return array(
	
	// value of are passed through this before save of tags
	'normalizer' => '\Cocur\Slugify\Slugify::slugify',
	
	// display value of tags are passed through (for front end display)
	'displayer' => '\Str::title',
	
	// database connection for Conner\Taggable\Tag model to use
// 	'connection' => 'mysql',
	
);

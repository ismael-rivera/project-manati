<?php

function is_active($page){
		if($_SERVER['REQUEST_URI'] === $page){
			echo('class="active"');
		};	
	} 

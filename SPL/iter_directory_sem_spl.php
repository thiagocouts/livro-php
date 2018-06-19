<?php

$dir = opendir('\Users\USER\LivroPHP\SPL');

while($arquivo = readdir($dir)){

	print $arquivo."<br>";
}

closedir($dir);
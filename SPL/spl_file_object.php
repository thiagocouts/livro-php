<?php

$file = new SplFileObject('spl_file_object.php');

print 'Nome: '.$file->getFileName().'<br>';
print 'Extensao: '.$file->getExtension().'<br>';

$file2 = new SplFileObject("novo.txt", "w");
$bytes = $file2->fwrite('Ola mundo PHP'. PHP_EOL);

print 'Bytes escritos: '.$bytes;
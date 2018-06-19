<?php

$file = new SplFileInfo('spl_file_info.php');

print 'Nome: '.$file->getFileName().'<br>';
print 'Extensao: '.$file->getExtension().'<br>';
print 'Tamanho: '.$file->getSize().'<br>';
print 'Caminho: '.$file->getRealPath().'<br>';
print 'Tipo: '.$file->getType().'<br>';
print 'Gravacao: '.$file->isWritable().'<br>';
<?php

//declaracao
namespace Application;

class Form {}

namespace Components;

class Form {}

//utilizacao
var_dump(new Form); //Ex1: object(Components\Form)
var_dump(new \Components\Form); //Ex2: object(Components\Form)
var_dump(new \Application\Form); //Ex3: object(Application\Form)
var_dump(new \SplFileInfo('/etc/shaddow')); //Ex4: object(SplFileInfo)
var_dump(new SplFileInfo('/etc/shaddow')); //Ex4: Fatal error
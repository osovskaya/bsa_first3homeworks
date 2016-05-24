<?php

namespace Marvel\Atlantida;

class NamorSubMariner 
{ 
    public static function whoami() 
	{
		$className = explode('\\', __CLASS__);
		return sprintf('I am %s from %s', array_pop($className), array_pop($className));
	}
}

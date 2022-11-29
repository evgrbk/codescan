<?php
namespace Rbkevg\Codescan;

class Foo {
    public $a = "foobarstring";
    public $b;
    public $c = ['some', 'values'];
	
	public function func(){
		echo 'sdfsdf '.__CLASS__;
		/*for ($i=0; $i<1000; $i++) {
			$m = memory_get_usage();
			${'var'.$i} = new self;
			echo memory_get_usage() - $m"\n";
		}*/
	}
	
}

//$a = new Foo();
//$a->func();
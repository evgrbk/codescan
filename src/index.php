<?php
namespace Rbkevg\Codescan;


require __DIR__.'/vendor/autoload.php';

class Foo {
    public $a = "foobarstring";
    public $b;
    public $c = ['some', 'values'];
	
	public func(){
		for ($i=0; $i<1000; $i++) {
			$m = memory_get_usage();
			${'var'.$i} = new self;
			echo memory_get_usage() - $m"\n";
		}
	}
	
}


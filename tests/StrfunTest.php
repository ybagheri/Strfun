<?php

use Ybagheri\Strfun;
 
class StrfunTest extends PHPUnit_Framework_TestCase {

    public function testStrfunGetStringBetween()
    {
        $strfun = new Strfun;
        $fullstring = 'this is my [tag]dog[/tag]';

        $beforeTag = 'this is my ';
        $afterTag = 'dog[/tag]';
        $betweenTag = 'dog';

        $startTag='[tag]';
        $endTag='[/tag]';

        $this->assertEquals($strfun->getStringBetween($fullstring, $startTag, $endTag), $betweenTag);
        $this->assertEquals($strfun->getStringBefore($fullstring, $startTag), $beforeTag);
        $this->assertEquals($strfun->getStringAfter($fullstring, $startTag), $afterTag);

    }
 
}


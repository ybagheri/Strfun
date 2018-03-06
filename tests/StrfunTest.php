<?php

use Ybagheri\Strfun;

class StrfunTest extends PHPUnit_Framework_TestCase
{

    public function testStrfunGetStringBetween()
    {

        $fullstring = 'this is my [tag]dog[/tag]';

        $beforeTag = 'this is my ';
        $afterTag = 'dog[/tag]';
        $betweenTag = 'dog';

        $startTag = '[tag]';
        $endTag = '[/tag]';

        $this->assertEquals(Strfun::getStringBetween($fullstring, $startTag, $endTag), $betweenTag);
        $this->assertEquals(Strfun::getStringBefore($fullstring, $startTag), $beforeTag);
        $this->assertEquals(Strfun::getStringAfter($fullstring, $startTag), $afterTag);

    }

    public function testStrfunFaToEnNumber()
    {
        $faText = '۰۱۲۳۴۵۶۷۸۹';
        $enText = '0123456789';
        $mixedText =  '۰۱۲۳456۷۸۹';

        $this->assertEquals(Strfun::faToEnNumber($faText), $enText);

        $this->assertEquals(Strfun::EnTofaNumber($enText), $faText);
      
       $this->assertEquals(Strfun::faToEnNumber($mixedText), $enText);

        $this->assertEquals(Strfun::EnTofaNumber($mixedText), $faText);


    }

}


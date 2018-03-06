<?php

namespace Ybagheri;

class Strfun
{

    static function getStringBetween($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    static function getStringBefore($string, $start)
    {
        if ($start == '') return '';
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        return substr($string, 0, $ini);
    }

    static function getStringAfter($string, $start)
    {
        if ($start == '') return '';
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        return substr($string, $ini, strlen($string) - strlen($start) - 1);
    }


    /**
     * Convert a string into an array of decimal Unicode code points.
     *
     * @param $string [string] The string to convert to codepoints
     * @param $encoding [string] The encoding of $string
     *
     * @return [array] Array of decimal codepoints for every character of $string
     */
    static function toCodePoint($string, $encoding)
    {
        $utf32 = mb_convert_encoding($string, 'UTF-32', $encoding);
        $length = mb_strlen($utf32, 'UTF-32');
        $result = [];
        for ($i = 0; $i < $length; ++$i) {
            $result[] = hexdec(bin2hex(mb_substr($utf32, $i, 1, 'UTF-32')));
        }
        return $result;

    }

    static function EnTofaNumber($enLiteral)
    {
        $EnTofa = [0 => 1776, 1 => 1777, 2 => 1778, 3 => 1779, 4 => 1780, 5 => 1781, 6 => 1782, 7 => 1783, 8 => 1784, 9 => 1785,];

        $faNum = [1776 => "\xdb\xb0", 1777 => "\xdb\xb1", 1778 => "\xdb\xb2", 1779 => "\xdb\xb3", 1780 => "\xdb\xb4", 1781 => "\xdb\xb5", 1782 => "\xdb\xb6", 1783 => "\xdb\xb7", 1784 => "\xdb\xb8", 1785 => "\xdb\xb9",];
        $enNumbers = self::faToEnNumber($enLiteral);
        $return = [];
        foreach (str_split($enNumbers) as $item) {

            if (isset($EnTofa[$item])) {
                $return[] = $faNum[$EnTofa[$item]];
            }


        }

        return implode("", $return);
    }

    static function faToEnNumber($faLiteral)
    {
        $faToEn1 = [1632 => 0, 1633 => 1, 1634 => 2, 1635 => 3, 1636 => 4, 1637 => 5, 1638 => 6, 1639 => 7, 1640 => 8, 1641 => 9,];
        $faToEn2 = [1776 => 0, 1777 => 1, 1778 => 2, 1779 => 3, 1780 => 4, 1781 => 5, 1782 => 6, 1783 => 7, 1784 => 8, 1785 => 9,];
        $enNum = [48 => 0, 49 => 1, 50 => 2, 51 => 3, 52 => 4, 53 => 5, 54 => 6, 55 => 7, 56 => 8, 57 => 9,];
        $k = self::toCodePoint($faLiteral, 'UTF-8');
        $return = [];

        foreach ($k as $item) {

            if (isset($faToEn1[$item])) {

                $return[] = $faToEn1[$item];
            }
            if (isset($faToEn2[$item])) {

                $return[] = $faToEn2[$item];
            }
            if (isset($enNum[$item])) {

                $return[] = $enNum[$item];
            }
        }

        return implode("", $return);
    }


}
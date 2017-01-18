# Strfun
This is a handy little function to strip out a string between two specified pieces of text. This could be used to parse XML text, bbCode, or any other delimited code/text for that matter. based on justin-cook method.
use like this:
```php
require "vendor/autoload.php";
use Ybagheri\Strfun;
$strfun = new Strfun;
$fullstring = 'this is my [tag]dog[/tag]';

$beforeTag = 'this is my ';
$afterTag = 'dog[/tag]';
$betweenTag = 'dog';

$startTag='[tag]';
$endTag='[/tag]';

echo $strfun->getStringBetween($fullstring, $startTag, $endTag).'</br>'; //dog
echo $strfun->getStringBefore($fullstring, $startTag, $endTag).'</br>'; //this is my
echo $strfun->getStringAfter($fullstring, $startTag, $endTag).'</br>'; //dog[/tag]
```

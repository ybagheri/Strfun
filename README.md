# Strfun
This is a handy little function to strip out a string between two specified pieces of text. This could be used to parse XML text, bbCode, or any other delimited code/text for that matter. based on justin-cook method.
## Usage

### Install Through Composer
```
composer require ybagheri/strfun dev-master
```

## Examples
```php
require "vendor/autoload.php";
use Ybagheri\Strfun;

$fullstring = 'this is my [tag]dog[/tag]';

$beforeTag = 'this is my ';
$afterTag = 'dog[/tag]';
$betweenTag = 'dog';

$startTag='[tag]';
$endTag='[/tag]';

echo Strfun::getStringBetween($fullstring, $startTag, $endTag).'</br>'; //dog
echo Strfun::getStringBefore($fullstring, $startTag, $endTag).'</br>'; //this is my
echo Strfun::getStringAfter($fullstring, $startTag, $endTag).'</br>'; //dog[/tag]
//----------------------------------

$mixedText =  '۰۱۲۳456۷۸۹';
echo Strfun::faToEnNumber($mixedText); //'0123456789'
echo PHP_EOL;
echo Strfun::EnTofaNumber($mixedText); //'۰۱۲۳۴۵۶۷۸۹'



```

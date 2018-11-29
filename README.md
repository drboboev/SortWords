### SORTING WORDS

Requirements:
* PHP 7.1 or higher

Installation:

```
composer require drboboev/sortwords
```

Usage:

Add class to your code:

```php
use Drboboev\SortWords\SortWords;
```

Create object:

```php
$sortWords = new SortWords();
```

Run function sort() with $str as argument:

```php
$string = $sortWords->sort($str);
```

sort() function returns string with sorted words.

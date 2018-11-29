### SORTING WORDS

Requirements:
* PHP 5.3.0 or higher

Installation:

```
composer require drboboev/SortWords
```

Usage:

Add class to your code:

```php
use drboboev\SortWords\SortWords;
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

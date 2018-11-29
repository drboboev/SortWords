<?php

require "./vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use drboboev\SortWords\SortWords;

class SortWordsTest extends TestCase
{
    public function testSort()
    {
        $sortWords = new SortWords();

        $testArray = [
            [
                "string" => "lemon orange banana apple",
                "result" => "elmno aegnor aaabnn aelpp"
            ],
            [
                "string" => "лимон апельсин банан яблоко",
                "result" => "илмно аеилнпсь аабнн бклооя"
            ],
            [
                "string" => "αβγαβγ αβγαβγαβγ",
                "result" => "ααββγγ αααβββγγγ"
            ],
        ];

        foreach($testArray as $test) {
            $this->assertEquals($test['result'], $sortWords->sort($test['string']));
        }
    }
}

<?php

namespace drboboev\SortWords;

class SortWords
{
    public function sort(string $string): string
    {
        $words = mb_split("\s", $string);

        $result_words = array();

        foreach ($words as $word) {

            $word = mb_strtolower($word);

            $letters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);

            sort($letters);
            $word = implode($letters, "");

            $result_words[] = $word;
        }

        $result_string = implode($result_words, " ");

        return $result_string;
    }
}

<?php

/*
In this example, we define a transliterate function that takes a Farsi text as input and uses a mapping array to replace Farsi characters with their corresponding Latin characters. The function uses the str_replace function to perform the replacements.
*/

function transliterate($text)
{
    $map = array(
        'آ' => 'a',
        'ا' => 'a',
        'ب' => 'b',
        'پ' => 'p',
        'ت' => 't',
        'ث' => 's',
        'ج' => 'j',
        'چ' => 'ch',
        'ح' => 'h',
        'خ' => 'kh',
        'د' => 'd',
        'ذ' => 'z',
        'ر' => 'r',
        'ز' => 'z',
        'ژ' => 'zh',
        'س' => 's',
        'ش' => 'sh',
        'ص' => 's',
        'ض' => 'z',
        'ط' => 't',
        'ظ' => 'z',
        'ع' => 'a',
        'غ' => 'gh',
        'ف' => 'f',
        'ق' => 'q',
        'ک' => 'k',
        'گ' => 'g',
        'ل' => 'l',
        'م' => 'm',
        'ن' => 'n',
        'و' => 'v',
        'ه' => 'h',
        'ی' => 'i',
        'ي' => 'i',
    );

    $transliterated = str_replace(array_keys($map), array_values($map), $text);

    return $transliterated;
}

// Example usage:
$farsiText = 'سلام دنیا!';
$latinText = transliterate($farsiText);
echo $latinText; // Output: salam dunia!

?>

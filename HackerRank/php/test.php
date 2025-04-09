<!-- given an array of words and an array of sentences. 
calculate how many sentence can be created  by replacing any 
word which one of it;s anagram, in PHP  -->

<?php
function countSentences($wordSet, $sentences) {
    $wordMap = [];
    foreach ($wordSet as $word) {
        $sortedWord = str_split($word);
        sort($sortedWord);
        $sortedWord = implode('', $sortedWord);
        if (!isset($wordMap[$sortedWord])) {
            $wordMap[$sortedWord] = [];
        }
        $wordMap[$sortedWord][] = $word;
    }
    $result = 0;
    foreach ($sentences as $sentence) {
        $sentenceWords = explode(' ', $sentence);
        $sentenceMap = [];
        foreach ($sentenceWords as $word) {
            $sortedWord = str_split($word);
            sort($sortedWord);
            $sortedWord = implode('', $sortedWord);
            if (isset($wordMap[$sortedWord])) {
                $sentenceMap[$word] = $wordMap[$sortedWord];
            }
        }
        $result += countPossibleSentences($sentenceMap);
    }
    return $result;
}

function countPossibleSentences($sentenceMap) {
    $count = 1;
    foreach ($sentenceMap as $words) {
        $count *= count($words);
    }
    return $count;
}

?>

<?php

$msg1 = "0@sn9sirppa@#?ia'jgtvryko1";
$msg2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$msg3 = "aopi?sgnirts@#?sedhtg+p9l!";

// Function count character and divise
function countMsg(string $numberCharacter) : string {
    $numberChain = strlen($numberCharacter) / 2;
    $underChain = substr("$numberCharacter", 5, $numberChain);
    $underChainReplace = str_replace('@#?',' ',$underChain);
    $FinalChain = strrev("$underChainReplace");
    return $FinalChain;

}



echo countMsg($msg1) . "\n";
echo countMsg($msg2) . "\n";
echo countMsg($msg3);
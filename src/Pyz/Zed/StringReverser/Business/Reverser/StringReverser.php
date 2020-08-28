<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;

use Generated\Shared\Transfer\StringReverserTransfer;
use Pyz\Zed\StringReverser\Business\Reverser\StringReverserInterface;

class StringReverser implements StringReverserInterface
{
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer
    {
        $reversedString = strrev($stringReverserTransfer->getOriginalString());
        $stringReverserTransfer->setReversedString($reversedString);

        return $stringReverserTransfer;
    }
}

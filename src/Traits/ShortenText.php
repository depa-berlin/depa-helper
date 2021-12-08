<?php

namespace Depa\Helper\Traits;

trait ShortenText
{
    /**
     * @param string|null $string
     * @param int $text
     * @return string
     */
    private function shortenText(?string $text, int $length): string
    {
        $string = strip_tags($text);
        if (strlen($string) > $length) {
            $stringCut = substr($string, 0, $length);
            $endPoint = strrpos($stringCut, ' ');
            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        }
        return $string;
    }
}
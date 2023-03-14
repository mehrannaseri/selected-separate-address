<?php


class Separator
{
    /**
     * @param $address
     * @return string
     */
    public function separate($address):string{

        $aMatch         = array();
        $pattern        = '#([a-zA-ZäöüÄÖÜß+(-{1})?(.)]+\s)+#';
        $matchResult    = preg_match($pattern, $address, $aMatch);

        return (isset($aMatch[0])) ? trim($aMatch[0], ' ') : '';
    }

}
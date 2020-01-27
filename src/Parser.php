<?php

namespace Validator;

class Parser
{
    /**
     * Determine if the string has char 
     */
    public function has($haystack, string $needles) : bool
    {
        foreach ((array) $needles as $needle) {
            if ($needle !== '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

    /** */
    public function getArguments(string $data) : array
    {
        $toArray = explode('|',$data);
        $toArray = $this->cleanArguments($toArray);
        return $toArray;
    }

    /** */
    public function cleanArguments(array $arguments) : array
    {
        array_shift($arguments);
        return $arguments; 
    }

    /** */
    public function getRule(string $rule) : string
    {
        $toArray = explode('|',$rule);
        return $toArray[0];
    }

}
<?php

namespace Validator;

class Parser
{
    /**
     * Determine if the string has char.
     *  
     * @param string $haystack
     * @param string $needle
     * 
     * @return bool
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

    /**
     * Getting argument from string.
     * 
     * @param string $data
     * 
     * @return array
     */
    public function getArguments(string $data) : array
    {
        $toArray = explode('|',$data);
        $toArray = $this->cleanArguments($toArray);
        return $toArray;
    }

    /**
     * Removing the class name from argument.
     * 
     * @param array $arguments
     * 
     * @return array
     */
    public function cleanArguments(array $arguments) : array
    {
        array_shift($arguments);
        return $arguments; 
    }

    /**
     * Get the class/rule name.
     * 
     * @param string $rule.
     * 
     * @return string
     */
    public function getRule(string $rule) : string
    {
        $toArray = explode('|',$rule);
        return $toArray[0];
    }


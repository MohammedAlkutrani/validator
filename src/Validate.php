<?php

namespace Validator;

class Validate
{
    /**
     * @var array $data
     */
    private $data;

    /**
     * @var array $rules
     */
    private $rules;

    /**
     * @var array $messages
     */
    protected $messages = [];

    public function make(array $data, array $rules)
    {
        return $this->validate($data, $rules);
    }
    
    /**
     * take the data and the rules iltrate
     * @param array $data.
     * @param array $rules.
     * @return void
     */
    public function validate(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;
        
        foreach ($rules as $faild => $faildRules) {
            if (!array_key_exists($faild, $data)) {
                $this->data[$faild] = '';
            }
            $this->ruleFitcher($faildRules, $faild);
        }

        return $this;
    }

    public function isPassed()
    {
        if ($this->messages) {
            return false;
        }
        return true;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    /** */
    private function ruleFitcher(array $rules, $attribute)
    {
        foreach ($rules as $rule) {
            $this->ruleChecker(new $rule, $attribute, $this->data[$attribute]);
        }
    }

    /** */
    private function ruleChecker(RuleInterface $rule, $attribute, $value)
    {
        if (!$rule->isValid($value)) {
            $this->messages[$attribute][]= $rule->getMessage($attribute);
        }
    }
}

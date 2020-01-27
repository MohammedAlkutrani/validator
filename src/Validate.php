<?php

namespace Validator;

class Validate
{
    
    /**
     * @var array
     */
    private $data = [];

    /**
     * @var array
     */
    private $rules = [];

    /**
     * @var array
     */
    protected $messages = [];

    /** */
    protected $parser;

    /** */
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * wrapping the validation.
     * 
     * @param array $data
     * @param array $rules
     */
    public function make(array $data, array $rules)
    {
        return $this->validate($data, $rules);
    }

    /**
     * take the data and the rules iltrate.
     *
     * @param array $data.
     * @param array $rules.
     *
     * @return void
     */
    public function validate(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;

        foreach ($rules as $field => $faildRules) {
            if (!array_key_exists($field, $data)) {
                $this->data[$field] = '';
            }
            $this->ruleFitcher($faildRules, $field);
        }

        return $this;
    }

    /**
     * Determine if the data is passed.
     * 
     * @return bool
     */
    public function isPassed() : bool
    {
        if ($this->messages) {
            return false;
        }

        return true;
    }

    /**
     * Get the error messages.
     * 
     * @return array $messages
     */
    public function getMessages() : array
    {
        return $this->messages;
    }

    /**
     * Fitching the rules for the field.
     * 
     * @param array $rules
     * @param mix $rules
     * 
     * @return void
     */
    private function ruleFitcher(array $rules, $attribute) : void
    {
        foreach ($rules as $rule) {
            if($this->parser->has($rule, '|'))
            {
                $arguments = $this->parser->getArguments($rule);
                $rule = $this->parser->getRule($rule);
                $this->ruleChecker(new $rule(...$arguments), $attribute, $this->data[$attribute]);
            }else
            {
                $this->ruleChecker(new $rule(), $attribute, $this->data[$attribute]);
            }
        }
    }

    /**
     * Fill the message if the rule not valid.
     * 
     * @param Validator\RuleInterface $rule
     * @param mix $attribute
     * @param mix $value
     * 
     * @return void
     */
    private function ruleChecker(RuleInterface $rule, $attribute, $value) : void
    {
        if (!$rule->isValid($value)) {
            $this->messages[$attribute][] = $rule->getMessage($attribute);
        }
    }
}

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

    /**
     * @param array $data.
     * @return void
     */
    public function validate(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;

        $rulesIndex = 0;
        foreach($data as $attribute => $value) {
            $this->ruleFitcher($rules[$rulesIndex],$attribute,$value);
            $rulesIndex++;
        }

    }

    /** */
    public function ruleFitcher(array $rules, $attribute, $value)
    {
        foreach($rules as $rule) {
            $this->ruleChecker(new $rule, $attribute, $value);
        }
    }

    /** */
    public function ruleChecker(RuleInterface $rule, $attribute, $value)
    {
        if(!$rule->isValid($value)) {
            $this->messages=[$attribute] = $rule->getMessage($attribute);
        }
    }
}
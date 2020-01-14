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
     * take the data and the rules iltrate
     * @param array $data.
     * @param array $rules.
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

        if($this->messages) {
            throw new ValidationException($this->messages);
        }
    }

    /** */
    private function ruleFitcher(array $rules, $attribute, $value)
    {
        foreach($rules as $rule) {
            $this->ruleChecker(new $rule, $attribute, $value);
        }
    }

    /** */
    private function ruleChecker(RuleInterface $rule, $attribute, $value)
    {
        if(!$rule->isValid($value)) {
            $this->messages[]= [$attribute =>$rule->getMessage($attribute)];
        }
    }
}
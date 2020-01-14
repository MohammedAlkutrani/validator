# validator

## simple usage
``` use Validator\Validate;
use Validator\Rules;
$v = new Validate;
$v->validate([
    'name'=>'mohammed',
    'age' => 15
    ],[
        [Rules::NUMBER,Rules::NUMBER,Rules::NUMBER],
        [Rules::NUMBER]
    ]); ```

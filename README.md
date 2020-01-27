# Validator
It's a simple packge for validation the data before touch your database.


## simple usage
``` use Validator\Validate;
use Validator\Rules;
$v = new Validate;
$v->validate([
    'name'=>'mohammed',
    'age' => 15
    ],[
        [Rules::NUMBER],
        [Rules::BOOLEAN]
    ]);`

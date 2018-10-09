# String Case

Convert any string to **snake_case** or **kebab-case** or **PascalCase** or **camelCase**.


## Example

```php
use Fyn\Common\StringCase;

echo StringCase::snakeCase("This_is A-test@text"),"\n";  //this_is_a_test_text

echo StringCase::kebabCase("This_is A-test@text"),"\n";  //this-is-a-test-text

echo StringCase::pascalCase("This_is A-test@text"),"\n"; //ThisIsATestText

echo StringCase::camelCase("This_is A-test@text"),"\n";  //thisIsATestText

```
<?php

namespace LaravelRulesToSchema\Parsers;

use FluentJsonSchema\FluentSchema;
use LaravelRulesToSchema\Contracts\RuleParser;

class NestedObjectParser implements RuleParser
{

    public function __invoke(string $property, FluentSchema $schema, array $validationRules, array $nestedRuleset,)
    {
        // TODO: Implement __invoke() method.
    }
}

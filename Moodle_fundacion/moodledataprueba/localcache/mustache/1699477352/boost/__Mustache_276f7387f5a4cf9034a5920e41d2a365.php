<?php

class __Mustache_276f7387f5a4cf9034a5920e41d2a365 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mod_coursecertificate_issues_table">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('groupselector'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('report'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}

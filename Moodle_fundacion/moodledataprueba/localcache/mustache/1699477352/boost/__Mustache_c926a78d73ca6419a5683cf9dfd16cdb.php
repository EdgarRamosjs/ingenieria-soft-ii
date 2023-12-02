<?php

class __Mustache_c926a78d73ca6419a5683cf9dfd16cdb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('success');
        $buffer .= $this->section05211ccee99e4cdfe4068f6a42ad180b($context, $indent, $value);
        $value = $context->find('success');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('core/notification_error')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
        }

        return $buffer;
    }

    private function sectionF8472543e041e8a44e88e8f7e4de6853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> tool_certificate/verify_certificate_result }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_certificate/verify_certificate_result')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05211ccee99e4cdfe4068f6a42ad180b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#issue}}
        {{> tool_certificate/verify_certificate_result }}
    {{/issue}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('issue');
                $buffer .= $this->sectionF8472543e041e8a44e88e8f7e4de6853($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

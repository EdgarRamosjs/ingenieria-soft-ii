<?php

class __Mustache_e07812d57a44cf5a884959a1a4d4efd2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<button type="button" class="btn btn-secondary" data-action="createtemplate" data-dataid=';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '>
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section7b73fda8061c00199e3d64bca523af68($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';
        $value = $context->find('js');
        $buffer .= $this->section1647ac2b5bdcc71a3afcbd70e75394c2($context, $indent, $value);

        return $buffer;
    }

    private function section7b73fda8061c00199e3d64bca523af68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'save_as_new_template, mod_feedback';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'save_as_new_template, mod_feedback';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1647ac2b5bdcc71a3afcbd70e75394c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'mod_feedback/createtemplate\'], function(createtemplate) {
    createtemplate.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'mod_feedback/createtemplate\'], function(createtemplate) {
';
                $buffer .= $indent . '    createtemplate.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

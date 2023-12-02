<?php

class __Mustache_4d0c0a17c4f24d2610f0b4b725d7bd40 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="alert alert-block fade in alert-';
        $value = $context->find('expired');
        $buffer .= $this->section1860a77a888a397c1cb45a24447b89f0($context, $indent, $value);
        $value = $context->find('expired');
        if (empty($value)) {
            
            $buffer .= 'success';
        }
        $buffer .= ' mb-2" role="alert">
';
        $buffer .= $indent . '    ';
        $value = $context->find('expired');
        $buffer .= $this->section1273658b0debf4cb695eb160fd35367e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('expired');
        if (empty($value)) {
            
            $buffer .= '<p class="m-0 alert-success">';
            $value = $context->find('str');
            $buffer .= $this->sectionFdbdcc7ab9b99026c4316b6645abcf5a($context, $indent, $value);
        }
        $buffer .= '</p>
';
        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->find('table'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '<a class="btn btn-sm btn-secondary" href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" target="_blank">';
        $value = $context->find('str');
        $buffer .= $this->section453a7a7774f5111cd0e0a2de0cd8761a($context, $indent, $value);
        $buffer .= '</a>
';

        return $buffer;
    }

    private function section1860a77a888a397c1cb45a24447b89f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'danger';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'danger';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ca64b33c6afdebd59a991bcfe5576e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expiredcertificate, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expiredcertificate, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1273658b0debf4cb695eb160fd35367e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p class="m-0 alert-danger">{{#str}}expiredcertificate, tool_certificate{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p class="m-0 alert-danger">';
                $value = $context->find('str');
                $buffer .= $this->section6ca64b33c6afdebd59a991bcfe5576e9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdbdcc7ab9b99026c4316b6645abcf5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'validcertificate, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'validcertificate, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section453a7a7774f5111cd0e0a2de0cd8761a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewcertificate, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewcertificate, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

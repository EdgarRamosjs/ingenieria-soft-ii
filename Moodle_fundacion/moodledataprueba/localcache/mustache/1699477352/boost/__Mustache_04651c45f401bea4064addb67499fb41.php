<?php

class __Mustache_04651c45f401bea4064addb67499fb41 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('coursecertificate/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $context->find('automaticsend');
        $buffer .= $this->section8bd1d627f969be4b846632c4fadbf6ea($context, $indent, $value);
        $value = $context->find('automaticsend');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="alert alert-secondary p-3 clearfix">
';
            $buffer .= $indent . '    <div class="p-2 float-left">';
            $value = $context->find('str');
            $buffer .= $this->sectionDc0c2a9dafe74c272955d3a75484a350($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        <a class="btn btn-link p-0" role="button" data-container="body" data-toggle="popover" data-placement="right" data-content="';
            $value = $context->find('str');
            $buffer .= $this->sectionF054c9540ff6e890e244c7aab220c729($context, $indent, $value);
            $buffer .= '" data-html="true" tabindex="0" data-trigger="focus">
';
            $buffer .= $indent . '            ';
            $value = $context->find('pix');
            $buffer .= $this->section731481e667d259ffdcdbcd72362b36f5($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </a>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '    <button class="btn btn-light float-right" data-certificateid="';
            $value = $this->resolveValue($context->find('certificateid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-automaticsend="0" data-action="toggle-automaticsend">
';
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section0644fab3bed9f23ebf764cd6a67f48ff($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </button>
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function sectionA9b2cec97aa0720f2087111cf23b30c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' automaticsendenabled, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' automaticsendenabled, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59d93a7a5d792d8cb5a6387439146b7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' automaticsendenabled_help, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' automaticsendenabled_help, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8511828bf9eac12ff802712e46db5d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' automaticsend_helptitle, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' automaticsend_helptitle, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section731481e667d259ffdcdbcd72362b36f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/help, core,  {{#str}} automaticsend_helptitle, coursecertificate {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' a/help, core,  ';
                $value = $context->find('str');
                $buffer .= $this->sectionB8511828bf9eac12ff802712e46db5d1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f79c486a78a2bc41f71db528b096deb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disable ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' disable ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bd1d627f969be4b846632c4fadbf6ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="alert alert-success p-3 clearfix">
    <div class="p-2 float-left">{{#str}} automaticsendenabled, coursecertificate {{/str}}
        <a class="btn btn-link p-0" role="button" data-container="body" data-toggle="popover" data-placement="right" data-content="{{#str}} automaticsendenabled_help, coursecertificate {{/str}}" data-html="true" tabindex="0" data-trigger="focus">
            {{#pix}} a/help, core,  {{#str}} automaticsend_helptitle, coursecertificate {{/str}}{{/pix}}
        </a>
    </div>
    <button class="btn btn-light float-right" data-certificateid="{{certificateid}}" data-automaticsend="1" data-action="toggle-automaticsend">
            {{#str}} disable {{/str}}
    </button>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="alert alert-success p-3 clearfix">
';
                $buffer .= $indent . '    <div class="p-2 float-left">';
                $value = $context->find('str');
                $buffer .= $this->sectionA9b2cec97aa0720f2087111cf23b30c0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        <a class="btn btn-link p-0" role="button" data-container="body" data-toggle="popover" data-placement="right" data-content="';
                $value = $context->find('str');
                $buffer .= $this->section59d93a7a5d792d8cb5a6387439146b7e($context, $indent, $value);
                $buffer .= '" data-html="true" tabindex="0" data-trigger="focus">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->section731481e667d259ffdcdbcd72362b36f5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <button class="btn btn-light float-right" data-certificateid="';
                $value = $this->resolveValue($context->find('certificateid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-automaticsend="1" data-action="toggle-automaticsend">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section0f79c486a78a2bc41f71db528b096deb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </button>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc0c2a9dafe74c272955d3a75484a350(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' automaticsenddisabled, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' automaticsenddisabled, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF054c9540ff6e890e244c7aab220c729(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' automaticsenddisabled_help, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' automaticsenddisabled_help, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0644fab3bed9f23ebf764cd6a67f48ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enable ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enable ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

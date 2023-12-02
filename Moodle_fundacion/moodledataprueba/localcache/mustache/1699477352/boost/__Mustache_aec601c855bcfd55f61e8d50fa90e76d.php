<?php

class __Mustache_aec601c855bcfd55f61e8d50fa90e76d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="condition list-group-item list-group-item-action text-dark" data-region="active-condition"
';
        $buffer .= $indent . '        data-condition-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-condition-name="';
        $value = $this->resolveValue($context->find('heading'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-condition-position="';
        $value = $this->resolveValue($context->find('sortorder'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="condition-header d-flex align-items-start">
';
        if ($partial = $this->mustache->loadPartial('core/drag_handle')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <div class="d-flex">
';
        $buffer .= $indent . '                <small class="text-muted text-uppercase">';
        $value = $this->resolveValue($context->find('entityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' • ';
        $value = $this->resolveValue($context->find('heading'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</small>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <button class="btn btn-link p-0 ml-auto"
';
        $buffer .= $indent . '                type="button"
';
        $buffer .= $indent . '                data-action="report-remove-condition"
';
        $buffer .= $indent . '                title="';
        $value = $context->find('str');
        $buffer .= $this->section96b749beefa40ceb1251936ec0d07e6e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section96b749beefa40ceb1251936ec0d07e6e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionE52db40dc72c3c156454e32db3bc01cb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }

    private function section96b749beefa40ceb1251936ec0d07e6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deletecondition, core_reportbuilder, {{{heading}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deletecondition, core_reportbuilder, ';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE52db40dc72c3c156454e32db3bc01cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/cancel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/cancel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

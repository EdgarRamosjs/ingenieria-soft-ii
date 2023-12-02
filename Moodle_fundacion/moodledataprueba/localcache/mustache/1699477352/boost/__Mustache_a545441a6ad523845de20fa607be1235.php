<?php

class __Mustache_a545441a6ad523845de20fa607be1235 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex justify-content-start">
';
        $buffer .= $indent . '    <div class="mr-2">
';
        if ($partial = $this->mustache->loadPartial('core/drag_handle')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="w-100">
';
        $buffer .= $indent . '        <div class="d-flex justify-content-between mb-2">
';
        $buffer .= $indent . '            <small class="text-muted text-nowrap text-uppercase">';
        $value = $this->resolveValue($context->find('entityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' &bull; ';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</small>
';
        $buffer .= $indent . '            <span class="text-nowrap">
';
        $buffer .= $indent . '                <button class="btn btn-link p-0"
';
        $buffer .= $indent . '                        data-action="report-remove-column"
';
        $buffer .= $indent . '                        type="button"
';
        $buffer .= $indent . '                        title="';
        $value = $context->find('str');
        $buffer .= $this->sectionD5a27c5e66a046f71cbca094ce4622d6($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionD5a27c5e66a046f71cbca094ce4622d6($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->sectionE52db40dc72c3c156454e32db3bc01cb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <h3 class="h5 text-nowrap">';
        $value = $this->resolveValue($context->find('headingeditable'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '        <small class="text-muted text-nowrap">';
        $value = $this->resolveValue($context->find('aggregationeditable'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</small>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD5a27c5e66a046f71cbca094ce4622d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deletecolumn, core_reportbuilder, {{{name}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deletecolumn, core_reportbuilder, ';
                $value = $this->resolveValue($context->find('name'), $context);
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

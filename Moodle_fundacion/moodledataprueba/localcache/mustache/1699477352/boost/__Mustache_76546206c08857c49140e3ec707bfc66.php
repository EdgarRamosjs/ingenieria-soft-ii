<?php

class __Mustache_76546206c08857c49140e3ec707bfc66 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="mb-2"
';
        $buffer .= $indent . '    data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="post"
';
        $buffer .= $indent . '    data-target="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-target"
';
        $buffer .= $indent . '    tabindex="-1"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->findDot('urls.viewisolated'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->findDot('html.authorsubheading'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-region="replies-container">
';
        $buffer .= $indent . '        <div class="indent">
';
        $value = $context->find('replies');
        $buffer .= $this->section2a625cc9b7ed8d8415715b0f4045c853($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2a625cc9b7ed8d8415715b0f4045c853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/forum_discussion_threaded_post }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_threaded_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

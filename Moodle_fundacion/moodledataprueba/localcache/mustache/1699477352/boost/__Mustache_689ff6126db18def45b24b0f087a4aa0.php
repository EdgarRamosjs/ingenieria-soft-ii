<?php

class __Mustache_689ff6126db18def45b24b0f087a4aa0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_list')) {
            $context->pushBlockContext(array(
                'discussion_create_text' => array($this, 'blockA5e0ce230509d6269ecb19aa9d123e77'),
                'no_discussions_text' => array($this, 'blockA20f31eeb49bb6083938382e5e97172d'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section920b16acde3084a67e9c6474e9b9a3dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewquestion, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addanewquestion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2acaa70a42c1f1844701645fd0fbf22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noquestions, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noquestions, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA5e0ce230509d6269ecb19aa9d123e77($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section920b16acde3084a67e9c6474e9b9a3dc($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockA20f31eeb49bb6083938382e5e97172d($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        (';
        $value = $context->find('str');
        $buffer .= $this->sectionC2acaa70a42c1f1844701645fd0fbf22($context, $indent, $value);
        $buffer .= ')
';
    
        return $buffer;
    }
}

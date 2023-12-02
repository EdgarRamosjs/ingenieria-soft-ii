<?php

class __Mustache_1067b5a4157307a721ddc91219dfa033 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    M.util.js_pending(\'core_dynamic_tabs_init\');
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="dynamictabs">
';
        $value = $context->find('showtabsnavigation');
        $buffer .= $this->section7f6cd484586b7d600a4e951c815eacb4($context, $indent, $value);
        $buffer .= $indent . '    <div class="tab-content" id="dynamictabs-content">
';
        $value = $context->find('tabs');
        $buffer .= $this->sectionA66c3bad7db8394016ccee77e0d18399($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionD1f6b45af92f083dc6ce9ca9e5c2ba81($context, $indent, $value);

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f58e76fe3b4cb72eacfc078ae6a377d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{#active}}active{{/active}} {{^enabled}}disabled{{/enabled}}" id="{{shortname}}-tab" data-toggle="tab" href="#{{shortname}}" role="tab" aria-controls="{{shortname}}">
                        {{{displayname}}}
                    </a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="nav-item" role="presentation">
';
                $buffer .= $indent . '                    <a class="nav-link ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('enabled');
                if (empty($value)) {
                    
                    $buffer .= 'disabled';
                }
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-tab" data-toggle="tab" href="#';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="tab" aria-controls="';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f6cd484586b7d600a4e951c815eacb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="nav nav-tabs mb-4 moodle-has-zindex" id="dynamictabs-tabs" role="tablist">
            {{#tabs}}
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{#active}}active{{/active}} {{^enabled}}disabled{{/enabled}}" id="{{shortname}}-tab" data-toggle="tab" href="#{{shortname}}" role="tab" aria-controls="{{shortname}}">
                        {{{displayname}}}
                    </a>
                </li>
            {{/tabs}}
        </ul>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="nav nav-tabs mb-4 moodle-has-zindex" id="dynamictabs-tabs" role="tablist">
';
                $value = $context->find('tabs');
                $buffer .= $this->section0f58e76fe3b4cb72eacfc078ae6a377d($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87689ec1ccddfae452be09d6dbfe92a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section916f5d51045b5595ab8a6f4b21985fff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-{{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA66c3bad7db8394016ccee77e0d18399(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane fade container-fluid {{#active}}show active{{/active}}"
                 id="{{shortname}}"
                 role="tabpanel"
                 aria-labelledby="{{shortname}}-tab"
                 data-tab-content="{{shortname}}"
                 data-tab-class="{{tabclass}}"
                {{#dataattributes}}data-{{name}}="{{value}}"{{/dataattributes}}>
                {{{content}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="tab-pane fade container-fluid ';
                $value = $context->find('active');
                $buffer .= $this->section87689ec1ccddfae452be09d6dbfe92a1($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                 id="';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 role="tabpanel"
';
                $buffer .= $indent . '                 aria-labelledby="';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-tab"
';
                $buffer .= $indent . '                 data-tab-content="';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                 data-tab-class="';
                $value = $this->resolveValue($context->find('tabclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                ';
                $value = $context->find('dataattributes');
                $buffer .= $this->section916f5d51045b5595ab8a6f4b21985fff($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1f6b45af92f083dc6ce9ca9e5c2ba81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/dynamic_tabs\'], function(Tabs) {
        Tabs.init();
        M.util.js_complete(\'core_dynamic_tabs_init\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core/dynamic_tabs\'], function(Tabs) {
';
                $buffer .= $indent . '        Tabs.init();
';
                $buffer .= $indent . '        M.util.js_complete(\'core_dynamic_tabs_init\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

<?php

/* twig_form/form_div_layout.html.twig */
class __TwigTemplate_a741ed0fd67f8fd6dbd933bec1bc77dddde44ce02af84e818f9137a85ef779b2 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_enctype' => [$this, 'block_form_enctype'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 24
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 31
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 35
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 43
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 52
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 72
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 86
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 90
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 94
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 121
        $this->displayBlock('time_widget', $context, $blocks);
        // line 132
        $this->displayBlock('number_widget', $context, $blocks);
        // line 138
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 143
        $this->displayBlock('money_widget', $context, $blocks);
        // line 147
        $this->displayBlock('url_widget', $context, $blocks);
        // line 152
        $this->displayBlock('search_widget', $context, $blocks);
        // line 157
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 162
        $this->displayBlock('password_widget', $context, $blocks);
        // line 167
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 172
        $this->displayBlock('email_widget', $context, $blocks);
        // line 177
        $this->displayBlock('range_widget', $context, $blocks);
        // line 182
        $this->displayBlock('button_widget', $context, $blocks);
        // line 196
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 201
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 208
        $this->displayBlock('form_label', $context, $blocks);
        // line 230
        $this->displayBlock('button_label', $context, $blocks);
        // line 234
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 242
        $this->displayBlock('form_row', $context, $blocks);
        // line 250
        $this->displayBlock('button_row', $context, $blocks);
        // line 256
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 262
        $this->displayBlock('form', $context, $blocks);
        // line 268
        $this->displayBlock('form_start', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 311
        echo "
";
        // line 314
        $this->displayBlock('form_rows', $context, $blocks);
        // line 320
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 336
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 350
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 12
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 17
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", []))) {
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 20
        $this->displayBlock("form_rows", $context, $blocks);
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
    }

    // line 24
    public function block_collection_widget($context, array $blocks = [])
    {
        // line 25
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 26
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 28
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 31
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 32
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 35
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 36
        if (($context["expanded"] ?? null)) {
            // line 37
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 39
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 43
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 44
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>";
    }

    // line 52
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 53
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !$this->getAttribute(($context["attr"] ?? null), "size", [], "any", true, true) || ($this->getAttribute(($context["attr"] ?? null), "size", []) <= 1)))) {
            // line 54
            $context["required"] = false;
        }
        // line 56
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 57
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 58
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : (($context["placeholder"] ?? null)))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 60
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 61
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 62
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 63
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 64
                echo "<option disabled=\"disabled\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 67
        $context["options"] = ($context["choices"] ?? null);
        // line 68
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 69
        echo "</select>";
    }

    // line 72
    public function block_choice_widget_options($context, array $blocks = [])
    {
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 74
            if (twig_test_iterable($context["choice"])) {
                // line 75
                echo "<optgroup label=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($context["group_label"])), "html", null, true);
                echo "\">
                ";
                // line 76
                $context["options"] = $context["choice"];
                // line 77
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 78
                echo "</optgroup>";
            } else {
                // line 80
                $context["attr"] = $this->getAttribute($context["choice"], "attr", []);
                // line 81
                echo "            <option value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->getAttribute($context["choice"], "label", [])) : ($this->getAttribute($context["choice"], "label", []))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 86
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 87
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"form-control\" />";
    }

    // line 90
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 91
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"form-control\" />";
    }

    // line 94
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 95
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 96
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget');
            // line 103
            echo "</div>";
        }
    }

    // line 107
    public function block_date_widget($context, array $blocks = [])
    {
        // line 108
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 112
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 113
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 117
            echo "</div>";
        }
    }

    // line 121
    public function block_time_widget($context, array $blocks = [])
    {
        // line 122
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 123
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 125
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 126
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget', ($context["vars"] ?? null));
            }
            // line 128
            echo "        </div>";
        }
    }

    // line 132
    public function block_number_widget($context, array $blocks = [])
    {
        // line 134
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 135
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 138
    public function block_integer_widget($context, array $blocks = [])
    {
        // line 139
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 140
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 143
    public function block_money_widget($context, array $blocks = [])
    {
        // line 144
        echo twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)]);
    }

    // line 147
    public function block_url_widget($context, array $blocks = [])
    {
        // line 148
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 149
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 152
    public function block_search_widget($context, array $blocks = [])
    {
        // line 153
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 157
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 158
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
    }

    // line 162
    public function block_password_widget($context, array $blocks = [])
    {
        // line 163
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 164
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 167
    public function block_hidden_widget($context, array $blocks = [])
    {
        // line 168
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 169
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 172
    public function block_email_widget($context, array $blocks = [])
    {
        // line 173
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 174
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 177
    public function block_range_widget($context, array $blocks = [])
    {
        // line 178
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 179
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 182
    public function block_button_widget($context, array $blocks = [])
    {
        // line 183
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 184
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 185
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 186
($context["name"] ?? null), "%id%" =>                 // line 187
($context["id"] ?? null)]);
            } else {
                // line 190
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 193
        echo "<button type=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null))), "html", null, true);
        echo "</button>";
    }

    // line 196
    public function block_submit_widget($context, array $blocks = [])
    {
        // line 197
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 198
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 201
    public function block_reset_widget($context, array $blocks = [])
    {
        // line 202
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 203
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 208
    public function block_form_label($context, array $blocks = [])
    {
        // line 209
        if ( !(($context["label"] ?? null) === false)) {
            // line 210
            if ( !($context["compound"] ?? null)) {
                // line 211
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 213
            if (($context["required"] ?? null)) {
                // line 214
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 216
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 217
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 218
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 219
($context["name"] ?? null), "%id%" =>                     // line 220
($context["id"] ?? null)]);
                } else {
                    // line 223
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 226
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null))), "html", null, true);
            echo "</label>";
        }
    }

    // line 230
    public function block_button_label($context, array $blocks = [])
    {
    }

    // line 234
    public function block_repeated_row($context, array $blocks = [])
    {
        // line 239
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 242
    public function block_form_row($context, array $blocks = [])
    {
        // line 243
        echo "<div>";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 247
        echo "</div>";
    }

    // line 250
    public function block_button_row($context, array $blocks = [])
    {
        // line 251
        echo "<div>";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 253
        echo "</div>";
    }

    // line 256
    public function block_hidden_row($context, array $blocks = [])
    {
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 262
    public function block_form($context, array $blocks = [])
    {
        // line 263
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 265
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 268
    public function block_form_start($context, array $blocks = [])
    {
        // line 269
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 270
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 271
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 273
            $context["form_method"] = "POST";
        }
        // line 275
        echo "<form name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 276
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 277
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 290
    public function block_form_enctype($context, array $blocks = [])
    {
        // line 291
        if (($context["multipart"] ?? null)) {
            echo "enctype=\"multipart/form-data\"";
        }
    }

    // line 294
    public function block_form_errors($context, array $blocks = [])
    {
        // line 295
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
    }

    // line 304
    public function block_form_rest($context, array $blocks = [])
    {
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", [])) {
                // line 307
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 314
    public function block_form_rows($context, array $blocks = [])
    {
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 316
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 320
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 321
        echo "id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 322
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 323
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 325
            echo " ";
            // line 326
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 327
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 328
$context["attrvalue"] === true)) {
                // line 329
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 330
$context["attrvalue"] === false)) {
                // line 331
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 336
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        // line 337
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 339
            echo " ";
            // line 340
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 341
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 342
$context["attrvalue"] === true)) {
                // line 343
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 344
$context["attrvalue"] === false)) {
                // line 345
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 350
    public function block_button_attributes($context, array $blocks = [])
    {
        // line 351
        echo "id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 355
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 364
    public function block_attributes($context, array $blocks = [])
    {
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 368
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "twig_form/form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  996 => 372,  994 => 371,  989 => 370,  987 => 369,  982 => 368,  980 => 367,  978 => 366,  974 => 365,  971 => 364,  959 => 359,  957 => 358,  952 => 357,  950 => 356,  945 => 355,  943 => 354,  941 => 353,  937 => 352,  928 => 351,  925 => 350,  913 => 345,  911 => 344,  906 => 343,  904 => 342,  899 => 341,  897 => 340,  895 => 339,  891 => 338,  885 => 337,  882 => 336,  870 => 331,  868 => 330,  863 => 329,  861 => 328,  856 => 327,  854 => 326,  852 => 325,  848 => 324,  844 => 323,  840 => 322,  834 => 321,  831 => 320,  823 => 316,  819 => 315,  816 => 314,  807 => 307,  805 => 306,  801 => 305,  798 => 304,  793 => 300,  785 => 298,  781 => 297,  779 => 296,  777 => 295,  774 => 294,  768 => 291,  765 => 290,  758 => 277,  756 => 276,  729 => 275,  726 => 273,  723 => 271,  721 => 270,  719 => 269,  716 => 268,  712 => 265,  710 => 264,  708 => 263,  705 => 262,  701 => 257,  698 => 256,  694 => 253,  692 => 252,  690 => 251,  687 => 250,  683 => 247,  681 => 246,  679 => 245,  677 => 244,  675 => 243,  672 => 242,  668 => 239,  665 => 234,  660 => 230,  640 => 226,  636 => 223,  633 => 220,  632 => 219,  631 => 218,  629 => 217,  627 => 216,  624 => 214,  622 => 213,  619 => 211,  617 => 210,  615 => 209,  612 => 208,  608 => 203,  606 => 202,  603 => 201,  599 => 198,  597 => 197,  594 => 196,  584 => 193,  580 => 190,  577 => 187,  576 => 186,  575 => 185,  573 => 184,  571 => 183,  568 => 182,  564 => 179,  562 => 178,  559 => 177,  555 => 174,  553 => 173,  550 => 172,  546 => 169,  544 => 168,  541 => 167,  537 => 164,  535 => 163,  532 => 162,  527 => 159,  525 => 158,  522 => 157,  518 => 154,  516 => 153,  513 => 152,  509 => 149,  507 => 148,  504 => 147,  500 => 144,  497 => 143,  493 => 140,  491 => 139,  488 => 138,  484 => 135,  482 => 134,  479 => 132,  474 => 128,  464 => 127,  459 => 126,  457 => 125,  454 => 123,  452 => 122,  449 => 121,  444 => 117,  442 => 115,  441 => 114,  440 => 113,  439 => 112,  435 => 111,  432 => 109,  430 => 108,  427 => 107,  422 => 103,  420 => 102,  418 => 101,  416 => 100,  414 => 99,  410 => 98,  407 => 96,  405 => 95,  402 => 94,  388 => 91,  385 => 90,  371 => 87,  368 => 86,  342 => 81,  340 => 80,  337 => 78,  335 => 77,  333 => 76,  328 => 75,  326 => 74,  309 => 73,  306 => 72,  302 => 69,  300 => 68,  298 => 67,  292 => 64,  290 => 63,  288 => 62,  286 => 61,  284 => 60,  275 => 58,  273 => 57,  266 => 56,  263 => 54,  261 => 53,  258 => 52,  254 => 49,  248 => 47,  246 => 46,  242 => 45,  238 => 44,  235 => 43,  230 => 39,  227 => 37,  225 => 36,  222 => 35,  214 => 32,  211 => 31,  207 => 28,  204 => 26,  202 => 25,  199 => 24,  195 => 21,  193 => 20,  190 => 18,  188 => 17,  185 => 16,  171 => 13,  169 => 12,  166 => 11,  161 => 7,  158 => 5,  156 => 4,  153 => 3,  149 => 364,  147 => 350,  145 => 336,  143 => 320,  141 => 314,  138 => 311,  136 => 304,  134 => 294,  132 => 290,  130 => 268,  128 => 262,  126 => 256,  124 => 250,  122 => 242,  120 => 234,  118 => 230,  116 => 208,  114 => 201,  112 => 196,  110 => 182,  108 => 177,  106 => 172,  104 => 167,  102 => 162,  100 => 157,  98 => 152,  96 => 147,  94 => 143,  92 => 138,  90 => 132,  88 => 121,  86 => 107,  84 => 94,  82 => 90,  80 => 86,  78 => 72,  76 => 52,  74 => 43,  72 => 35,  70 => 31,  68 => 24,  66 => 16,  64 => 11,  62 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "twig_form/form_div_layout.html.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\twig_form\\form_div_layout.html.twig");
    }
}

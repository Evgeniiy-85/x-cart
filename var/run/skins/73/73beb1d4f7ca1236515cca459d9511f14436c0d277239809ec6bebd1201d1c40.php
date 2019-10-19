<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker\layout_editor\panel_parts\hidden_blocks.twig */
class __TwigTemplate_6c7400635e46309d79486928a35806a6af73169354ea638373a64ec04ba9b9ab extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
<div class='layout-editor-hidden-list'>
\t<button class='themetweaker-button layout-editor-hidden-block' v-for=\"item in hiddenBlocks\" @click=\"showBlock(item.element)\">
\t\t<span class=\"name\" v-text=\"getBlockName(item)\"></span>
\t\t<span class=\"action\"><i class=\"icon\">";
        // line 10
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/ThemeTweaker/themetweaker/layout_editor/icons/view.svg"]);
        echo "</i>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enable hidden block"]), "html", null, true);
        echo "</span>
\t</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\panel_parts\\hidden_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 10,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\panel_parts\\hidden_blocks.twig", "");
    }
}

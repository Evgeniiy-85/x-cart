<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/center.twig */
class __TwigTemplate_a6d15d8c6aa5980bd607151c44dec08528c9ec055a54bd80ad047e3d9418c175 extends \XLite\Core\Templating\Twig\Template
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
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("noscript.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 6
        $this->loadTemplate("noscript.twig", "/home/vagrant/next/output/xcart/src/skins/admin/center.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "
";
        // line 8
        if (($this->getAttribute(($context["this"] ?? null), "isTitleVisible", [], "method") && $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method"))) {
            // line 9
            echo "  <h1 class=\"title\" id=\"page-title\">
    <div id=\"breadcrumb\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main.breadcrumb"]]), "html", null, true);
            echo "
    </div>
  </h1>
";
        }
        // line 15
        echo "
";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "admin.center"]]), "html", null, true);
        echo "

";
        // line 18
        if (($this->getAttribute(($context["this"] ?? null), "target", []) == "access_denied")) {
            // line 19
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("access_denied.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("access_denied.twig", "/home/vagrant/next/output/xcart/src/skins/admin/center.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 21
        echo "
";
        // line 22
        if (($this->getAttribute(($context["this"] ?? null), "target", []) == "license_restriction")) {
            // line 23
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("license_message.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("license_message.twig", "/home/vagrant/next/output/xcart/src/skins/admin/center.twig", 23)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 25
        echo "
";
        // line 29
        echo "
";
        // line 30
        if ((($this->getAttribute(($context["this"] ?? null), "target", []) == "profile") && ($this->getAttribute(($context["this"] ?? null), "mode", []) == "delete"))) {
            // line 31
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "common/dialog.twig", "head" => "Delete profile - Confirmation", "body" => "profile/confirm_delete.twig"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  90 => 30,  87 => 29,  84 => 25,  72 => 23,  70 => 22,  67 => 21,  55 => 19,  53 => 18,  48 => 16,  45 => 15,  38 => 11,  34 => 9,  32 => 8,  29 => 7,  24 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/center.twig", "");
    }
}

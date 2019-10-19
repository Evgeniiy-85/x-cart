<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/add_files.twig */
class __TwigTemplate_47ced3bc6c1cdb4d6072b5ba9f67fc7f702f9c52e7238e5deb0878202b673d22 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "getAllowedQuantity", [], "method")) {
            // line 8
            echo "  <div>
      <form action=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "customer_attachments", "upload"]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" class=\"attachment-form no-popup-ajax-submit\" method=\"post\">
          <p>
              <input type=\"file\" multiple name=\"customer_attachments[]\" accept=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAcceptExtensionsString", [], "method"), "html", null, true);
            echo "\">
              <input type=\"hidden\" name=\"item_id\" value=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "itemId", []), "html", null, true);
            echo "\">
          </p>
          <div>
              ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentDescription", "orderItem" => $this->getAttribute(($context["this"] ?? null), "getItem", [], "method")]]), "html", null, true);
            echo "
              ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload file"])]]), "html", null, true);
            echo "
         </div>
      </form>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/add_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  42 => 15,  36 => 12,  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/add_files.twig", "");
    }
}

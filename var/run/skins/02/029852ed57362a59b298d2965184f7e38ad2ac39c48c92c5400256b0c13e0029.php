<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/order/history/parts/event_details_author.twig */
class __TwigTemplate_773702fe96dcbd8050729171faaaaa1e588e19b3fd150e04e2e663b51b6bb586 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"author\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "showAuthor", [], "method")) {
            // line 8
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthor", [], "method")) {
                // line 9
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "profile", "", ["profile_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthor", [], "method"), "getProfileId", [], "method")]]), "html", null, true);
                echo "\"
         data-toggle=\"popover\"
         data-placement=\"top\"
         data-trigger=\"hover\"
         data-content=\"IP: ";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthorIp", [], "method"), "html", null, true);
                echo "\">
        ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthor", [], "method"), "getLogin", [], "method"), "html", null, true);
                echo "
      </a>
    ";
            } else {
                // line 17
                echo "      ";
                if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthorName", [], "method")) {
                    // line 18
                    echo "        <span class=\"removed-profile-name\"
              data-toggle=\"popover\"
              data-placement=\"top\"
              data-trigger=\"hover\"
              data-content=\"IP: ";
                    // line 22
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthorIp", [], "method"), "html", null, true);
                    echo "\">
          ";
                    // line 23
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthorName", [], "method"), "html", null, true);
                    echo "
        </span>
      ";
                } else {
                    // line 26
                    echo "        <span class=\"no-author\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "getAuthorIp", [], "method"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 28
                echo "    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/order/history/parts/event_details_author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  73 => 29,  70 => 28,  64 => 26,  58 => 23,  54 => 22,  48 => 18,  45 => 17,  39 => 14,  35 => 13,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/order/history/parts/event_details_author.twig", "");
    }
}

<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/export/parts/completed.download.twig */
class __TwigTemplate_9eaf76f88c69aa20bb70f9da4d648680c441f5681044b9eb20b8ed9701825e07 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"files std\">
  <div class=\"title\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBoxTitle", [], "method"), "html", null, true);
        echo "</div>

  <div class=\"items-list-table\">
    <div class=\"table-wrapper\">
      <table class=\"list\">
        <tbody>
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getDownloadFiles", [], "method"));
        foreach ($context['_seq'] as $context["path"] => $context["file"]) {
            // line 16
            echo "            <tr>
              <td class=\"file main\">
                <div class=\"csv-icon\">
                </div>
                <div class=\"csv-file\">
                  <a href=\"";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "export", "download", ["path" => $context["path"]]]), "html", null, true);
            echo "\" ";
            if ($this->getAttribute(($context["this"] ?? null), "isPopupContext", [], "method")) {
                echo "data-autodownload=\"true\"";
            }
            echo ">
                    ";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "getFilename", [], "method"), "html", null, true);
            echo "
                  </a>
                  <div class=\"size\">
                    ";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatSize", [0 => $this->getAttribute($context["file"], "getSize", [], "method")], "method"), "html", null, true);
            echo "
                  </div>
                </div>

              </td>
              <td class=\"date\">
                ";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLastExportDate", [], "method"), "html", null, true);
            echo "
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
      </table>
    </div>
  </div>

  ";
        // line 40
        if ( !$this->getAttribute(($context["this"] ?? null), "isPopupContext", [], "method")) {
            // line 41
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\StickyPanel\\ExportLast", "isPopupContext" => $this->getAttribute(($context["this"] ?? null), "isPopupContext", [], "method")]]), "html", null, true);
            echo "
  ";
        }
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/export/parts/completed.download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 43,  85 => 41,  83 => 40,  76 => 35,  66 => 31,  57 => 25,  51 => 22,  43 => 21,  36 => 16,  32 => 15,  23 => 9,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/export/parts/completed.download.twig", "");
    }
}

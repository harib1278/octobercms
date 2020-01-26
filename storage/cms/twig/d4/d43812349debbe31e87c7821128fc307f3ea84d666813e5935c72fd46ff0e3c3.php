<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\cms\install-master/themes/responsiv-clean/partials/site/header.htm */
class __TwigTemplate_75b8d03c14371a633ffbe49cf8058a1722839bdb642ac9a6e039b8b5e4d7f65a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_name", [], "any", false, false, false, 4), "html", null, true);
        echo "</a>
        </h1>
        <p class=\"site-motto\">
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "site_motto", [], "any", false, false, false, 7), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms\\install-master/themes/responsiv-clean/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
        </h1>
        <p class=\"site-motto\">
            {{ this.theme.site_motto }}
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
</div>", "C:\\xampp\\htdocs\\cms\\install-master/themes/responsiv-clean/partials/site/header.htm", "");
    }
}

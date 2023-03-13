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

/* themes/custom/sunstar/templates/page.html.twig */
class __TwigTemplate_7e1096870bb6011429b1bfb714e13914 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
  <meta charset=\"utf-8\">
  <title></title>
</head>

<body>
  <header>
    <div class=\"header_top\">
      ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"header_middle\">
      ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_middle", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
    </div>
    <nav class=\"header_bottom menu\">
      ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    </nav>
  </header>

  <main class=\"main\">
    <div class=\"content\">
      ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 26)) {
            // line 27
            echo "    <div class=\"sidebar\">
    </div>
    ";
        }
        // line 30
        echo "  </main>

  <footer>
    <div class=\"row\">
      <div class=\"col\">
        <img src=\"https://www.mynimo.com/files/company_logos/SUNSTAR%20LOGO-01_20180829061515_3.png\" style=\"height: 30px; width: auto; background-color: #ffde16; padding: 10px; margin-top: -20px;\">
      </div>
      <div class=\"col\">
        <div class=\"footer-title\">
          The Sunstar Channels
        </div>
        ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col\">
        <div class=\"footer-title\">
          The Company
        </div>
        ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col\">
        <div class=\"footer-title\">
          Subscribe
        </div>
        ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col\">
        <div class=\"footer-title\">
          Follow Us
        </div>
        ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"footer-row\">
      <div class=\"footer-col\">
        © Copyright 2023 SunStar Publishing Inc.
      </div>
      <div class=\"footer-col\" style=\"float: right; text-align: right;\">
        All Rights Reserved. Powered By NewsPress
      </div>
    </div>
  </footer>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sunstar/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  116 => 53,  107 => 47,  98 => 41,  85 => 30,  80 => 27,  78 => 26,  73 => 24,  64 => 18,  58 => 15,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sunstar/templates/page.html.twig", "/app/web/themes/custom/sunstar/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

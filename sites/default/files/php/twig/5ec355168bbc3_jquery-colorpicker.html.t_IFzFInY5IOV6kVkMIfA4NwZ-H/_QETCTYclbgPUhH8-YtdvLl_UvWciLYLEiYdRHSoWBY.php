<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/jquery_colorpicker/templates/jquery-colorpicker.html.twig */
class __TwigTemplate_389e82fbab731a9a588a9bf1fcc4c37c4a0f481692686457fb5ae3270651eda8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 8];
        $filters = ["escape" => 2, "t" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"jquery_colorpicker\">
\t<div id=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "-inner_wrapper\" class=\"inner_wrapper\">
\t\t<div class=\"color_picker\" style=\"background-color:";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_color"] ?? null)), "html", null, true);
        echo ";\">
\t\t\t<span class=\"hash\">#</span><input";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo " />";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
\t\t\t<div class=\"description\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Enter a hexidecimal color value. Enabling javascript will replace this input with a graphical color selector"));
        echo "</div>
\t\t</div>
\t</div>
\t";
        // line 8
        if (($context["show_remove"] ?? null)) {
            // line 9
            echo "\t\t<div>
\t\t\t<a href=\"#\" class=\"jquery_field_remove_link\">";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Remove"));
            echo "</a>
\t\t</div>
\t";
        }
        // line 13
        echo "\t";
        if (($context["show_clear"] ?? null)) {
            // line 14
            echo "\t\t<div>
\t\t\t<a href=\"#\" class=\"jquery_field_clear_link\">";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Clear"));
            echo "</a>
\t\t</div>
\t";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/jquery_colorpicker/templates/jquery-colorpicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  95 => 15,  92 => 14,  89 => 13,  83 => 10,  80 => 9,  78 => 8,  72 => 5,  66 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jquery_colorpicker\">
\t<div id=\"{{ id }}-inner_wrapper\" class=\"inner_wrapper\">
\t\t<div class=\"color_picker\" style=\"background-color:{{ default_color }};\">
\t\t\t<span class=\"hash\">#</span><input{{ attributes }} />{{ children }}
\t\t\t<div class=\"description\">{{ 'Enter a hexidecimal color value. Enabling javascript will replace this input with a graphical color selector'|t }}</div>
\t\t</div>
\t</div>
\t{% if show_remove %}
\t\t<div>
\t\t\t<a href=\"#\" class=\"jquery_field_remove_link\">{{ 'Remove'|t }}</a>
\t\t</div>
\t{% endif %}
\t{% if show_clear %}
\t\t<div>
\t\t\t<a href=\"#\" class=\"jquery_field_clear_link\">{{ 'Clear'|t }}</a>
\t\t</div>
\t{% endif %}
</div>
", "modules/contrib/jquery_colorpicker/templates/jquery-colorpicker.html.twig", "/Users/work/localhost/drupal-AppShop/modules/contrib/jquery_colorpicker/templates/jquery-colorpicker.html.twig");
    }
}

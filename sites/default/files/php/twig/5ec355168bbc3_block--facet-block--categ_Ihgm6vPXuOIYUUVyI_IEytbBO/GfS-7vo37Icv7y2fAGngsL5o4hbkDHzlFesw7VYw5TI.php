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

/* themes/martis/templates/block/block--facet-block--category-menu.html.twig */
class __TwigTemplate_2285a67500d727c9a01320ee7040a0e4d3e7ede02c829979d7ae480f20007eed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 3, "if" => 10, "block" => 28];
        $filters = ["clean_class" => 5, "clean_id" => 9, "escape" => 10, "without" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
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
        echo "
";
        // line 3
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 5
($context["configuration"] ?? null), "provider", [])))), 2 => "category-menu"];
        // line 9
        $context["heading_id"] = \Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])));
        // line 10
        echo "<nav aria-labelledby=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-labelledby"), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
\t<div class=\"container-wrap clearfix mega-menu\">
\t  ";
        // line 13
        echo "\t  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 14
            echo "\t\t";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method");
            // line 15
            echo "\t  ";
        }
        // line 16
        echo "\t  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
\t\t";
        // line 17
        if (($context["label"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"block-title-wrap clearfix\">
\t\t<div class=\"block-title-content\">
\t\t<h4";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
            echo "><span class=\"cat-label\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</span> <span class=\"cat-icon ti-menu\"></span></h4>
\t\t";
            // line 21
            if (($context["block_subtitle"] ?? null)) {
                echo "<h5 class=\"block-subtitle\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                echo "</h5>";
            }
            // line 22
            echo "\t\t</div>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

\t  ";
        // line 28
        echo "\t  ";
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t</div>
</nav>";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
\t  ";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--facet-block--category-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 29,  129 => 28,  124 => 31,  121 => 28,  115 => 25,  110 => 22,  104 => 21,  98 => 20,  94 => 18,  92 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  64 => 10,  62 => 9,  60 => 5,  59 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{%
set classes = [
'block',
'block-' ~ configuration.provider|clean_class,
'category-menu',
]
%}
{% set heading_id = attributes.id|clean_id %}
<nav aria-labelledby=\"{{ heading_id }}\"{{ attributes|without('role', 'aria-labelledby').addClass(classes) }} {% if block_style %}style=\"{{ block_style }}\"{% endif %}>
\t<div class=\"container-wrap clearfix mega-menu\">
\t  {# Label. If not displayed, we still provide it for screen readers. #}
\t  {% if not configuration.label_display %}
\t\t{% set title_attributes = title_attributes.addClass('visually-hidden') %}
\t  {% endif %}
\t  {{ title_prefix }}
\t\t{% if label %}
\t\t<div class=\"block-title-wrap clearfix\">
\t\t<div class=\"block-title-content\">
\t\t<h4{{ title_attributes.addClass('block-title') }}><span class=\"cat-label\">{{ label }}</span> <span class=\"cat-icon ti-menu\"></span></h4>
\t\t{% if block_subtitle %}<h5 class=\"block-subtitle\">{{ block_subtitle }}</h5>{% endif %}
\t\t</div>
\t\t</div>
\t\t{% endif %}
\t  {{ title_suffix }}

\t  {# Menu. #}
\t  {% block content %}
\t\t{{ content }}
\t  {% endblock %}
\t</div>
</nav>", "themes/martis/templates/block/block--facet-block--category-menu.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/block/block--facet-block--category-menu.html.twig");
    }
}

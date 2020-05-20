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

/* themes/martis/templates/node/node--banner.html.twig */
class __TwigTemplate_b74fb0f12f676d5a6c5de1989c709a105707be05d6014f4feecd1efad975c389 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 18];
        $filters = ["clean_class" => 10, "escape" => 19, "render" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'render'],
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
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 10
($context["node"] ?? null), "bundle", [])))), 2 => "node-content", 3 => (($this->getAttribute(        // line 12
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 13
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 14
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : (""))];
        // line 17
        echo "
";
        // line 18
        if (($context["teaser"] ?? null)) {
            // line 19
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "promotion-item"], "method")), "html", null, true);
            echo ">
  ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t<div class=\"promotion-container ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_text_color", []), "value", [])), "html", null, true);
            echo "\">
\t\t<div class=\"promotion-image\">";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "</div>
\t\t<div class=\"promotion-meta-wrap\">
\t\t<div class=\"promotion-meta ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_content_placement", []), "value", [])), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_text_align", []), "value", [])), "html", null, true);
            echo "\">
\t\t<div class=\"promotion-content-meta\">
\t\t";
            // line 27
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_text", []))) {
                // line 28
                echo "\t\t<div class=\"promotion-title clearfix\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading_text", [])), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 30
            echo "\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                // line 31
                echo "\t\t<div class=\"promotion-content\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "</div>\t
\t\t";
            }
            // line 33
            echo "\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_link", []), "title", []))) {
                // line 34
                echo "\t\t\t<div class=\"nav menu alt-button mt-2 promotion-link\">
\t\t\t<a href=\"";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"button promotion-button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array")), "html", null, true);
                echo "</a>
\t\t\t</div>\t
\t\t";
            }
            // line 38
            echo "\t\t</div>
\t\t</div>
\t\t</div>
\t\t
\t\t";
            // line 42
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_make_content_link", []), "value", []) && $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", [])))) {
                // line 43
                echo "\t\t<a class=\"slide-content-link\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\">view</a>
\t\t";
            }
            // line 45
            echo "\t\t
\t</div>
</div>
";
        } else {
            // line 49
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 52
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                // line 53
                echo "\t<div class=\"node-feat-image\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t";
            }
            // line 55
            echo "\t<div class=\"post-content\">
\t";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/node/node--banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  167 => 55,  161 => 53,  159 => 52,  155 => 51,  151 => 50,  146 => 49,  140 => 45,  134 => 43,  132 => 42,  126 => 38,  118 => 35,  115 => 34,  112 => 33,  106 => 31,  103 => 30,  97 => 28,  95 => 27,  88 => 25,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  66 => 19,  64 => 18,  61 => 17,  59 => 14,  58 => 13,  57 => 12,  56 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 */
#}
{%
  set classes = [
    'node',
    'node-type-' ~ node.bundle|clean_class,
\t'node-content',
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
  ]
%}

{% if teaser %}
<div{{ attributes.addClass('promotion-item') }}>
  {{ title_prefix }}
  {{ title_suffix }}
\t<div class=\"promotion-container {{ node.field_text_color.value }}\">
\t\t<div class=\"promotion-image\">{{ content.field_image }}</div>
\t\t<div class=\"promotion-meta-wrap\">
\t\t<div class=\"promotion-meta {{ node.field_content_placement.value }} {{ node.field_text_align.value }}\">
\t\t<div class=\"promotion-content-meta\">
\t\t{% if content.field_heading_text | render %}
\t\t<div class=\"promotion-title clearfix\">{{ content.field_heading_text }}</div>
\t\t{% endif %}
\t\t{% if content.body | render %}
\t\t<div class=\"promotion-content\">{{ content.body }}</div>\t
\t\t{% endif %}
\t\t{% if node.field_link.title | render %}
\t\t\t<div class=\"nav menu alt-button mt-2 promotion-link\">
\t\t\t<a href=\"{{ content.field_link.0['#url'] }}\" class=\"button promotion-button\">{{ content.field_link.0['#title'] }}</a>
\t\t\t</div>\t
\t\t{% endif %}
\t\t</div>
\t\t</div>
\t\t</div>
\t\t
\t\t{% if node.field_make_content_link.value and content.field_link | render %}
\t\t<a class=\"slide-content-link\" href=\"{{ content.field_link.0['#url'] }}\">view</a>
\t\t{% endif %}
\t\t
\t</div>
</div>
{% else %}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}
\t{% if content.field_image | render %}
\t<div class=\"node-feat-image\">{{ content.field_image }}</div>
\t{% endif %}
\t<div class=\"post-content\">
\t{{ content.body }}
\t</div>
</div>
{% endif %}", "themes/martis/templates/node/node--banner.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/node/node--banner.html.twig");
    }
}

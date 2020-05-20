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

/* themes/martis/templates/block/block--banner-block.html.twig */
class __TwigTemplate_7adda33417d715bc3ddda0cdbd7d41e98c2760ee10d75075c9f82b601e3d7744 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "if" => 16, "block" => 33];
        $filters = ["clean_class" => 12, "escape" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
        // line 7
        echo "
";
        // line 9
        $context["classes"] = [0 => "block", 1 => "promotion-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 12
($context["configuration"] ?? null), "provider", [])))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["plugin_id"] ?? null))))];
        // line 16
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap\">
  ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 19
        if (($context["label"] ?? null)) {
            // line 20
            echo "\t<div class=\"block-title-wrap clearfix\">
\t<div class=\"block-title-content\">
\t";
            // line 22
            if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                // line 23
                echo "\t";
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                    echo "</h5>";
                }
                // line 24
                echo "\t<h2";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</h2>
\t";
            } else {
                // line 26
                echo "\t<h2";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</h2>
\t";
                // line 27
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                    echo "</h5>";
                }
                // line 28
                echo "\t";
            }
            // line 29
            echo "\t</div>
\t</div>
  ";
        }
        // line 32
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "</div>
</div>";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        // line 34
        echo "\t<div class=\"block-content promotion-layout promotion-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_layout", []), "#items", [], "array"), "value", [])), "html", null, true);
        echo "\">
\t   ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_block", [])), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--banner-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  138 => 34,  135 => 33,  130 => 38,  128 => 33,  123 => 32,  118 => 29,  115 => 28,  109 => 27,  102 => 26,  94 => 24,  87 => 23,  85 => 22,  81 => 20,  79 => 19,  75 => 18,  63 => 16,  61 => 13,  60 => 12,  59 => 9,  56 => 7,);
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
 * Theme override to display a block.
 */
#}

{%
  set classes = [
    'block',
\t'promotion-block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }} {% if block_style %}style=\"{{ block_style }}\"{% endif %}>
<div class=\"container-wrap\">
  {{ title_prefix }}
  {% if label %}
\t<div class=\"block-title-wrap clearfix\">
\t<div class=\"block-title-content\">
\t{% if block_title_style == 'block-title-2' %}
\t{% if block_subtitle %}<h5 class=\"block-subtitle\">{{ block_subtitle }}</h5>{% endif %}
\t<h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
\t{% else %}
\t<h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
\t{% if block_subtitle %}<h5 class=\"block-subtitle\">{{ block_subtitle }}</h5>{% endif %}
\t{% endif %}
\t</div>
\t</div>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
\t<div class=\"block-content promotion-layout promotion-{{ content.field_banner_layout['#items'].value }}\">
\t   {{ content.field_block }}
    </div>
  {% endblock %}
</div>
</div>", "themes/martis/templates/block/block--banner-block.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/block/block--banner-block.html.twig");
    }
}

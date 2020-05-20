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

/* themes/martis/templates/block/block--slider.html.twig */
class __TwigTemplate_23eae68a5f94c0afc34083ee9f338af781392db7f12c243129e390de92de31d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "if" => 16, "block" => 20];
        $filters = ["clean_class" => 12, "escape" => 16, "first" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'first'],
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
        $context["classes"] = [0 => "block", 1 => "slide-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 12
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
<div class=\"container-wrap clearfix\">
";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "</div>
</div>";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        // line 21
        echo " ";
        if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_slide_type", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "slide")) {
            echo " 
\t<div class=\"hero slide-carousel owl-carousel\" data-nav=\"true\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-autoplayspeed=\"1500\" data-autoplaytimeout=\"8000\" data-loop=\"true\">
\t\t";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_slider_block", [])), "html", null, true);
            echo "
\t</div>
 ";
        } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(        // line 25
($context["content"] ?? null), "field_slide_type", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "image")) {
            echo " 
\t<div class=\"slider-image\">
\t\t";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_slider_block", []), 0, [])), "html", null, true);
            echo "
\t</div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  104 => 25,  99 => 23,  93 => 21,  90 => 20,  85 => 31,  83 => 20,  79 => 19,  75 => 18,  63 => 16,  61 => 13,  60 => 12,  59 => 9,  56 => 7,);
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
\t'slide-block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }} {% if block_style %}style=\"{{ block_style }}\"{% endif %}>
<div class=\"container-wrap clearfix\">
{{ title_prefix }}
{{ title_suffix }}
{% block content %}
 {% if content.field_slide_type['#items'].getValue()|first.value == \"slide\" %} 
\t<div class=\"hero slide-carousel owl-carousel\" data-nav=\"true\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-autoplayspeed=\"1500\" data-autoplaytimeout=\"8000\" data-loop=\"true\">
\t\t{{ content.field_slider_block }}
\t</div>
 {% elseif content.field_slide_type['#items'].getValue()|first.value == \"image\" %} 
\t<div class=\"slider-image\">
\t\t{{ content.field_slider_block.0 }}
\t</div>
 {% endif %}
{% endblock %}
</div>
</div>", "themes/martis/templates/block/block--slider.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/block/block--slider.html.twig");
    }
}

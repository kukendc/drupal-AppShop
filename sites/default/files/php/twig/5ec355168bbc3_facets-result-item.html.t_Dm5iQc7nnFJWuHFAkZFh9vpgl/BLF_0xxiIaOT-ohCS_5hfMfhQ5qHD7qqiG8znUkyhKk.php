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

/* themes/martis/templates/facets/facets-result-item.html.twig */
class __TwigTemplate_5cba340aa5900232ab529a4d7cfbe90549d8abde9f337e62ed8c44312e932529 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 15
        if (($context["is_active"] ?? null)) {
            // line 16
            echo "  <span class=\"facet-item__status js-facet-deactivate\">×</span>
";
        }
        // line 18
        echo "<span class=\"facet-item__value\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
        echo "</span>
";
        // line 19
        if (($context["show_count"] ?? null)) {
            // line 20
            echo "  <span class=\"facet-item__count\">(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null)), "html", null, true);
            echo ")</span>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/facets/facets-result-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  66 => 19,  61 => 18,  57 => 16,  55 => 15,);
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
 * Default theme implementation of a facet result item.
 *
 * Available variables:
 * - value: The item value.
 * - show_count: If this facet provides count.
 * - count: The amount of results.
 * - is_active: The item is active.
 *
 * @ingroup themeable
 */
#}
{% if is_active %}
  <span class=\"facet-item__status js-facet-deactivate\">×</span>
{% endif %}
<span class=\"facet-item__value\">{{ value }}</span>
{% if show_count %}
  <span class=\"facet-item__count\">({{ count }})</span>
{% endif %}
", "themes/martis/templates/facets/facets-result-item.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/facets/facets-result-item.html.twig");
    }
}

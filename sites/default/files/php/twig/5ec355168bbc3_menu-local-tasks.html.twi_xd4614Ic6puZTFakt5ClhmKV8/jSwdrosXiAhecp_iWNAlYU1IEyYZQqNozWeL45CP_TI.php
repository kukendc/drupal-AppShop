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

/* themes/martis/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_94a78ffac9a19093becb2d137fa675444514b8e5fa56b4f3a27a9a3599fff2ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["t" => 11, "escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
<div class=\"task-bar alert alert-dismissable fade show clearfix\" role=\"alert\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" aria-hidden=\"true\">&times;</button>
\t";
        // line 10
        if (($context["primary"] ?? null)) {
            // line 11
            echo "\t  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs"));
            echo "</h2>
\t  <ul class=\"tabs primary\">";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
            echo "</ul>
\t";
        }
        // line 14
        echo "\t";
        if (($context["secondary"] ?? null)) {
            // line 15
            echo "\t  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs"));
            echo "</h2>
\t  <ul class=\"tabs secondary\">";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null)), "html", null, true);
            echo "</ul>
\t";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  80 => 16,  75 => 15,  72 => 14,  67 => 12,  62 => 11,  60 => 10,  55 => 7,);
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
 * Theme override to display primary and secondary local tasks.
 */
#}

<div class=\"task-bar alert alert-dismissable fade show clearfix\" role=\"alert\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" aria-hidden=\"true\">&times;</button>
\t{% if primary %}
\t  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
\t  <ul class=\"tabs primary\">{{ primary }}</ul>
\t{% endif %}
\t{% if secondary %}
\t  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
\t  <ul class=\"tabs secondary\">{{ secondary }}</ul>
\t{% endif %}
</div>", "themes/martis/templates/navigation/menu-local-tasks.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/navigation/menu-local-tasks.html.twig");
    }
}

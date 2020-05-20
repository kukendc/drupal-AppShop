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

/* form--user-form.html.twig */
class __TwigTemplate_9f6df6db4097be16ff5bba9d08d10386a6d6ca05e3ca94bdddd6a18a5cbc8179 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_header' => [$this, 'block_form_header'],
            'form_footer' => [$this, 'block_form_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 18];
        $filters = ["escape" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
        echo "
<div class=\"auth-user-form\">
  <form";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    <h2 class=\"form-header\">";
        // line 18
        $this->displayBlock('form_header', $context, $blocks);
        echo "</h2>
    ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
  </form>
  <div class=\"auth-user-form--footer\">
    ";
        // line 22
        $this->displayBlock('form_footer', $context, $blocks);
        // line 23
        echo "  </div>
</div>
";
    }

    // line 18
    public function block_form_header($context, array $blocks = [])
    {
    }

    // line 22
    public function block_form_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "form--user-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  83 => 18,  77 => 23,  75 => 22,  69 => 19,  65 => 18,  61 => 17,  57 => 15,);
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
 * Default theme implementation for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 *
 * @ingroup themeable
 */
#}

<div class=\"auth-user-form\">
  <form{{ attributes }}>
    <h2 class=\"form-header\">{% block form_header %}{% endblock %}</h2>
    {{ children }}
  </form>
  <div class=\"auth-user-form--footer\">
    {% block form_footer %}{% endblock %}
  </div>
</div>
", "form--user-form.html.twig", "themes/martis/templates/form/form--user-form.html.twig");
    }
}

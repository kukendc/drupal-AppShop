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

/* themes/martis/templates/form/form--user-pass.html.twig */
class __TwigTemplate_d81c6337a68904c4b8074a3def8cc9a1dbfcb77129cc86cfba7bc1f76e29a960 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form_header' => [$this, 'block_form_header'],
            'form_footer' => [$this, 'block_form_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 17];
        $functions = ["path" => 21];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        // line 15
        return "form--user-form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("form--user-form.html.twig", "themes/martis/templates/form/form--user-pass.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_form_header($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Reset your password"));
        echo "
";
    }

    // line 19
    public function block_form_footer($context, array $blocks = [])
    {
        // line 20
        echo "  <h4 class=\"form-title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back to:"));
        echo "</h4>
  <a class=\"button\" href=\"";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
        echo "</a>
  <a class=\"button\"  href=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Register"));
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/form/form--user-pass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  83 => 21,  78 => 20,  75 => 19,  68 => 17,  65 => 16,  55 => 15,);
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
{% extends \"form--user-form.html.twig\" %}
{% block form_header %}
  {{ 'Reset your password'|t }}
{% endblock %}
{% block form_footer %}
  <h4 class=\"form-title\">{{('Back to:'|t)}}</h4>
  <a class=\"button\" href=\"{{ path('user.login') }}\">{{ 'Login'|t }}</a>
  <a class=\"button\"  href=\"{{ path('user.register') }}\">{{ 'Register'|t }}</a>
{% endblock %}", "themes/martis/templates/form/form--user-pass.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/form/form--user-pass.html.twig");
    }
}

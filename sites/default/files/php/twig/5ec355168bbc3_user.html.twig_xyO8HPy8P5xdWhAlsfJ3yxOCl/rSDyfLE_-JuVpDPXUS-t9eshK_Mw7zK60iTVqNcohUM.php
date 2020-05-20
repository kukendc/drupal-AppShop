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

/* themes/martis/templates/user/user.html.twig */
class __TwigTemplate_3d70904b9c4cb326fb095951ccc3eaef1cdac91072b288bb51e2e4a2651027d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21];
        $filters = ["escape" => 19, "without" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
        // line 19
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "profile"], "method")), "html", null, true);
        echo ">

  ";
        // line 21
        if ((($context["content"] ?? null) && ((($context["view_mode"] ?? null) == "default") || (($context["view_mode"] ?? null) == "full")))) {
            // line 22
            echo "    <div class=\"user-header\">
      <div class=\"inner\">
        <div class=\"row\">
          <div class=\"col-md-4\">
              <div class=\"user-profile-picture\">
                ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "user_picture", [])), "html", null, true);
            echo "
              </div>
          </div>
          <div class=\"col-md-8\">
\t\t    <h2 class=\"user-name\">";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_name", [])), "html", null, true);
            echo " @";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</h2>
\t\t\t<div class=\"user-content\">
            ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "user_picture", "field_name"), "html", null, true);
            echo "
          </div>
\t\t  </div>
        </div>
      </div>

    </div>

  ";
        } else {
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        }
        // line 44
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  96 => 42,  84 => 33,  77 => 31,  70 => 27,  63 => 22,  61 => 21,  55 => 19,);
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
 * Theme override to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 *
 * @see template_preprocess_user()
 */
#}
<div{{ attributes.addClass('profile') }}>

  {% if content and (view_mode == 'default' or view_mode == 'full') %}
    <div class=\"user-header\">
      <div class=\"inner\">
        <div class=\"row\">
          <div class=\"col-md-4\">
              <div class=\"user-profile-picture\">
                {{ content.user_picture }}
              </div>
          </div>
          <div class=\"col-md-8\">
\t\t    <h2 class=\"user-name\">{{ content.field_name }} @{{ name }}</h2>
\t\t\t<div class=\"user-content\">
            {{ content|without('user_picture', 'field_name') }}
          </div>
\t\t  </div>
        </div>
      </div>

    </div>

  {% else %}
    {{- content -}}
  {% endif %}
</div>
", "themes/martis/templates/user/user.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/user/user.html.twig");
    }
}

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

/* modules/custom/mt_countdown/templates/mt_countdown_inject.html.twig */
class __TwigTemplate_2d6ed8eff1b33b28175fb43989c3d23e3ecb785cbe9541bc38a1fd3a24f39fde extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 6, "t" => 48];
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
        if (($context["inject_in_the_body"] ?? null)) {
            // line 2
            echo "
  <style>

    .mt-count-down {
      background-color: ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null)), "html", null, true);
            echo ";
    }
    .mt-count-down__title {
      color: ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_color"] ?? null)), "html", null, true);
            echo ";
      font-weight: bold;
    }
    .mt-count-down__notes {
      color: ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notes_color"] ?? null)), "html", null, true);
            echo ";
    }
    .mt-count-down__message {
      color: ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message_color"] ?? null)), "html", null, true);
            echo ";
    }
    .mt-count-down__daysto {
      color: ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notes_color"] ?? null)), "html", null, true);
            echo ";
    }
    .mt-count-down__button {
      background-color: ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_background"] ?? null)), "html", null, true);
            echo ";
      color: ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_color"] ?? null)), "html", null, true);
            echo ";
      border: 1px solid ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_color"] ?? null)), "html", null, true);
            echo ";
      padding: 5px;
    }
    .mt-count-down__hint {
      color: ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message_color"] ?? null)), "html", null, true);
            echo ";
    }

  </style>

  <div class=\"";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["predefined_palettes"] ?? null)), "html", null, true);
            echo " mt-count-down-inject mt-count-down alert alert-dismissible fade show\" role=\"alert\">

    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">&times;</span>
    </button>

    <div class=\"mt-container\">
      <div class=\"mt-row\">

        <div class=\"mt-col-md-8\">
          <div class=\"mt-row\">
            <div class=\"mt-col-sm-8 mt-col-xs-12\">

              ";
            // line 46
            if (($context["title"] ?? null)) {
                // line 47
                echo "                <div class=\"mt-count-down__title\">
                  ";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["title"] ?? null))));
                echo "
                </div>
              ";
            }
            // line 51
            echo "
              ";
            // line 52
            if (($context["prompt_message"] ?? null)) {
                // line 53
                echo "                <div class=\"mt-count-down__message\">
                  ";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["prompt_message"] ?? null))));
                echo "
                </div>
              ";
            }
            // line 57
            echo "
            </div>

            <div class=\"mt-col-sm-4 mt-col-xs-12\">
              ";
            // line 61
            if ((($context["target_url"] ?? null) && ($context["dismiss_text"] ?? null))) {
                // line 62
                echo "                <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target_url"] ?? null)), "html", null, true);
                echo "\" class=\"mt-count-down__button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["dismiss_text"] ?? null))));
                echo "</a>
              ";
            }
            // line 64
            echo "              ";
            if (($context["hint_text"] ?? null)) {
                // line 65
                echo "                <div class=\"mt-count-down__hint\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hint_text"] ?? null)), "html", null, true);
                echo "</div>
              ";
            }
            // line 67
            echo "            </div>

          </div>
        </div>

        <div class=\"mt-col-md-4\">
          <div class=\"mt-count-down__daysto\">
              ";
            // line 74
            if (($context["days_to"] ?? null)) {
                // line 75
                echo "              <span class=\"mt-count-down__notes\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["days_to"] ?? null))));
                echo "</span>
              ";
            }
            // line 77
            echo "            <div class=\"mt-count-down-slot\"></div>
          </div>
        </div>

      </div>  <!-- /.mt-row -->
    </div> <!-- /.mt-container -->
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/mt_countdown/templates/mt_countdown_inject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 77,  194 => 75,  192 => 74,  183 => 67,  177 => 65,  174 => 64,  166 => 62,  164 => 61,  158 => 57,  152 => 54,  149 => 53,  147 => 52,  144 => 51,  138 => 48,  135 => 47,  133 => 46,  117 => 33,  109 => 28,  102 => 24,  98 => 23,  94 => 22,  88 => 19,  82 => 16,  76 => 13,  69 => 9,  63 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/mt_countdown/templates/mt_countdown_inject.html.twig", "/home/cloudpanel/htdocs/panecomdistr/modules/custom/mt_countdown/templates/mt_countdown_inject.html.twig");
    }
}

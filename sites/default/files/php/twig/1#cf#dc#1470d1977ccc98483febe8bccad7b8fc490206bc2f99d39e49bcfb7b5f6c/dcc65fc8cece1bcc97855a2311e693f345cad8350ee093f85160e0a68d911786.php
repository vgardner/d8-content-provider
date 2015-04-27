<?php

/* core/themes/classy/templates/misc/progress-bar.html.twig */
class __TwigTemplate_cfdc1470d1977ccc98483febe8bccad7b8fc490206bc2f99d39e49bcfb7b5f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"progress\" data-drupal-progress>
  ";
        // line 15
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 16
            echo "    <div class=\"progress__label\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 18
        echo "  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        echo twig_drupal_escape_filter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true);
        echo "%\"></div></div>
  <div class=\"progress__percentage\">";
        // line 19
        echo twig_drupal_escape_filter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true);
        echo "%</div>
  <div class=\"progress__description\">";
        // line 20
        echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 20,  35 => 19,  30 => 18,  24 => 16,  22 => 15,  19 => 14,);
    }
}

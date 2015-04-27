<?php

/* core/themes/classy/templates/content-edit/filter-guidelines.html.twig */
class __TwigTemplate_0beceeec3f54013769f0e09daf15b82f2b07186147ba1f5cea88c68f137cbfab extends Twig_Template
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
        // line 21
        $context["classes"] = array(0 => "filter-guidelines-item", 1 => ("filter-guidelines-" . $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "id", array())));
        // line 26
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  <h4 class=\"label\">";
        // line 27
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "label", array()), "html", null, true);
        echo "</h4>
  ";
        // line 28
        echo twig_drupal_escape_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 28,  26 => 27,  21 => 26,  19 => 21,);
    }
}

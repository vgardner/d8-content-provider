<?php

/* core/themes/classy/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_67d15f1b5e4406f86344824051b7057753d02c3411fb1599aeee847fb9da697c extends Twig_Template
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
        // line 17
        $context["title_classes"] = array(0 => "label", 1 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 22
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 23
            echo "  <h4";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 25
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
        // line 26
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 27
            echo "  <div class=\"description\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 27,  35 => 26,  31 => 25,  23 => 23,  21 => 22,  19 => 17,);
    }
}

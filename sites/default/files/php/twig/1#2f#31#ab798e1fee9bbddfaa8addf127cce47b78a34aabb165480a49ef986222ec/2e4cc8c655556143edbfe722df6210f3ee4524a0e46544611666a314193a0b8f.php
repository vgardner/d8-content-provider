<?php

/* core/themes/classy/templates/form/input.html.twig */
class __TwigTemplate_2f31ab798e1fee9bbddfaa8addf127cce47b78a34aabb165480a49ef986222ec extends Twig_Template
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
        // line 13
        echo "<input";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo " />";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 13,);
    }
}

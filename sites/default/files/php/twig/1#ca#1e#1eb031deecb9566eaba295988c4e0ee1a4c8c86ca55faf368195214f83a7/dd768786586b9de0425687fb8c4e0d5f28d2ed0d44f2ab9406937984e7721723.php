<?php

/* field--text.html.twig */
class __TwigTemplate_ca1e1eb031deecb9566eaba295988c4e0ee1a4c8c86ca55faf368195214f83a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("field.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix"), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "field--text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 20,);
    }
}

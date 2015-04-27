<?php

/* {# inline_template_start #}<strong>{% trans 'Title' %}</strong> */
class __TwigTemplate_5b5242f9e11b9bb7cacc662387d3987a831e898de735477dfb136afa3606dad7 extends Twig_Template
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
        // line 1
        echo "<strong>";
        echo t("Title", array());
        echo "</strong>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<strong>{% trans 'Title' %}</strong>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

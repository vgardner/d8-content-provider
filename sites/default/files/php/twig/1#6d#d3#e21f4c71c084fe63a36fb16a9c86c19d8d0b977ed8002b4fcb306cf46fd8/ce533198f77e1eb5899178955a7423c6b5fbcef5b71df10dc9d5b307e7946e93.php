<?php

/* core/themes/classy/templates/user/username.html.twig */
class __TwigTemplate_6dd3e21f4c71c084fe63a36fb16a9c86c19d8d0b977ed8002b4fcb306cf46fd8 extends Twig_Template
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
        // line 19
        if ((isset($context["link_path"]) ? $context["link_path"] : null)) {
            // line 20
            echo "<a";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "username"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 22
            echo "<span";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 22,  21 => 20,  19 => 19,);
    }
}

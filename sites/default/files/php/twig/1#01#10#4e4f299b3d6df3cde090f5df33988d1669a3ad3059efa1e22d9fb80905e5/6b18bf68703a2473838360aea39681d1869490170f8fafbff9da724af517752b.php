<?php

/* core/themes/classy/templates/user/user.html.twig */
class __TwigTemplate_01104e4f299b3d6df3cde090f5df33988d1669a3ad3059efa1e22d9fb80905e5 extends Twig_Template
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
        // line 24
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true);
        echo ">
  ";
        // line 25
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 26
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 28
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 28,  26 => 26,  24 => 25,  19 => 24,);
    }
}

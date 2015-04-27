<?php

/* core/themes/classy/templates/misc/feed-icon.html.twig */
class __TwigTemplate_d892c4e38d9e6dc4ba93905e34fb13f9666d44deb26c867470237528d4cb7549 extends Twig_Template
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
        // line 16
        echo "<a href=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 16,);
    }
}

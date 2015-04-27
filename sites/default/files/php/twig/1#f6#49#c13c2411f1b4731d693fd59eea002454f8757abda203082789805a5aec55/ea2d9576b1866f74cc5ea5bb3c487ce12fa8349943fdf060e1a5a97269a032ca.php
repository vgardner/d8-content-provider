<?php

/* core/modules/system/templates/admin-block.html.twig */
class __TwigTemplate_f649c13c2411f1b4731d693fd59eea002454f8757abda203082789805a5aec55 extends Twig_Template
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
        echo "<div class=\"panel\">
  ";
        // line 18
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array())) {
            // line 19
            echo "    <h3 class=\"panel__title\">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
            echo "</h3>
  ";
        }
        // line 21
        echo "  ";
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content", array())) {
            // line 22
            echo "    <div class=\"panel__content\">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content", array()), "html", null, true);
            echo "</div>
  ";
        } elseif ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array())) {
            // line 24
            echo "    <div class=\"panel__description\">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 26,  39 => 24,  33 => 22,  30 => 21,  24 => 19,  22 => 18,  19 => 17,);
    }
}

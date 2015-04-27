<?php

/* core/themes/classy/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_46fe3610a394d4418693bc32c6e25743df62e01ac5c14d33c9d0afe431b1017d extends Twig_Template
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
        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "advanced", "actions"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 23
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "advanced", array()), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    ";
        // line 26
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions", array()), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 26,  29 => 23,  23 => 20,  19 => 18,);
    }
}

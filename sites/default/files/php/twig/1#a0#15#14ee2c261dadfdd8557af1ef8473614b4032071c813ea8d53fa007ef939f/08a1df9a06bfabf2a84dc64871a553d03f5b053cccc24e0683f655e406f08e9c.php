<?php

/* core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_a01514ee2c261dadfdd8557af1ef8473614b4032071c813ea8d53fa007ef939f extends Twig_Template
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
        $context["classes"] = array(0 => "views-ui-display-tab-bucket", 1 => (((isset($context["name"]) ? $context["name"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["name"]) ? $context["name"] : null))) : ("")), 2 => (((isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 27
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 28
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 29
            echo "<h3>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>";
        }
        // line 31
        echo "  ";
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 32
            echo twig_drupal_escape_filter($this->env, (isset($context["actions"]) ? $context["actions"] : null), "html", null, true);
        }
        // line 34
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 34,  36 => 32,  33 => 31,  28 => 29,  26 => 28,  21 => 27,  19 => 21,);
    }
}

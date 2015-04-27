<?php

/* core/themes/classy/templates/form/textarea.html.twig */
class __TwigTemplate_36d4dac9cba7ff44d11239722abf6892df0e83d161a8489ff4229fd583ef963e extends Twig_Template
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
        $context["classes"] = array(0 => "form-textarea", 1 => (((isset($context["resizable"]) ? $context["resizable"] : null)) ? (("resize-" . (isset($context["resizable"]) ? $context["resizable"] : null))) : ("")), 2 => (((isset($context["required"]) ? $context["required"] : null)) ? ("required") : ("")));
        // line 23
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true);
        echo ">
  <textarea";
        // line 24
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 24,  21 => 23,  19 => 17,);
    }
}

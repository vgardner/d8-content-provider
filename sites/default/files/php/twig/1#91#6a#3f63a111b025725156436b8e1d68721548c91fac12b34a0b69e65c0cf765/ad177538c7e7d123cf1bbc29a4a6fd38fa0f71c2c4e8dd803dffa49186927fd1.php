<?php

/* core/themes/classy/templates/form/form-element.html.twig */
class __TwigTemplate_916a3f63a111b025725156436b8e1d68721548c91fac12b34a0b69e65c0cf765 extends Twig_Template
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
        // line 47
        $context["classes"] = array(0 => "form-item", 1 => ("form-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["type"]) ? $context["type"] : null))), 2 => ("form-item-" . \Drupal\Component\Utility\Html::getClass((isset($context["name"]) ? $context["name"] : null))), 3 => ((!twig_in_filter((isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 4 => ((((isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")));
        // line 56
        $context["description_classes"] = array(0 => "description", 1 => ((((isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 61
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 62
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 63
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 65
        echo "  ";
        if ((!twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null)))) {
            // line 66
            echo "    <span class=\"field-prefix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 68
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 69
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true);
            echo ">
      ";
            // line 70
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 73
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 74
        if ((!twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null)))) {
            // line 75
            echo "    <span class=\"field-suffix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 77
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 78
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 80
        echo "  ";
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 81
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true);
            echo ">
      ";
            // line 82
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 85
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 85,  89 => 82,  84 => 81,  81 => 80,  75 => 78,  72 => 77,  66 => 75,  64 => 74,  59 => 73,  53 => 70,  48 => 69,  45 => 68,  39 => 66,  36 => 65,  30 => 63,  28 => 62,  23 => 61,  21 => 56,  19 => 47,);
    }
}

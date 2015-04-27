<?php

/* field.html.twig */
class __TwigTemplate_5b03bca200df2d5ba1ca47d2e222b86347639abbdcd0d8d587ebad065efba4c8 extends Twig_Template
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
        // line 39
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 41
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass((isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ("field-name-" . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 3 => ("field-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_type"]) ? $context["field_type"] : null))), 4 => ("field-label-" . (isset($context["label_display"]) ? $context["label_display"] : null)), 5 => ((((isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")));
        // line 51
        $context["title_classes"] = array(0 => "field-label", 1 => ((((isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 56
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 57
        if ((!(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 58
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 60
        echo "  <div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field-items"), "method"), "html", null, true);
        echo ">
    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field-item"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 64,  49 => 62,  45 => 61,  40 => 60,  32 => 58,  30 => 57,  25 => 56,  23 => 51,  21 => 41,  19 => 39,);
    }
}

<?php

/* core/themes/classy/templates/field/field--comment.html.twig */
class __TwigTemplate_f8406314431afa1a736107b2aed98deb843ab80d15e8944a8d563068bb5cb7a4 extends Twig_Template
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
        // line 29
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 31
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass((isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ("field-name-" . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 3 => ("field-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_type"]) ? $context["field_type"] : null))), 4 => ("field-label-" . (isset($context["label_display"]) ? $context["label_display"] : null)), 5 => ((((isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")), 6 => "comment-wrapper");
        // line 42
        $context["title_classes"] = array(0 => "title", 1 => ((((isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 47
        echo "<section";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 48
        if (((isset($context["comments"]) ? $context["comments"] : null) && (!(isset($context["label_hidden"]) ? $context["label_hidden"] : null)))) {
            // line 49
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
            echo "
    <h2";
            // line 50
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
    ";
            // line 51
            echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
            echo "
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        echo twig_drupal_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
        echo "

  ";
        // line 56
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 57
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "title", 1 => "comment-form__title"), "method"), "html", null, true);
            echo ">";
            echo twig_render_var(t("Add new comment"));
            echo "</h2>
    ";
            // line 58
            echo twig_drupal_escape_filter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true);
            echo "
  ";
        }
        // line 60
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 60,  65 => 58,  58 => 57,  56 => 56,  51 => 54,  48 => 53,  43 => 51,  37 => 50,  32 => 49,  30 => 48,  25 => 47,  23 => 42,  21 => 31,  19 => 29,);
    }
}

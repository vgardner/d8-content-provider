<?php

/* core/themes/classy/templates/content/node.html.twig */
class __TwigTemplate_19b1f52ea4c2a60cac8b8976367b11ef7bd72a5aab4caa8ba98c0ac5c5a270b0 extends Twig_Template
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
        // line 70
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (((!$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"))) ? ("node--unpublished") : ("")), 5 => (((isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 79
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  ";
        // line 81
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 82
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 83
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">
      <a href=\"";
            // line 84
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 87
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 89
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 90
            echo "    <footer class=\"node__meta\">
      ";
            // line 91
            echo twig_drupal_escape_filter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
      <div";
            // line 92
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node__submitted"), "method"), "html", null, true);
            echo ">
        ";
            // line 93
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 94
            echo "        ";
            echo twig_drupal_escape_filter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 98
        echo "
  <div";
        // line 99
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content"), "method"), "html", null, true);
        echo ">
    ";
        // line 100
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 103
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 104
            echo "    <div class=\"node__links\">
      ";
            // line 105
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 108
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 108,  93 => 105,  90 => 104,  88 => 103,  82 => 100,  78 => 99,  75 => 98,  67 => 94,  65 => 93,  61 => 92,  57 => 91,  54 => 90,  52 => 89,  46 => 87,  38 => 84,  33 => 83,  31 => 82,  27 => 81,  21 => 79,  19 => 70,);
    }
}

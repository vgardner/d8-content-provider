<?php

/* core/themes/classy/templates/navigation/toolbar.html.twig */
class __TwigTemplate_c6d86eb70d62ef6ad855d2a5bc5b5a96a9000ba2c46324c7b33a307d7662ab24 extends Twig_Template
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
        // line 23
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "toolbar"), "method"), "html", null, true);
        echo ">
  <nav";
        // line 24
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null), "addClass", array(0 => "toolbar-bar", 1 => "clearfix"), "method"), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 25
        echo twig_drupal_escape_filter($this->env, (isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null), "html", null, true);
        echo "</h2>
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 27
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tab"], "attributes", array()), "addClass", array(0 => "toolbar-tab"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tab"], "link", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </nav>
  ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 31
            echo "    ";
            ob_start();
            // line 32
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tray"], "attributes", array()), "html", null, true);
            echo ">
    ";
            // line 33
            if ($this->getAttribute($context["tray"], "label", array())) {
                // line 34
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tray"], "label", array()), "html", null, true);
                echo "\">
          <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 35
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tray"], "label", array()), "html", null, true);
                echo "</h3>
    ";
            } else {
                // line 37
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
    ";
            }
            // line 39
            echo "        ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tray"], "links", array()), "html", null, true);
            echo "
      </nav>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 43
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["remainder"]) ? $context["remainder"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  86 => 43,  78 => 39,  74 => 37,  69 => 35,  64 => 34,  62 => 33,  57 => 32,  54 => 31,  50 => 30,  47 => 29,  36 => 27,  32 => 26,  28 => 25,  24 => 24,  19 => 23,);
    }
}

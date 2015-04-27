<?php

/* core/themes/classy/templates/content-edit/filter-tips.html.twig */
class __TwigTemplate_b42674a099b68d96c831e20ff08ea7b539fb892a3a2cc1fab229178e5f4a8d7c extends Twig_Template
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
        // line 19
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 20
            echo "  <h2>";
            echo twig_render_var(t("Text Formats"));
            echo "</h2>
";
        }
        // line 22
        echo "
";
        // line 23
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 24
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 25
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 27
            echo "
  ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 29
                echo "    ";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 30
                    echo "      ";
                    // line 31
                    $context["tip_classes"] = array(0 => "filter-type", 1 => ("filter-" . \Drupal\Component\Utility\Html::getClass($context["name"])));
                    // line 36
                    echo "      <div";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tip"], "attributes", array()), "addClass", array(0 => (isset($context["tip_classes"]) ? $context["tip_classes"] : null)), "method"), "html", null, true);
                    echo ">
      <h3>";
                    // line 37
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["tip"], "name", array()), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 39
                echo "
    ";
                // line 40
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", array()))) {
                    // line 41
                    echo "      <ul class=\"tips\">
      ";
                    // line 42
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 43
                        echo "        ";
                        // line 44
                        $context["item_classes"] = array(0 => (((isset($context["long"]) ? $context["long"] : null)) ? (("filter-" . strtr($this->getAttribute($context["item"], "id", array()), array("/" => "-")))) : ("")));
                        // line 48
                        echo "        <li";
                        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true);
                        echo ">";
                        echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "tip", array()), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "      </ul>
    ";
                }
                // line 52
                echo "
    ";
                // line 53
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 54
                    echo "      </div>
    ";
                }
                // line 56
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
  ";
            // line 58
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 59
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 59,  112 => 58,  109 => 57,  103 => 56,  99 => 54,  97 => 53,  94 => 52,  90 => 50,  79 => 48,  77 => 44,  75 => 43,  71 => 42,  68 => 41,  66 => 40,  63 => 39,  58 => 37,  53 => 36,  51 => 31,  49 => 30,  46 => 29,  42 => 28,  39 => 27,  35 => 25,  32 => 24,  30 => 23,  27 => 22,  21 => 20,  19 => 19,);
    }
}

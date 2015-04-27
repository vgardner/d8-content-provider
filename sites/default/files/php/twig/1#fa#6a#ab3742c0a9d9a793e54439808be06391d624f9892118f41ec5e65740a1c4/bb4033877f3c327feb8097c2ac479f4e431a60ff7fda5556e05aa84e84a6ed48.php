<?php

/* core/modules/views/templates/views-view-table.html.twig */
class __TwigTemplate_fa6aab3742c0a9d9a793e54439808be06391d624f9892118f41ec5e65740a1c4 extends Twig_Template
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
        // line 36
        $context["classes"] = array(0 => "views-table", 1 => "views-view-table", 2 => ("cols-" . twig_length_filter($this->env, (isset($context["header"]) ? $context["header"] : null))), 3 => (((isset($context["responsive"]) ? $context["responsive"] : null)) ? ("responsive-enabled") : ("")), 4 => (((isset($context["sticky"]) ? $context["sticky"] : null)) ? ("sticky-enabled") : ("")));
        // line 44
        echo "<table";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 45
        if ((isset($context["caption_needed"]) ? $context["caption_needed"] : null)) {
            // line 46
            echo "    <caption>
    ";
            // line 47
            if ((isset($context["caption"]) ? $context["caption"] : null)) {
                // line 48
                echo "      ";
                echo twig_drupal_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
                echo "
    ";
            } else {
                // line 50
                echo "      ";
                echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
    ";
            }
            // line 52
            echo "    ";
            if (((!twig_test_empty((isset($context["summary"]) ? $context["summary"] : null))) || (!twig_test_empty((isset($context["description"]) ? $context["description"] : null))))) {
                // line 53
                echo "      <details>
        ";
                // line 54
                if ((!twig_test_empty((isset($context["summary"]) ? $context["summary"] : null)))) {
                    // line 55
                    echo "          <summary>";
                    echo twig_drupal_escape_filter($this->env, (isset($context["summary"]) ? $context["summary"] : null), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 57
                echo "        ";
                if ((!twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
                    // line 58
                    echo "          ";
                    echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
                    echo "
        ";
                }
                // line 60
                echo "      </details>
    ";
            }
            // line 62
            echo "    </caption>
  ";
        }
        // line 64
        echo "  ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 65
            echo "    <thead>
      <tr>
        ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 68
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 69
                    echo "            ";
                    // line 70
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), $context["key"], array(), "array")));
                    // line 75
                    echo "          ";
                }
                // line 76
                echo "          <th";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "html", null, true);
                echo " scope=\"col\">
            ";
                // line 77
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true);
                echo "
          </th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "      </tr>
    </thead>
  ";
        }
        // line 83
        echo "  <tbody>
    ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 85
            echo "      <tr";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
            echo ">
        ";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 87
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 88
                    echo "            ";
                    // line 89
                    $context["column_classes"] = array(0 => "views-field");
                    // line 93
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 94
                        echo "              ";
                        $context["column_classes"] = twig_array_merge((isset($context["column_classes"]) ? $context["column_classes"] : null), array(0 => ("views-field-" . $context["field"])));
                        // line 95
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "          ";
                }
                // line 97
                echo "          <td";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "html", null, true);
                echo ">
            ";
                // line 98
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true);
                echo "
          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 103,  170 => 101,  161 => 98,  156 => 97,  153 => 96,  147 => 95,  144 => 94,  139 => 93,  137 => 89,  135 => 88,  132 => 87,  128 => 86,  123 => 85,  119 => 84,  116 => 83,  111 => 80,  102 => 77,  97 => 76,  94 => 75,  92 => 70,  90 => 69,  87 => 68,  83 => 67,  79 => 65,  76 => 64,  72 => 62,  68 => 60,  62 => 58,  59 => 57,  53 => 55,  51 => 54,  48 => 53,  45 => 52,  39 => 50,  33 => 48,  31 => 47,  28 => 46,  26 => 45,  21 => 44,  19 => 36,);
    }
}

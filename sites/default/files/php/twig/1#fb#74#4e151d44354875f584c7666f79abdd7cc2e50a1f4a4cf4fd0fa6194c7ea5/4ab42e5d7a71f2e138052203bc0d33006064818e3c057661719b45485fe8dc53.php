<?php

/* core/themes/seven/templates/admin-block-content.html.twig */
class __TwigTemplate_fb744e151d44354875f584c7666f79abdd7cc2e50a1f4a4cf4fd0fa6194c7ea5 extends Twig_Template
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
        $context["classes"] = array(0 => "admin-list", 1 => (((isset($context["compact"]) ? $context["compact"] : null)) ? ("compact") : ("")));
        // line 26
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 27
            echo "  <ul";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "      <li><a href=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\"><span class=\"label\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</span><div class=\"description\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 31,  32 => 29,  28 => 28,  23 => 27,  21 => 26,  19 => 21,);
    }
}

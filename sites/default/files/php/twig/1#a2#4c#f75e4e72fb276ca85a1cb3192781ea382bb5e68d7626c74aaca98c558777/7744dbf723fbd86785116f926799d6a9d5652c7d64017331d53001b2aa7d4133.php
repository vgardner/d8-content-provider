<?php

/* core/modules/views/templates/views-mini-pager.html.twig */
class __TwigTemplate_a24cf75e4e72fb276ca85a1cb3192781ea382bb5e68d7626c74aaca98c558777 extends Twig_Template
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
        // line 14
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()))) {
            // line 15
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">";
            // line 16
            echo twig_render_var(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items\">
      ";
            // line 18
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 19
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 20
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 21
                echo twig_render_var(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 22
                echo twig_drupal_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 26
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array())) {
                // line 27
                echo "        <li class=\"pager__item is-active\">
          ";
                // line 28
                echo t("Page @items.current", array("@items.current" => $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array()), ));
                // line 31
                echo "        </li>
      ";
            }
            // line 33
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 34
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 35
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 36
                echo twig_render_var(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 37
                echo twig_drupal_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("››"))) : (t("››"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 41
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 41,  83 => 37,  79 => 36,  71 => 35,  68 => 34,  65 => 33,  61 => 31,  59 => 28,  56 => 27,  53 => 26,  46 => 22,  42 => 21,  34 => 20,  31 => 19,  29 => 18,  24 => 16,  21 => 15,  19 => 14,);
    }
}

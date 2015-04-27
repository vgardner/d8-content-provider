<?php

/* core/themes/seven/templates/tablesort-indicator.html.twig */
class __TwigTemplate_c78bd87b7d800e6378e2b7e94c20d9979f5ac5145342492d93e179918b198ecb extends Twig_Template
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
        // line 12
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 13
            echo "<img src=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["arrow_asc"]) ? $context["arrow_asc"] : null), "html", null, true);
            echo "\" width=\"9\" height=\"5\" alt=\"";
            echo twig_render_var(t("Sort ascending"));
            echo "\" title=\"";
            echo twig_render_var(t("Sort ascending"));
            echo "\" />
";
        } else {
            // line 15
            echo "<img src=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["arrow_desc"]) ? $context["arrow_desc"] : null), "html", null, true);
            echo "\" width=\"9\" height=\"5\" alt=\"";
            echo twig_render_var(t("Sort descending"));
            echo "\" title=\"";
            echo twig_render_var(t("Sort descending"));
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 15,  21 => 13,  19 => 12,);
    }
}

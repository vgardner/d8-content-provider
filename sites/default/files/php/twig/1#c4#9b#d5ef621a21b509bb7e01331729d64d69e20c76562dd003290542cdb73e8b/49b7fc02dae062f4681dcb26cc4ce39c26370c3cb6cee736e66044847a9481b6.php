<?php

/* {# inline_template_start #}<div class="permission"><span class="title">{{ title }}</span>{% if description or warning %}<div class="description">{% if warning %}<em class="permission-warning">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div> */
class __TwigTemplate_c49bd5ef621a21b509bb7e01331729d64d69e20c76562dd003290542cdb73e8b extends Twig_Template
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
        // line 1
        echo "<div class=\"permission\"><span class=\"title\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</span>";
        if (((isset($context["description"]) ? $context["description"] : null) || (isset($context["warning"]) ? $context["warning"] : null))) {
            echo "<div class=\"description\">";
            if ((isset($context["warning"]) ? $context["warning"] : null)) {
                echo "<em class=\"permission-warning\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : null), "html", null, true);
                echo "</em> ";
            }
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>";
        }
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"permission\"><span class=\"title\">{{ title }}</span>{% if description or warning %}<div class=\"description\">{% if warning %}<em class=\"permission-warning\">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

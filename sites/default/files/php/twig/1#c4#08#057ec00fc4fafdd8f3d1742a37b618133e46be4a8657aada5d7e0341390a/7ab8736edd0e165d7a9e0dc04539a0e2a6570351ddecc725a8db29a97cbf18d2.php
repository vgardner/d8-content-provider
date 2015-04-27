<?php

/* core/themes/seven/templates/node-add-list.html.twig */
class __TwigTemplate_c408057ec00fc4fafdd8f3d1742a37b618133e46be4a8657aada5d7e0341390a extends Twig_Template
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
        // line 16
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 17
            echo "  <ul class=\"admin-list\">
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 19
                echo "      <li class=\"clearfix\"><a href=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["type"], "url", array()), "html", null, true);
                echo "\"><span class=\"label\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["type"], "label", array()), "html", null, true);
                echo "</span><div class=\"description\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true);
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  </ul>
";
        } else {
            // line 23
            echo "  <p>
    ";
            // line 24
            $context["create_content"] = $this->env->getExtension('drupal_core')->getPath("node.type_add");
            // line 25
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" => (isset($context["create_content"]) ? $context["create_content"] : null), ));
            // line 28
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 28,  50 => 25,  48 => 24,  45 => 23,  41 => 21,  28 => 19,  24 => 18,  21 => 17,  19 => 16,);
    }
}

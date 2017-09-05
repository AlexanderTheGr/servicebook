<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_84a1368baf6069a65eece361f5aff869b36ea5b1b90ffa290dc55ab40c01b757 extends Twig_Template
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
        $__internal_692a077b23802ed6324e373036db57160dfc4582034f2c0312ad85cd9ad56879 = $this->env->getExtension("native_profiler");
        $__internal_692a077b23802ed6324e373036db57160dfc4582034f2c0312ad85cd9ad56879->enter($__internal_692a077b23802ed6324e373036db57160dfc4582034f2c0312ad85cd9ad56879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_692a077b23802ed6324e373036db57160dfc4582034f2c0312ad85cd9ad56879->leave($__internal_692a077b23802ed6324e373036db57160dfc4582034f2c0312ad85cd9ad56879_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

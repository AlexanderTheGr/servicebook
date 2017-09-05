<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_413a89b1474cb0d037b505849f466ffbda9cda776bc613e04020887f4357d42f extends Twig_Template
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
        $__internal_a375cf5ffbf22584c584174f93d3ac6e973a6630389238665cc4fc4035f7f3d5 = $this->env->getExtension("native_profiler");
        $__internal_a375cf5ffbf22584c584174f93d3ac6e973a6630389238665cc4fc4035f7f3d5->enter($__internal_a375cf5ffbf22584c584174f93d3ac6e973a6630389238665cc4fc4035f7f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a375cf5ffbf22584c584174f93d3ac6e973a6630389238665cc4fc4035f7f3d5->leave($__internal_a375cf5ffbf22584c584174f93d3ac6e973a6630389238665cc4fc4035f7f3d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

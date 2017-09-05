<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a83013c27e4969d8c08ff6ab97956a1c327adb787a297cec2424d2e977ecf57d extends Twig_Template
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
        $__internal_6476a54b543821725d159400b9edd5268496a1c766806fa2a049d67f56c1e103 = $this->env->getExtension("native_profiler");
        $__internal_6476a54b543821725d159400b9edd5268496a1c766806fa2a049d67f56c1e103->enter($__internal_6476a54b543821725d159400b9edd5268496a1c766806fa2a049d67f56c1e103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6476a54b543821725d159400b9edd5268496a1c766806fa2a049d67f56c1e103->leave($__internal_6476a54b543821725d159400b9edd5268496a1c766806fa2a049d67f56c1e103_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */

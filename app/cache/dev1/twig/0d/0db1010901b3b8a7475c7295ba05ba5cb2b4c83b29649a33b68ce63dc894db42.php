<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_43ae9074ef30af715aa8320ee68fc62faac07da40e4663c532e47f3db1f09314 extends Twig_Template
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
        $__internal_040bef504d6873f7c815538bd1dd5e86f9bf8de1b2bee6fe2ed2d6b21c829b8e = $this->env->getExtension("native_profiler");
        $__internal_040bef504d6873f7c815538bd1dd5e86f9bf8de1b2bee6fe2ed2d6b21c829b8e->enter($__internal_040bef504d6873f7c815538bd1dd5e86f9bf8de1b2bee6fe2ed2d6b21c829b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_040bef504d6873f7c815538bd1dd5e86f9bf8de1b2bee6fe2ed2d6b21c829b8e->leave($__internal_040bef504d6873f7c815538bd1dd5e86f9bf8de1b2bee6fe2ed2d6b21c829b8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

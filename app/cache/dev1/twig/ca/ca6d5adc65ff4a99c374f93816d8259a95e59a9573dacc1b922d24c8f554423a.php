<?php

/* AccessBundle:Default:index.html.twig */
class __TwigTemplate_c877906eb66d20ef4944b80aee6e0c31be2e557fe218ffadea2855980c47c2f3 extends Twig_Template
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
        $__internal_7df94bcab8f1124b87d878739440ffb0f06effbdb0317a77b9569629cf34e4fa = $this->env->getExtension("native_profiler");
        $__internal_7df94bcab8f1124b87d878739440ffb0f06effbdb0317a77b9569629cf34e4fa->enter($__internal_7df94bcab8f1124b87d878739440ffb0f06effbdb0317a77b9569629cf34e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_7df94bcab8f1124b87d878739440ffb0f06effbdb0317a77b9569629cf34e4fa->leave($__internal_7df94bcab8f1124b87d878739440ffb0f06effbdb0317a77b9569629cf34e4fa_prof);

    }

    public function getTemplateName()
    {
        return "AccessBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */

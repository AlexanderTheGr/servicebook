<?php

/* EavBundle:Default:index.html.twig */
class __TwigTemplate_26300d974922a92993805392af9ae2211114b598fa5d30c089331bf4ed67c36e extends Twig_Template
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
        $__internal_04f8031e1f434d95a30ebebbda82cb4a35673b55f54c2ff539cdf3e555548e32 = $this->env->getExtension("native_profiler");
        $__internal_04f8031e1f434d95a30ebebbda82cb4a35673b55f54c2ff539cdf3e555548e32->enter($__internal_04f8031e1f434d95a30ebebbda82cb4a35673b55f54c2ff539cdf3e555548e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_04f8031e1f434d95a30ebebbda82cb4a35673b55f54c2ff539cdf3e555548e32->leave($__internal_04f8031e1f434d95a30ebebbda82cb4a35673b55f54c2ff539cdf3e555548e32_prof);

    }

    public function getTemplateName()
    {
        return "EavBundle:Default:index.html.twig";
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

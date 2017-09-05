<?php

/* :customer:index.html.twig */
class __TwigTemplate_8957f94e648663b6099ab37e7d075a249ea18c482ae6adbdf1b49e4cb41bdf44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acfea683f9008607a4c7bd9a371b3a1077b3b18f9cfb1cfe1305ff0635d7be45 = $this->env->getExtension("native_profiler");
        $__internal_acfea683f9008607a4c7bd9a371b3a1077b3b18f9cfb1cfe1305ff0635d7be45->enter($__internal_acfea683f9008607a4c7bd9a371b3a1077b3b18f9cfb1cfe1305ff0635d7be45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acfea683f9008607a4c7bd9a371b3a1077b3b18f9cfb1cfe1305ff0635d7be45->leave($__internal_acfea683f9008607a4c7bd9a371b3a1077b3b18f9cfb1cfe1305ff0635d7be45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a9d7bb140e9b6454cf9d6c3d0d7e6711d8028955c6649445e0f1d3c976cf008 = $this->env->getExtension("native_profiler");
        $__internal_2a9d7bb140e9b6454cf9d6c3d0d7e6711d8028955c6649445e0f1d3c976cf008->enter($__internal_2a9d7bb140e9b6454cf9d6c3d0d7e6711d8028955c6649445e0f1d3c976cf008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Customer:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_2a9d7bb140e9b6454cf9d6c3d0d7e6711d8028955c6649445e0f1d3c976cf008->leave($__internal_2a9d7bb140e9b6454cf9d6c3d0d7e6711d8028955c6649445e0f1d3c976cf008_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce62660b87267935cec1cb119f9a7af39a216c0a3cf70a958b904808377d18f7 = $this->env->getExtension("native_profiler");
        $__internal_ce62660b87267935cec1cb119f9a7af39a216c0a3cf70a958b904808377d18f7->enter($__internal_ce62660b87267935cec1cb119f9a7af39a216c0a3cf70a958b904808377d18f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_ce62660b87267935cec1cb119f9a7af39a216c0a3cf70a958b904808377d18f7->leave($__internal_ce62660b87267935cec1cb119f9a7af39a216c0a3cf70a958b904808377d18f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb6d1bc4325c9f7970b5ca78652fa387245716e421ceeed77cd08d0598d95a18 = $this->env->getExtension("native_profiler");
        $__internal_eb6d1bc4325c9f7970b5ca78652fa387245716e421ceeed77cd08d0598d95a18->enter($__internal_eb6d1bc4325c9f7970b5ca78652fa387245716e421ceeed77cd08d0598d95a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script>\$(\".";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexDataTable(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\");</script>
";
        
        $__internal_eb6d1bc4325c9f7970b5ca78652fa387245716e421ceeed77cd08d0598d95a18->leave($__internal_eb6d1bc4325c9f7970b5ca78652fa387245716e421ceeed77cd08d0598d95a18_prof);

    }

    public function getTemplateName()
    {
        return ":customer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 11,  57 => 8,  51 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ render(controller('PartsboxBundle:Customer:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>$(".{{ctrl}}").alexDataTable("{{app}}", "{{ctrl}}", "{{url}}", "{{view}}");</script>*/
/* {% endblock %}*/
/* */

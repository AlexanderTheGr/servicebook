<?php

/* PartsboxBundle:Order:index.html.twig */
class __TwigTemplate_fe8c70e0732a308b2701bbcad326c114c0bcd8706debf0528ca8769354fbc6b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartsboxBundle:Order:index.html.twig", 1);
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
        $__internal_d8ace91e6f1b4a7192c4362bcdc75ab7663e073d70edc9ae533271808c9a1d9c = $this->env->getExtension("native_profiler");
        $__internal_d8ace91e6f1b4a7192c4362bcdc75ab7663e073d70edc9ae533271808c9a1d9c->enter($__internal_d8ace91e6f1b4a7192c4362bcdc75ab7663e073d70edc9ae533271808c9a1d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Order:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ace91e6f1b4a7192c4362bcdc75ab7663e073d70edc9ae533271808c9a1d9c->leave($__internal_d8ace91e6f1b4a7192c4362bcdc75ab7663e073d70edc9ae533271808c9a1d9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad743acc11b57b70b0de085a10be91242660e24a2ee297d3b0df996ec6397a6f = $this->env->getExtension("native_profiler");
        $__internal_ad743acc11b57b70b0de085a10be91242660e24a2ee297d3b0df996ec6397a6f->enter($__internal_ad743acc11b57b70b0de085a10be91242660e24a2ee297d3b0df996ec6397a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Order:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_ad743acc11b57b70b0de085a10be91242660e24a2ee297d3b0df996ec6397a6f->leave($__internal_ad743acc11b57b70b0de085a10be91242660e24a2ee297d3b0df996ec6397a6f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_917c774ca8c4ea42640eaab662f338c5eeefabcc98260b78f2d6751d5ef2429b = $this->env->getExtension("native_profiler");
        $__internal_917c774ca8c4ea42640eaab662f338c5eeefabcc98260b78f2d6751d5ef2429b->enter($__internal_917c774ca8c4ea42640eaab662f338c5eeefabcc98260b78f2d6751d5ef2429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_917c774ca8c4ea42640eaab662f338c5eeefabcc98260b78f2d6751d5ef2429b->leave($__internal_917c774ca8c4ea42640eaab662f338c5eeefabcc98260b78f2d6751d5ef2429b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0aba95c3e901467df19c78ee5756cc57d7634c9e4e0c602da4017c0649623a18 = $this->env->getExtension("native_profiler");
        $__internal_0aba95c3e901467df19c78ee5756cc57d7634c9e4e0c602da4017c0649623a18->enter($__internal_0aba95c3e901467df19c78ee5756cc57d7634c9e4e0c602da4017c0649623a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0aba95c3e901467df19c78ee5756cc57d7634c9e4e0c602da4017c0649623a18->leave($__internal_0aba95c3e901467df19c78ee5756cc57d7634c9e4e0c602da4017c0649623a18_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Order:index.html.twig";
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
/* {{ render(controller('PartsboxBundle:Order:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
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

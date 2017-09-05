<?php

/* PartsboxBundle:Customer:index.html.twig */
class __TwigTemplate_cf662bf9c6e9ff7a459b113ac182be93c4bbe6867866e7af34bba2b98169fd31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartsboxBundle:Customer:index.html.twig", 1);
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
        $__internal_d7a6338ef9ffa6f907f4dd9c576330590bc5c4f7c44663653c4286f091e36c34 = $this->env->getExtension("native_profiler");
        $__internal_d7a6338ef9ffa6f907f4dd9c576330590bc5c4f7c44663653c4286f091e36c34->enter($__internal_d7a6338ef9ffa6f907f4dd9c576330590bc5c4f7c44663653c4286f091e36c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a6338ef9ffa6f907f4dd9c576330590bc5c4f7c44663653c4286f091e36c34->leave($__internal_d7a6338ef9ffa6f907f4dd9c576330590bc5c4f7c44663653c4286f091e36c34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_956b1d1130048bbb212266061394d1c297c5de0b5871bc9deacda76eb811ed7e = $this->env->getExtension("native_profiler");
        $__internal_956b1d1130048bbb212266061394d1c297c5de0b5871bc9deacda76eb811ed7e->enter($__internal_956b1d1130048bbb212266061394d1c297c5de0b5871bc9deacda76eb811ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Order:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_956b1d1130048bbb212266061394d1c297c5de0b5871bc9deacda76eb811ed7e->leave($__internal_956b1d1130048bbb212266061394d1c297c5de0b5871bc9deacda76eb811ed7e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09af050b4b447cc237816cb812983414a46596df912644e5748ff039891552a0 = $this->env->getExtension("native_profiler");
        $__internal_09af050b4b447cc237816cb812983414a46596df912644e5748ff039891552a0->enter($__internal_09af050b4b447cc237816cb812983414a46596df912644e5748ff039891552a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_09af050b4b447cc237816cb812983414a46596df912644e5748ff039891552a0->leave($__internal_09af050b4b447cc237816cb812983414a46596df912644e5748ff039891552a0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b83d6c7c6667735f64dde426ed9131b63454a6b83192859fb6b88c1601e6eb71 = $this->env->getExtension("native_profiler");
        $__internal_b83d6c7c6667735f64dde426ed9131b63454a6b83192859fb6b88c1601e6eb71->enter($__internal_b83d6c7c6667735f64dde426ed9131b63454a6b83192859fb6b88c1601e6eb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b83d6c7c6667735f64dde426ed9131b63454a6b83192859fb6b88c1601e6eb71->leave($__internal_b83d6c7c6667735f64dde426ed9131b63454a6b83192859fb6b88c1601e6eb71_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Customer:index.html.twig";
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

<?php

/* customer/view.html.twig */
class __TwigTemplate_afdf56661d22fd6babf4558804a4dbf253a2b43c3d9adf8a796154e754b7cb6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/view.html.twig", 1);
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
        $__internal_4417557a2a3cfdfabad0eb0a0957bcc811a360f835cebecc9f883ae0e3c24335 = $this->env->getExtension("native_profiler");
        $__internal_4417557a2a3cfdfabad0eb0a0957bcc811a360f835cebecc9f883ae0e3c24335->enter($__internal_4417557a2a3cfdfabad0eb0a0957bcc811a360f835cebecc9f883ae0e3c24335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4417557a2a3cfdfabad0eb0a0957bcc811a360f835cebecc9f883ae0e3c24335->leave($__internal_4417557a2a3cfdfabad0eb0a0957bcc811a360f835cebecc9f883ae0e3c24335_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c5ed6645bac294d00f539e8d4741876bd65c50a66da807037e770df8ebca577 = $this->env->getExtension("native_profiler");
        $__internal_0c5ed6645bac294d00f539e8d4741876bd65c50a66da807037e770df8ebca577->enter($__internal_0c5ed6645bac294d00f539e8d4741876bd65c50a66da807037e770df8ebca577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Customer:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_0c5ed6645bac294d00f539e8d4741876bd65c50a66da807037e770df8ebca577->leave($__internal_0c5ed6645bac294d00f539e8d4741876bd65c50a66da807037e770df8ebca577_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_325a0eafde408ea90d45ada6ec18632db585ba217712be099ef152ab0bac15ab = $this->env->getExtension("native_profiler");
        $__internal_325a0eafde408ea90d45ada6ec18632db585ba217712be099ef152ab0bac15ab->enter($__internal_325a0eafde408ea90d45ada6ec18632db585ba217712be099ef152ab0bac15ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_325a0eafde408ea90d45ada6ec18632db585ba217712be099ef152ab0bac15ab->leave($__internal_325a0eafde408ea90d45ada6ec18632db585ba217712be099ef152ab0bac15ab_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01c0135e49348cffe83e59b6cc49541abb89764b5672dda40506780e7cd20977 = $this->env->getExtension("native_profiler");
        $__internal_01c0135e49348cffe83e59b6cc49541abb89764b5672dda40506780e7cd20977->enter($__internal_01c0135e49348cffe83e59b6cc49541abb89764b5672dda40506780e7cd20977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "<script>\$(\".";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexTabs(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\",\"";
        echo twig_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), "html", null, true);
        echo "\");</script>
";
        
        $__internal_01c0135e49348cffe83e59b6cc49541abb89764b5672dda40506780e7cd20977->leave($__internal_01c0135e49348cffe83e59b6cc49541abb89764b5672dda40506780e7cd20977_prof);

    }

    public function getTemplateName()
    {
        return "customer/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  62 => 7,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{ render(controller('PartsboxBundle:Customer:tabs', { 'ctrl': ctrl,'app':app,'url':url }) ) }}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>$(".{{ctrl}}").alexTabs("{{app}}", "{{ctrl}}", "{{url}}","{{tabs}}");</script>*/
/* {% endblock %}*/
/* */

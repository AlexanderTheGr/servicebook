<?php

/* :customer:view.html.twig */
class __TwigTemplate_5efa7fd63ebc06a0763026c4770d4391d27e2549b3933ad310455b62d6a32119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":customer:view.html.twig", 1);
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
        $__internal_d03d684d0f85e1c9ed3313137fb9d932cab30111a13c123f6485ae688725a839 = $this->env->getExtension("native_profiler");
        $__internal_d03d684d0f85e1c9ed3313137fb9d932cab30111a13c123f6485ae688725a839->enter($__internal_d03d684d0f85e1c9ed3313137fb9d932cab30111a13c123f6485ae688725a839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":customer:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03d684d0f85e1c9ed3313137fb9d932cab30111a13c123f6485ae688725a839->leave($__internal_d03d684d0f85e1c9ed3313137fb9d932cab30111a13c123f6485ae688725a839_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc2f1924bf3648bf4892134c3756174e862896696048ff94b5c87205d3d016b0 = $this->env->getExtension("native_profiler");
        $__internal_fc2f1924bf3648bf4892134c3756174e862896696048ff94b5c87205d3d016b0->enter($__internal_fc2f1924bf3648bf4892134c3756174e862896696048ff94b5c87205d3d016b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Customer:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_fc2f1924bf3648bf4892134c3756174e862896696048ff94b5c87205d3d016b0->leave($__internal_fc2f1924bf3648bf4892134c3756174e862896696048ff94b5c87205d3d016b0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84bdbce47e396b5c373018a556e75e435df299a6cf4d20c381ece257db446be6 = $this->env->getExtension("native_profiler");
        $__internal_84bdbce47e396b5c373018a556e75e435df299a6cf4d20c381ece257db446be6->enter($__internal_84bdbce47e396b5c373018a556e75e435df299a6cf4d20c381ece257db446be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_84bdbce47e396b5c373018a556e75e435df299a6cf4d20c381ece257db446be6->leave($__internal_84bdbce47e396b5c373018a556e75e435df299a6cf4d20c381ece257db446be6_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e841d8ca602aad367117d02e70ad6aed9f290fb48d51ed06f2c800eceda4586 = $this->env->getExtension("native_profiler");
        $__internal_6e841d8ca602aad367117d02e70ad6aed9f290fb48d51ed06f2c800eceda4586->enter($__internal_6e841d8ca602aad367117d02e70ad6aed9f290fb48d51ed06f2c800eceda4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6e841d8ca602aad367117d02e70ad6aed9f290fb48d51ed06f2c800eceda4586->leave($__internal_6e841d8ca602aad367117d02e70ad6aed9f290fb48d51ed06f2c800eceda4586_prof);

    }

    public function getTemplateName()
    {
        return ":customer:view.html.twig";
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

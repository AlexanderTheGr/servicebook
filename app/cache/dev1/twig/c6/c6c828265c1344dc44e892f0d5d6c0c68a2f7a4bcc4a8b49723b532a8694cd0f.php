<?php

/* PartsboxBundle:Order:view.html.twig */
class __TwigTemplate_0c04504061d0e5a7c9c5ba1b17d63e89f50b4b0b3f9408db0e15859e94637e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PartsboxBundle:Order:view.html.twig", 1);
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
        $__internal_e812ad9cc90b3ffa866c1efda81ab404ce3fd3402593039aff16365605bebff8 = $this->env->getExtension("native_profiler");
        $__internal_e812ad9cc90b3ffa866c1efda81ab404ce3fd3402593039aff16365605bebff8->enter($__internal_e812ad9cc90b3ffa866c1efda81ab404ce3fd3402593039aff16365605bebff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Order:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e812ad9cc90b3ffa866c1efda81ab404ce3fd3402593039aff16365605bebff8->leave($__internal_e812ad9cc90b3ffa866c1efda81ab404ce3fd3402593039aff16365605bebff8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d7083ab83732e0e509341eb934dc26433ef616f8fab75de5b6c48a3b1040c95 = $this->env->getExtension("native_profiler");
        $__internal_4d7083ab83732e0e509341eb934dc26433ef616f8fab75de5b6c48a3b1040c95->enter($__internal_4d7083ab83732e0e509341eb934dc26433ef616f8fab75de5b6c48a3b1040c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Order:tabs", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "tabs" => (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")))));
        echo "
";
        
        $__internal_4d7083ab83732e0e509341eb934dc26433ef616f8fab75de5b6c48a3b1040c95->leave($__internal_4d7083ab83732e0e509341eb934dc26433ef616f8fab75de5b6c48a3b1040c95_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2e6ddbfb404f9f767c4e46273db5a0c78c480e00985da5515cac0e7acb25b27 = $this->env->getExtension("native_profiler");
        $__internal_e2e6ddbfb404f9f767c4e46273db5a0c78c480e00985da5515cac0e7acb25b27->enter($__internal_e2e6ddbfb404f9f767c4e46273db5a0c78c480e00985da5515cac0e7acb25b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2e6ddbfb404f9f767c4e46273db5a0c78c480e00985da5515cac0e7acb25b27->leave($__internal_e2e6ddbfb404f9f767c4e46273db5a0c78c480e00985da5515cac0e7acb25b27_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_566b9b2d2e14e6349f8474307617cbaac43e0fae557eb6d4a3395279ca0ca91e = $this->env->getExtension("native_profiler");
        $__internal_566b9b2d2e14e6349f8474307617cbaac43e0fae557eb6d4a3395279ca0ca91e->enter($__internal_566b9b2d2e14e6349f8474307617cbaac43e0fae557eb6d4a3395279ca0ca91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "
<script>
\$(\".";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexTabs(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\",\"";
        echo twig_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), "html", null, true);
        echo "\");    
</script>
";
        
        $__internal_566b9b2d2e14e6349f8474307617cbaac43e0fae557eb6d4a3395279ca0ca91e->leave($__internal_566b9b2d2e14e6349f8474307617cbaac43e0fae557eb6d4a3395279ca0ca91e_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Order:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  68 => 8,  62 => 7,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{ render(controller('PartsboxBundle:Order:tabs', { 'ctrl': ctrl,'app':app,'url':url,'tabs':tabs }) ) }}*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/* <script>*/
/* $(".{{ctrl}}").alexTabs("{{app}}", "{{ctrl}}", "{{url}}","{{tabs}}");    */
/* </script>*/
/* {% endblock %}*/
/* */

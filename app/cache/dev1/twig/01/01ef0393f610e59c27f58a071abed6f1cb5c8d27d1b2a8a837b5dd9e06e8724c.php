<?php

/* :user:index.html.twig */
class __TwigTemplate_b17a762e3b0ad585c6036ef66dc95842365036f880478387ecc7345ebae50ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_b6c4cc293e1ccd1ec35a65440465f1631eb28dcd6e353e5f05f5c5006e802fbd = $this->env->getExtension("native_profiler");
        $__internal_b6c4cc293e1ccd1ec35a65440465f1631eb28dcd6e353e5f05f5c5006e802fbd->enter($__internal_b6c4cc293e1ccd1ec35a65440465f1631eb28dcd6e353e5f05f5c5006e802fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c4cc293e1ccd1ec35a65440465f1631eb28dcd6e353e5f05f5c5006e802fbd->leave($__internal_b6c4cc293e1ccd1ec35a65440465f1631eb28dcd6e353e5f05f5c5006e802fbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32ae457698416f8eff93ea40ebd387a8b8b92a8f2fcfd07bdf326bef0e947e32 = $this->env->getExtension("native_profiler");
        $__internal_32ae457698416f8eff93ea40ebd387a8b8b92a8f2fcfd07bdf326bef0e947e32->enter($__internal_32ae457698416f8eff93ea40ebd387a8b8b92a8f2fcfd07bdf326bef0e947e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div ng-app=\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\" ng-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\"> 
    <table class=\"table table-striped dataTable ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\">
        <thead>
            <tr>
                <td ng-repeat=\"field in fields\">[[ field.name ]]</td>
            </tr>                
        </thead> 
        <tbody>
        </tbody>
    </table>
</div>
";
        
        $__internal_32ae457698416f8eff93ea40ebd387a8b8b92a8f2fcfd07bdf326bef0e947e32->leave($__internal_32ae457698416f8eff93ea40ebd387a8b8b92a8f2fcfd07bdf326bef0e947e32_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e4320d830fc21b289e606fa8f808771ee5185c92f83cf102b0209496e8ada07 = $this->env->getExtension("native_profiler");
        $__internal_5e4320d830fc21b289e606fa8f808771ee5185c92f83cf102b0209496e8ada07->enter($__internal_5e4320d830fc21b289e606fa8f808771ee5185c92f83cf102b0209496e8ada07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5e4320d830fc21b289e606fa8f808771ee5185c92f83cf102b0209496e8ada07->leave($__internal_5e4320d830fc21b289e606fa8f808771ee5185c92f83cf102b0209496e8ada07_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7725e1f5785c7910d5b2abb705d41c9e7d7590051c07b07bf92c7fdd8937ca2e = $this->env->getExtension("native_profiler");
        $__internal_7725e1f5785c7910d5b2abb705d41c9e7d7590051c07b07bf92c7fdd8937ca2e->enter($__internal_7725e1f5785c7910d5b2abb705d41c9e7d7590051c07b07bf92c7fdd8937ca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "<script>
    \$(\".";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexander(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\");
    </script>
";
        
        $__internal_7725e1f5785c7910d5b2abb705d41c9e7d7590051c07b07bf92c7fdd8937ca2e->leave($__internal_7725e1f5785c7910d5b2abb705d41c9e7d7590051c07b07bf92c7fdd8937ca2e_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  84 => 20,  78 => 19,  67 => 17,  49 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div ng-app="{{app}}" ng-controller="{{ctrl}}"> */
/*     <table class="table table-striped dataTable {{ctrl}}">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td ng-repeat="field in fields">[[ field.name ]]</td>*/
/*             </tr>                */
/*         </thead> */
/*         <tbody>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}{% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>*/
/*     $(".{{ctrl}}").alexander("{{app}}", "{{ctrl}}", "{{url}}");*/
/*     </script>*/
/* {% endblock %}*/
/* */

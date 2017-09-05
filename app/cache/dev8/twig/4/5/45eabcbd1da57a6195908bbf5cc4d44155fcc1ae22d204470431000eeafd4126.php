<?php

/* elements/tabs.twig */
class __TwigTemplate_8ccbb4a9380a83932595333bdcf7393ac871f5076a042365f11090ccc132c942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f4d05d4a38b1bb97cfba4fae9eb9b588c3ea341bb171252dc3d0b422fc7bc22 = $this->env->getExtension("native_profiler");
        $__internal_2f4d05d4a38b1bb97cfba4fae9eb9b588c3ea341bb171252dc3d0b422fc7bc22->enter($__internal_2f4d05d4a38b1bb97cfba4fae9eb9b588c3ea341bb171252dc3d0b422fc7bc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elements/tabs.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2f4d05d4a38b1bb97cfba4fae9eb9b588c3ea341bb171252dc3d0b422fc7bc22->leave($__internal_2f4d05d4a38b1bb97cfba4fae9eb9b588c3ea341bb171252dc3d0b422fc7bc22_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_a95f3c87e075c77e10566f5822b5974a9a0563b4cc79c929e8387affb295ea7e = $this->env->getExtension("native_profiler");
        $__internal_a95f3c87e075c77e10566f5822b5974a9a0563b4cc79c929e8387affb295ea7e->enter($__internal_a95f3c87e075c77e10566f5822b5974a9a0563b4cc79c929e8387affb295ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div class=\"alexander ";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\" ng-app=\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\" ng-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo " as vm\">
        <form ng-submit=\"vm.onSubmit()\" name=\"vm.form\" class=\"form\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\" novalidate>     
            <button type=\"submit\" class=\"btn btn-primary submit-button\" ng-disabled=\"vm.form.\$invalid\">Submit</button>
            <button type=\"button\" class=\"btn btn-default\" ng-click=\"vm.resetAllForms()\">Reset</button>          
            <uib-tabset>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 8
            echo "                    <uib-tab heading=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "title", array()), "html", null, true);
            echo "\">
                        ";
            // line 9
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
                        <formly-form model=\"tab.form.model\" fields=\"tab.form.fields\" form=\"vm.form\" options=\"tab.form.options\"></formly-form> 
                    </uib-tab> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      
            </uib-tabset>  
        </form>
    </div>    
";
        
        $__internal_a95f3c87e075c77e10566f5822b5974a9a0563b4cc79c929e8387affb295ea7e->leave($__internal_a95f3c87e075c77e10566f5822b5974a9a0563b4cc79c929e8387affb295ea7e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60b870d7e0feceeb561dfb51336c33ff7c552dec4e8143e0668ad0a0cc003a2c = $this->env->getExtension("native_profiler");
        $__internal_60b870d7e0feceeb561dfb51336c33ff7c552dec4e8143e0668ad0a0cc003a2c->enter($__internal_60b870d7e0feceeb561dfb51336c33ff7c552dec4e8143e0668ad0a0cc003a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
";
        
        $__internal_60b870d7e0feceeb561dfb51336c33ff7c552dec4e8143e0668ad0a0cc003a2c->leave($__internal_60b870d7e0feceeb561dfb51336c33ff7c552dec4e8143e0668ad0a0cc003a2c_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e5350602808b05c2b729bf0ec14b4b64591e08b7ce9e0df260538cdcc756d35 = $this->env->getExtension("native_profiler");
        $__internal_4e5350602808b05c2b729bf0ec14b4b64591e08b7ce9e0df260538cdcc756d35->enter($__internal_4e5350602808b05c2b729bf0ec14b4b64591e08b7ce9e0df260538cdcc756d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "
";
        
        $__internal_4e5350602808b05c2b729bf0ec14b4b64591e08b7ce9e0df260538cdcc756d35->leave($__internal_4e5350602808b05c2b729bf0ec14b4b64591e08b7ce9e0df260538cdcc756d35_prof);

    }

    public function getTemplateName()
    {
        return "elements/tabs.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  108 => 22,  100 => 19,  94 => 18,  83 => 12,  73 => 9,  68 => 8,  64 => 7,  57 => 3,  48 => 2,  42 => 1,  35 => 22,  32 => 21,  30 => 18,  27 => 17,  25 => 1,);
    }
}
/* {% block body %}*/
/*     <div class="alexander {{ctrl}}" ng-app="{{app}}" ng-controller="{{ctrl}} as vm">*/
/*         <form ng-submit="vm.onSubmit()" name="vm.form" class="form" id="{{ctrl}}" novalidate>     */
/*             <button type="submit" class="btn btn-primary submit-button" ng-disabled="vm.form.$invalid">Submit</button>*/
/*             <button type="button" class="btn btn-default" ng-click="vm.resetAllForms()">Reset</button>          */
/*             <uib-tabset>*/
/*                 {% for tab in tabs.tabs %}*/
/*                     <uib-tab heading="{{ tab.title }}">*/
/*                         {{tab.content | raw }}*/
/*                         <formly-form model="tab.form.model" fields="tab.form.fields" form="vm.form" options="tab.form.options"></formly-form> */
/*                     </uib-tab> */
/*                 {% endfor %}      */
/*             </uib-tabset>  */
/*         </form>*/
/*     </div>    */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {% endblock %}*/
/* */

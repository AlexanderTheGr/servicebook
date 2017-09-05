<?php

/* elements/datatable.twig */
class __TwigTemplate_889556b517a446881fc04330719751b9a9a1c430b9647355c7654007aa792dcc extends Twig_Template
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
        $__internal_ae5c385200e2d0d7e24822711a1217ceb0f25682cf28ecd807691f3d1c1e5523 = $this->env->getExtension("native_profiler");
        $__internal_ae5c385200e2d0d7e24822711a1217ceb0f25682cf28ecd807691f3d1c1e5523->enter($__internal_ae5c385200e2d0d7e24822711a1217ceb0f25682cf28ecd807691f3d1c1e5523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elements/datatable.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ae5c385200e2d0d7e24822711a1217ceb0f25682cf28ecd807691f3d1c1e5523->leave($__internal_ae5c385200e2d0d7e24822711a1217ceb0f25682cf28ecd807691f3d1c1e5523_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdfa84776de50dbcbe5787e40de4dce0b2e9e6bc998ab29bbd15f67773d95d7a = $this->env->getExtension("native_profiler");
        $__internal_cdfa84776de50dbcbe5787e40de4dce0b2e9e6bc998ab29bbd15f67773d95d7a->enter($__internal_cdfa84776de50dbcbe5787e40de4dce0b2e9e6bc998ab29bbd15f67773d95d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
<div ng-app=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\" ng-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\"> 
    <table class=\"alexander table table-striped dataTable ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\">
        <thead>
            <tr>
                <td ng-repeat=\"field in fields\"><input class=\"style-primary-bright form-control search_init\" type=\"[[ field.search ]]\" /></td>
            </tr> 
            <tr>
                <td ng-repeat=\"field in fields\">[[ field.name ]]</td>
            </tr>                
        </thead> 
        <tbody>
        </tbody>
    </table>
</div>
";
        
        $__internal_cdfa84776de50dbcbe5787e40de4dce0b2e9e6bc998ab29bbd15f67773d95d7a->leave($__internal_cdfa84776de50dbcbe5787e40de4dce0b2e9e6bc998ab29bbd15f67773d95d7a_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f69669e8046733b344c60db9618fc7a5c1189f02dff66d45e6220d098952b8fe = $this->env->getExtension("native_profiler");
        $__internal_f69669e8046733b344c60db9618fc7a5c1189f02dff66d45e6220d098952b8fe->enter($__internal_f69669e8046733b344c60db9618fc7a5c1189f02dff66d45e6220d098952b8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f69669e8046733b344c60db9618fc7a5c1189f02dff66d45e6220d098952b8fe->leave($__internal_f69669e8046733b344c60db9618fc7a5c1189f02dff66d45e6220d098952b8fe_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eae68289ce9537d0bc503c6fdc4623940f0e5cd122bad55477911c765ed2ccdf = $this->env->getExtension("native_profiler");
        $__internal_eae68289ce9537d0bc503c6fdc4623940f0e5cd122bad55477911c765ed2ccdf->enter($__internal_eae68289ce9537d0bc503c6fdc4623940f0e5cd122bad55477911c765ed2ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
";
        
        $__internal_eae68289ce9537d0bc503c6fdc4623940f0e5cd122bad55477911c765ed2ccdf->leave($__internal_eae68289ce9537d0bc503c6fdc4623940f0e5cd122bad55477911c765ed2ccdf_prof);

    }

    public function getTemplateName()
    {
        return "elements/datatable.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  88 => 20,  77 => 18,  56 => 3,  50 => 2,  42 => 1,  35 => 20,  32 => 19,  30 => 18,  27 => 17,  25 => 1,);
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_781c21694fabf3c118d5f84ff24765c6de37bd7c2da7e09071db74b3edae10ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69c5ea49ed14569dc68e5bdf556a2dcb49a89c86430b9ec867c07f89f0a81346 = $this->env->getExtension("native_profiler");
        $__internal_69c5ea49ed14569dc68e5bdf556a2dcb49a89c86430b9ec867c07f89f0a81346->enter($__internal_69c5ea49ed14569dc68e5bdf556a2dcb49a89c86430b9ec867c07f89f0a81346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title></title>

        <!-- BEGIN META -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"keywords\" content=\"your,keywords\">
        <meta name=\"description\" content=\"Short explanation about this website\">
        <!-- END META -->
        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/bootstrap.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/materialadmin.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/libs/DataTables/jquery.dataTables.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/libs/toastr/toastr.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/libs/jquery-ui/jquery-ui-theme.css"), "html", null, true);
        echo "\">

    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"//assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"//assets/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed \">

    <!-- BEGIN HEADER-->
    <header id=\"header\" >
        <div class=\"headerbar\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"headerbar-left\">
                <ul class=\"header-nav header-nav-options\">
                    <li class=\"header-nav-brand\" >
                        <div class=\"brand-holder\">
                            <a href=\"/\" >
                                <!--span class=\"text-lg text-bold text-primary\">MATERIAL ADMIN</span-->
                                <img style=\"height: 50px;\" src=\"/assets/img/logo.png\"/>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class=\"btn btn-icon-toggle menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"headerbar-right\">

                <ul class=\"header-nav header-nav-profile\">
                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                            <img src=\"/assets/img/avatar1.jpg?1403934956\" alt=\"\" />
                            <span class=\"profile-info\">

                            </span>
                        </a>
                        <ul class=\"dropdown-menu animation-dock\">
                            <li class=\"dropdown-header\">Config</li>
                            <li><a href=\"/settings\"><i class=\"fa fa-fw fa-cogs\"></i> Settings</a></li>
                            <li><a href=\"/site/logout\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-profile -->
                <ul class=\"header-nav header-nav-toggle\">
                    <li>
                        <a class=\"btn btn-icon-toggle btn-default\" id=\"offcanvaschat\" href=\"#offcanvas-chat\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                            <i class=\"fa fa-wechat\"></i>
                        </a>
                    </li>
                </ul><!--end .header-nav-toggle -->
            </div><!--end #header-navbar-collapse -->
        </div>
    </header>
    <!-- END HEADER-->

    <!-- BEGIN BASE-->
    <div id=\"base\">

        <!-- BEGIN OFFCANVAS LEFT -->
        <div class=\"offcanvas\">
        </div><!--end .offcanvas-->
        <!-- END OFFCANVAS LEFT -->

        <!-- BEGIN CONTENT-->
        <div id=\"content\">
            <section>
                <div class=\"section-body\">
                    <div class=\"row\">

                        <!-- BEGIN ALERT - REVENUE -->
                        <div class=\"col-md-12 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-head style-primary-light\">
                                    <header>
                                        <i class=\"fa fa-fw fa-tag\"></i>

                                    </header>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->


                </div><!--end .row -->

            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <div id=\"menubar\" class=\"menubar-inverse \">
        <div class=\"menubar-fixed-panel\">
            <div>
                <a class=\"btn btn-icon-toggle btn-default menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
            <div class=\"expanded\">
                <a href=\"/\">
                    <span class=\"text-lg text-bold text-primary \">MATERIAL&nbsp;ADMIN</span>
                </a>
            </div>
        </div>
        <div class=\"menubar-scroll-panel\">

            <!-- BEGIN MAIN MENU -->
            <ul id=\"main-menu\" class=\"gui-controls\">


                <li>
                    <a href=\"/\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-home\"></i></div>
                        <span class=\"title\">Αρχική</span>
                    </a>
                </li>
                <li>
                    <a href=\"/users/user\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-person\"></i></div>
                        <span class=\"title\">Χρήστες</span>
                    </a>
                </li>   
                <li>
                    <a href=\"/product/product\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"fa fa-gear\"></i></div>
                        <span class=\"title\">Είδη</span>
                    </a>
                </li>                          
                <li>
                    <a href=\"/supplier/supplier\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-computer\"></i></div>
                        <span class=\"title\">Προμηθευτές</span>
                    </a>
                </li>    
                <li>
                    <a href=\"/customer/customer\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-people\"></i></div>
                        <span class=\"title\">Πελάτες</span>
                    </a>
                </li>  
                <li>
                    <a href=\"/route/route\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"fa fa-truck\"></i></div>
                        <span class=\"title\">Δρομολόγια</span>
                    </a>
                </li>                            

                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"fa fa-database\"></i></div>
                        <span class=\"title\">EDI</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Eltreka</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"/edi/eltreka\"><span class=\"title\">Part Master</span></a></li>
                                <li><a href=\"/edi/eltreka/order\" ><span class=\"title\">Orders</span></a></li>
                                <li><a href=\"\" ><span class=\"title\">Insert contact</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->

                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Viacar</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"/edi/viacar\"><span class=\"title\">Part Master</span></a></li>
                                <li><a href=\"/edi/viacar/order\" ><span class=\"title\">Orders</span></a></li>
                                <li><a href=\"\" ><span class=\"title\">Insert contact</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->

                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->

                <li class=\"gui-folder\">
                    <a class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-shopping-cart\"></i></div>
                        <span class=\"title\">Παραγγελίες</span>
                    </a>

                    <!--start submenu -->
                    <ul>
                        <li><a href=\"/order/order\" ><span class=\"title\">Λίστα Παραγγελιών</span></a></li>
                        <li><a href=\"/order/order/edit\" ><span class=\"title\">Νέα Πραγγελία</span></a></li>  
                        <li><a href=\"/order/order/noorder\" ><span class=\"title\">Νέα Προσφορά</span></a></li>  
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <li class=\"gui-folder\">
                    <a href=\"#\">
                        <div class=\"gui-icon\"><i class=\"md md-assessment\"></i></div>
                        <span class=\"title\">Στατιστικά</span>
                    </a>
                    <ul>
                        <li><a href=\"/report/report/sales\" ><span class=\"title\">Πωλήσεις</span></a></li>
                        <li><a href=\"/report/report/search\" ><span class=\"title\">Αναζητήσεις</span></a></li>  
                    </ul><!--end /submenu -->                           
                </li>
            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class=\"menubar-foot-panel\">
                <small class=\"no-linebreak hidden-folded\">
                    <span class=\"opacity-75\">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->

    <button class=\"btn btn-default-bright btn-raised\" data-toggle=\"modal\" style=\"display:none;\" id=\"loadingmodal\" data-target=\"#loading\">loading</button>
    <div class=\"modal fade\" id=\"loading\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
        <div style=\"width:1000px\" class=\"modal-dialog\">
            <div  style=\"width:1000px\"  class=\"modal-content\">
                <div class=\"modal-body\">
                    <h2>Please Wait</h2>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>      
    <button class=\"btn btn-default-bright btn-raised\" data-toggle=\"modal\" style=\"display:none;\" id=\"binfomodal\" data-target=\"#infomodal\">loading</button>
    <div class=\"modal fade\" id=\"infomodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
<!-- END BASE -->        
<!-- BEGIN JAVASCRIPT -->

";
        // line 275
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b702930_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_jquery-1.11.2.min_1.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_jquery-migrate-1.2.1.min_2.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_jquery-ui.min_3.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_bootstrap.min_4.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_spin.min_5.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_App_1.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_AppCard_2.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_AppForm_3.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_AppNavSearch_4.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_AppNavigation_5.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_AppOffcanvas_6.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_11") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_6_AppVendor_7.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_12") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_toastr_7.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_13") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_jquery.autosize.min_8.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_14") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_jquery.nanoscroller.min_9.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_15") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_jquery.dataTables.min_10.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_16") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_api-check_11.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_17") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular_12.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_18") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-ui-bootstrap_13.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_19") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-ui-bootstrap-tpls_14.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_20") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-sanitize_15.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_21") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-formly_16.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_22") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-animate_17.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_23") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-messages_18.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_24") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-formly-templates-bootstrap_19.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_25") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_angular-base64_20.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_26") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_21_alexDataTable_1.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_27") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_21_alexTabs_2.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_28"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_28") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_22_eltrekaediorder_1.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b702930_29"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930_29") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930_part_22_viacariorder_2.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "b702930"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b702930") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b702930.js");
            // line 300
            echo "
<script src=\"";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 302
        echo " 


";
        // line 305
        $this->displayBlock('javascripts', $context, $blocks);
        // line 306
        echo "<!-- END JAVASCRIPT -->    
</body>
</html>
";
        
        $__internal_69c5ea49ed14569dc68e5bdf556a2dcb49a89c86430b9ec867c07f89f0a81346->leave($__internal_69c5ea49ed14569dc68e5bdf556a2dcb49a89c86430b9ec867c07f89f0a81346_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f31347c9fb204a7e9b1e55953f4c0e38e1141cde00ecb8e5ad95b85f15d19221 = $this->env->getExtension("native_profiler");
        $__internal_f31347c9fb204a7e9b1e55953f4c0e38e1141cde00ecb8e5ad95b85f15d19221->enter($__internal_f31347c9fb204a7e9b1e55953f4c0e38e1141cde00ecb8e5ad95b85f15d19221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f31347c9fb204a7e9b1e55953f4c0e38e1141cde00ecb8e5ad95b85f15d19221->leave($__internal_f31347c9fb204a7e9b1e55953f4c0e38e1141cde00ecb8e5ad95b85f15d19221_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c74279906e20115146ba152173a41a67168a846e873ba40aea0a8e0f02fee36 = $this->env->getExtension("native_profiler");
        $__internal_1c74279906e20115146ba152173a41a67168a846e873ba40aea0a8e0f02fee36->enter($__internal_1c74279906e20115146ba152173a41a67168a846e873ba40aea0a8e0f02fee36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c74279906e20115146ba152173a41a67168a846e873ba40aea0a8e0f02fee36->leave($__internal_1c74279906e20115146ba152173a41a67168a846e873ba40aea0a8e0f02fee36_prof);

    }

    // line 305
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d00cd011445d8d05a9886c519198d63f64dba61cc8632d82f7327c66ae8c304 = $this->env->getExtension("native_profiler");
        $__internal_5d00cd011445d8d05a9886c519198d63f64dba61cc8632d82f7327c66ae8c304->enter($__internal_5d00cd011445d8d05a9886c519198d63f64dba61cc8632d82f7327c66ae8c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5d00cd011445d8d05a9886c519198d63f64dba61cc8632d82f7327c66ae8c304->leave($__internal_5d00cd011445d8d05a9886c519198d63f64dba61cc8632d82f7327c66ae8c304_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 305,  643 => 109,  632 => 23,  622 => 306,  620 => 305,  615 => 302,  609 => 301,  606 => 300,  599 => 301,  596 => 300,  590 => 301,  587 => 300,  581 => 301,  578 => 300,  572 => 301,  569 => 300,  563 => 301,  560 => 300,  554 => 301,  551 => 300,  545 => 301,  542 => 300,  536 => 301,  533 => 300,  527 => 301,  524 => 300,  518 => 301,  515 => 300,  509 => 301,  506 => 300,  500 => 301,  497 => 300,  491 => 301,  488 => 300,  482 => 301,  479 => 300,  473 => 301,  470 => 300,  464 => 301,  461 => 300,  455 => 301,  452 => 300,  446 => 301,  443 => 300,  437 => 301,  434 => 300,  428 => 301,  425 => 300,  419 => 301,  416 => 300,  410 => 301,  407 => 300,  401 => 301,  398 => 300,  392 => 301,  389 => 300,  383 => 301,  380 => 300,  374 => 301,  371 => 300,  365 => 301,  362 => 300,  356 => 301,  353 => 300,  347 => 301,  344 => 300,  338 => 301,  335 => 300,  331 => 275,  164 => 110,  162 => 109,  75 => 24,  73 => 23,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <title></title>*/
/* */
/*         <!-- BEGIN META -->*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="keywords" content="your,keywords">*/
/*         <meta name="description" content="Short explanation about this website">*/
/*         <!-- END META -->*/
/*         <!-- BEGIN STYLESHEETS -->*/
/*         <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/bootstrap.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/materialadmin.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/font-awesome.min.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/material-design-iconic-font.min.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/libs/DataTables/jquery.dataTables.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/libs/toastr/toastr.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/libs/jquery-ui/jquery-ui-theme.css') }}">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="//assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="//assets/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed ">*/
/* */
/*     <!-- BEGIN HEADER-->*/
/*     <header id="header" >*/
/*         <div class="headerbar">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="headerbar-left">*/
/*                 <ul class="header-nav header-nav-options">*/
/*                     <li class="header-nav-brand" >*/
/*                         <div class="brand-holder">*/
/*                             <a href="/" >*/
/*                                 <!--span class="text-lg text-bold text-primary">MATERIAL ADMIN</span-->*/
/*                                 <img style="height: 50px;" src="/assets/img/logo.png"/>*/
/*                             </a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                             <i class="fa fa-bars"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="headerbar-right">*/
/* */
/*                 <ul class="header-nav header-nav-profile">*/
/*                     <li class="dropdown">*/
/*                         <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                             <img src="/assets/img/avatar1.jpg?1403934956" alt="" />*/
/*                             <span class="profile-info">*/
/* */
/*                             </span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu animation-dock">*/
/*                             <li class="dropdown-header">Config</li>*/
/*                             <li><a href="/settings"><i class="fa fa-fw fa-cogs"></i> Settings</a></li>*/
/*                             <li><a href="/site/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                         </ul><!--end .dropdown-menu -->*/
/*                     </li><!--end .dropdown -->*/
/*                 </ul><!--end .header-nav-profile -->*/
/*                 <ul class="header-nav header-nav-toggle">*/
/*                     <li>*/
/*                         <a class="btn btn-icon-toggle btn-default" id="offcanvaschat" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">*/
/*                             <i class="fa fa-wechat"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul><!--end .header-nav-toggle -->*/
/*             </div><!--end #header-navbar-collapse -->*/
/*         </div>*/
/*     </header>*/
/*     <!-- END HEADER-->*/
/* */
/*     <!-- BEGIN BASE-->*/
/*     <div id="base">*/
/* */
/*         <!-- BEGIN OFFCANVAS LEFT -->*/
/*         <div class="offcanvas">*/
/*         </div><!--end .offcanvas-->*/
/*         <!-- END OFFCANVAS LEFT -->*/
/* */
/*         <!-- BEGIN CONTENT-->*/
/*         <div id="content">*/
/*             <section>*/
/*                 <div class="section-body">*/
/*                     <div class="row">*/
/* */
/*                         <!-- BEGIN ALERT - REVENUE -->*/
/*                         <div class="col-md-12 col-sm-6">*/
/*                             <div class="card">*/
/*                                 <div class="card-head style-primary-light">*/
/*                                     <header>*/
/*                                         <i class="fa fa-fw fa-tag"></i>*/
/* */
/*                                     </header>*/
/*                                 </div>*/
/*                                 <div class="card-body">*/
/*                                 {% block body %}{% endblock %}*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/* */
/* */
/*                 </div><!--end .row -->*/
/* */
/*             </div><!--end .section-body -->*/
/*         </section>*/
/*     </div><!--end #content-->*/
/*     <!-- END CONTENT -->*/
/* */
/*     <!-- BEGIN MENUBAR-->*/
/*     <div id="menubar" class="menubar-inverse ">*/
/*         <div class="menubar-fixed-panel">*/
/*             <div>*/
/*                 <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                     <i class="fa fa-bars"></i>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="expanded">*/
/*                 <a href="/">*/
/*                     <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="menubar-scroll-panel">*/
/* */
/*             <!-- BEGIN MAIN MENU -->*/
/*             <ul id="main-menu" class="gui-controls">*/
/* */
/* */
/*                 <li>*/
/*                     <a href="/" class="">*/
/*                         <div class="gui-icon"><i class="md md-home"></i></div>*/
/*                         <span class="title">Αρχική</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/users/user" class="">*/
/*                         <div class="gui-icon"><i class="md md-person"></i></div>*/
/*                         <span class="title">Χρήστες</span>*/
/*                     </a>*/
/*                 </li>   */
/*                 <li>*/
/*                     <a href="/product/product" class="">*/
/*                         <div class="gui-icon"><i class="fa fa-gear"></i></div>*/
/*                         <span class="title">Είδη</span>*/
/*                     </a>*/
/*                 </li>                          */
/*                 <li>*/
/*                     <a href="/supplier/supplier" class="">*/
/*                         <div class="gui-icon"><i class="md md-computer"></i></div>*/
/*                         <span class="title">Προμηθευτές</span>*/
/*                     </a>*/
/*                 </li>    */
/*                 <li>*/
/*                     <a href="/customer/customer" class="">*/
/*                         <div class="gui-icon"><i class="md md-people"></i></div>*/
/*                         <span class="title">Πελάτες</span>*/
/*                     </a>*/
/*                 </li>  */
/*                 <li>*/
/*                     <a href="/route/route" class="">*/
/*                         <div class="gui-icon"><i class="fa fa-truck"></i></div>*/
/*                         <span class="title">Δρομολόγια</span>*/
/*                     </a>*/
/*                 </li>                            */
/* */
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="fa fa-database"></i></div>*/
/*                         <span class="title">EDI</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Eltreka</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="/edi/eltreka"><span class="title">Part Master</span></a></li>*/
/*                                 <li><a href="/edi/eltreka/order" ><span class="title">Orders</span></a></li>*/
/*                                 <li><a href="" ><span class="title">Insert contact</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/* */
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Viacar</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="/edi/viacar"><span class="title">Part Master</span></a></li>*/
/*                                 <li><a href="/edi/viacar/order" ><span class="title">Orders</span></a></li>*/
/*                                 <li><a href="" ><span class="title">Insert contact</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/* */
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/* */
/*                 <li class="gui-folder">*/
/*                     <a class="">*/
/*                         <div class="gui-icon"><i class="md md-shopping-cart"></i></div>*/
/*                         <span class="title">Παραγγελίες</span>*/
/*                     </a>*/
/* */
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="/order/order" ><span class="title">Λίστα Παραγγελιών</span></a></li>*/
/*                         <li><a href="/order/order/edit" ><span class="title">Νέα Πραγγελία</span></a></li>  */
/*                         <li><a href="/order/order/noorder" ><span class="title">Νέα Προσφορά</span></a></li>  */
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <li class="gui-folder">*/
/*                     <a href="#">*/
/*                         <div class="gui-icon"><i class="md md-assessment"></i></div>*/
/*                         <span class="title">Στατιστικά</span>*/
/*                     </a>*/
/*                     <ul>*/
/*                         <li><a href="/report/report/sales" ><span class="title">Πωλήσεις</span></a></li>*/
/*                         <li><a href="/report/report/search" ><span class="title">Αναζητήσεις</span></a></li>  */
/*                     </ul><!--end /submenu -->                           */
/*                 </li>*/
/*             </ul><!--end .main-menu -->*/
/*             <!-- END MAIN MENU -->*/
/* */
/*             <div class="menubar-foot-panel">*/
/*                 <small class="no-linebreak hidden-folded">*/
/*                     <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>*/
/*                 </small>*/
/*             </div>*/
/*         </div><!--end .menubar-scroll-panel-->*/
/*     </div><!--end #menubar-->*/
/*     <!-- END MENUBAR -->*/
/* */
/*     <button class="btn btn-default-bright btn-raised" data-toggle="modal" style="display:none;" id="loadingmodal" data-target="#loading">loading</button>*/
/*     <div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">*/
/*         <div style="width:1000px" class="modal-dialog">*/
/*             <div  style="width:1000px"  class="modal-content">*/
/*                 <div class="modal-body">*/
/*                     <h2>Please Wait</h2>*/
/*                 </div>*/
/*             </div><!-- /.modal-content -->*/
/*         </div><!-- /.modal-dialog -->*/
/*     </div>      */
/*     <button class="btn btn-default-bright btn-raised" data-toggle="modal" style="display:none;" id="binfomodal" data-target="#infomodal">loading</button>*/
/*     <div class="modal fade" id="infomodal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body">*/
/* */
/*                 </div>*/
/*             </div><!-- /.modal-content -->*/
/*         </div><!-- /.modal-dialog -->*/
/*     </div>*/
/* */
/*     <!-- END OFFCANVAS RIGHT -->*/
/* */
/* </div><!--end #base-->*/
/* <!-- END BASE -->        */
/* <!-- BEGIN JAVASCRIPT -->*/
/* */
/* {% javascripts*/
/*             'assets/js/libs/jquery/jquery-1.11.2.min.js'*/
/*             'assets/js/libs/jquery/jquery-migrate-1.2.1.min.js' */
/*             'assets/js/libs/jquery-ui/jquery-ui.min.js' */
/*             'assets/js/libs/bootstrap/bootstrap.min.js'*/
/*             'assets/js/libs/spin.js/spin.min.js'*/
/*             'assets/js/core/source/*'*/
/*             'assets/js/libs/toastr/toastr.js'*/
/*             'assets/js/libs/autosize/jquery.autosize.min.js'*/
/*             'assets/js/libs/nanoscroller/jquery.nanoscroller.min.js'*/
/*             'assets/js/libs/DataTables/jquery.dataTables.min.js'*/
/*             'assets/js/libs/angular/api-check.js' */
/*             'assets/js/libs/angular/angular.js' */
/*             'assets/js/libs/angular/angular-ui-bootstrap.js' */
/*             'assets/js/libs/angular/angular-ui-bootstrap-tpls.js' */
/*             'assets/js/libs/angular/angular-sanitize.js' */
/*             'assets/js/libs/angular/angular-formly.js' */
/*             'assets/js/libs/angular/angular-animate.js' */
/*             'assets/js/libs/angular/angular-messages.js' */
/*             'assets/js/libs/angular/angular-formly-templates-bootstrap.js' */
/*             'assets/js/libs/angular/angular-base64.js' */
/*             'assets/js/libs/alexander/*' */
/*             'assets/js/libs/edi/*' */
/* */
/* %}*/
/* */
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %} */
/* */
/* */
/* {% block javascripts %}{% endblock %}*/
/* <!-- END JAVASCRIPT -->    */
/* </body>*/
/* </html>*/
/* */

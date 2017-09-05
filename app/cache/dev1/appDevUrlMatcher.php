<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/b702930')) {
                // _assetic_b702930
                if ($pathinfo === '/js/b702930.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b702930',);
                }

                if (0 === strpos($pathinfo, '/js/b702930_')) {
                    if (0 === strpos($pathinfo, '/js/b702930_jquery-')) {
                        // _assetic_b702930_0
                        if ($pathinfo === '/js/b702930_jquery-1.11.2.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b702930_0',);
                        }

                        // _assetic_b702930_1
                        if ($pathinfo === '/js/b702930_jquery-migrate-1.2.1.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b702930_1',);
                        }

                        // _assetic_b702930_2
                        if ($pathinfo === '/js/b702930_jquery-ui.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b702930_2',);
                        }

                    }

                    // _assetic_b702930_3
                    if ($pathinfo === '/js/b702930_bootstrap.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_b702930_3',);
                    }

                    // _assetic_b702930_4
                    if ($pathinfo === '/js/b702930_spin.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_b702930_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/b702930_part_6_App')) {
                        // _assetic_b702930_5
                        if ($pathinfo === '/js/b702930_part_6_App_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_b702930_5',);
                        }

                        // _assetic_b702930_6
                        if ($pathinfo === '/js/b702930_part_6_AppCard_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_b702930_6',);
                        }

                        // _assetic_b702930_7
                        if ($pathinfo === '/js/b702930_part_6_AppForm_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_b702930_7',);
                        }

                        if (0 === strpos($pathinfo, '/js/b702930_part_6_AppNav')) {
                            // _assetic_b702930_8
                            if ($pathinfo === '/js/b702930_part_6_AppNavSearch_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_b702930_8',);
                            }

                            // _assetic_b702930_9
                            if ($pathinfo === '/js/b702930_part_6_AppNavigation_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_b702930_9',);
                            }

                        }

                        // _assetic_b702930_10
                        if ($pathinfo === '/js/b702930_part_6_AppOffcanvas_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_b702930_10',);
                        }

                        // _assetic_b702930_11
                        if ($pathinfo === '/js/b702930_part_6_AppVendor_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_b702930_11',);
                        }

                    }

                    // _assetic_b702930_12
                    if ($pathinfo === '/js/b702930_toastr_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_b702930_12',);
                    }

                    if (0 === strpos($pathinfo, '/js/b702930_jquery.')) {
                        // _assetic_b702930_13
                        if ($pathinfo === '/js/b702930_jquery.autosize.min_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_b702930_13',);
                        }

                        // _assetic_b702930_14
                        if ($pathinfo === '/js/b702930_jquery.nanoscroller.min_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_b702930_14',);
                        }

                        // _assetic_b702930_15
                        if ($pathinfo === '/js/b702930_jquery.dataTables.min_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_b702930_15',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/b702930_a')) {
                        // _assetic_b702930_16
                        if ($pathinfo === '/js/b702930_api-check_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_b702930_16',);
                        }

                        if (0 === strpos($pathinfo, '/js/b702930_angular')) {
                            // _assetic_b702930_17
                            if ($pathinfo === '/js/b702930_angular_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_b702930_17',);
                            }

                            if (0 === strpos($pathinfo, '/js/b702930_angular-')) {
                                if (0 === strpos($pathinfo, '/js/b702930_angular-ui-bootstrap')) {
                                    // _assetic_b702930_18
                                    if ($pathinfo === '/js/b702930_angular-ui-bootstrap_13.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_b702930_18',);
                                    }

                                    // _assetic_b702930_19
                                    if ($pathinfo === '/js/b702930_angular-ui-bootstrap-tpls_14.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_b702930_19',);
                                    }

                                }

                                // _assetic_b702930_20
                                if ($pathinfo === '/js/b702930_angular-sanitize_15.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_b702930_20',);
                                }

                                // _assetic_b702930_21
                                if ($pathinfo === '/js/b702930_angular-formly_16.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_b702930_21',);
                                }

                                // _assetic_b702930_22
                                if ($pathinfo === '/js/b702930_angular-animate_17.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_b702930_22',);
                                }

                                // _assetic_b702930_23
                                if ($pathinfo === '/js/b702930_angular-messages_18.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_b702930_23',);
                                }

                                // _assetic_b702930_24
                                if ($pathinfo === '/js/b702930_angular-formly-templates-bootstrap_19.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_b702930_24',);
                                }

                                // _assetic_b702930_25
                                if ($pathinfo === '/js/b702930_angular-base64_20.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_b702930_25',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/js/b702930_part_2')) {
                        if (0 === strpos($pathinfo, '/js/b702930_part_21_alex')) {
                            // _assetic_b702930_26
                            if ($pathinfo === '/js/b702930_part_21_alexDataTable_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_b702930_26',);
                            }

                            // _assetic_b702930_27
                            if ($pathinfo === '/js/b702930_part_21_alexTabs_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_b702930_27',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/js/b702930_part_22_')) {
                            // _assetic_b702930_28
                            if ($pathinfo === '/js/b702930_part_22_eltrekaediorder_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_b702930_28',);
                            }

                            // _assetic_b702930_29
                            if ($pathinfo === '/js/b702930_part_22_viacariorder_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b702930',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_b702930_29',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/cfbef00')) {
                // _assetic_cfbef00
                if ($pathinfo === '/js/cfbef00.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cfbef00',);
                }

                if (0 === strpos($pathinfo, '/js/cfbef00_')) {
                    if (0 === strpos($pathinfo, '/js/cfbef00_jquery-')) {
                        // _assetic_cfbef00_0
                        if ($pathinfo === '/js/cfbef00_jquery-1.11.2.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cfbef00_0',);
                        }

                        // _assetic_cfbef00_1
                        if ($pathinfo === '/js/cfbef00_jquery-migrate-1.2.1.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_cfbef00_1',);
                        }

                    }

                    // _assetic_cfbef00_2
                    if ($pathinfo === '/js/cfbef00_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_cfbef00_2',);
                    }

                    // _assetic_cfbef00_3
                    if ($pathinfo === '/js/cfbef00_spin.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_cfbef00_3',);
                    }

                    if (0 === strpos($pathinfo, '/js/cfbef00_part_5_App')) {
                        // _assetic_cfbef00_4
                        if ($pathinfo === '/js/cfbef00_part_5_App_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_cfbef00_4',);
                        }

                        // _assetic_cfbef00_5
                        if ($pathinfo === '/js/cfbef00_part_5_AppCard_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_cfbef00_5',);
                        }

                        // _assetic_cfbef00_6
                        if ($pathinfo === '/js/cfbef00_part_5_AppForm_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_cfbef00_6',);
                        }

                        if (0 === strpos($pathinfo, '/js/cfbef00_part_5_AppNav')) {
                            // _assetic_cfbef00_7
                            if ($pathinfo === '/js/cfbef00_part_5_AppNavSearch_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_cfbef00_7',);
                            }

                            // _assetic_cfbef00_8
                            if ($pathinfo === '/js/cfbef00_part_5_AppNavigation_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_cfbef00_8',);
                            }

                        }

                        // _assetic_cfbef00_9
                        if ($pathinfo === '/js/cfbef00_part_5_AppOffcanvas_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_cfbef00_9',);
                        }

                        // _assetic_cfbef00_10
                        if ($pathinfo === '/js/cfbef00_part_5_AppVendor_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_cfbef00_10',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/cfbef00_jquery.')) {
                        // _assetic_cfbef00_11
                        if ($pathinfo === '/js/cfbef00_jquery.autosize.min_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_cfbef00_11',);
                        }

                        // _assetic_cfbef00_12
                        if ($pathinfo === '/js/cfbef00_jquery.nanoscroller.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_cfbef00_12',);
                        }

                        // _assetic_cfbef00_13
                        if ($pathinfo === '/js/cfbef00_jquery.dataTables.min_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_cfbef00_13',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/cfbef00_a')) {
                        // _assetic_cfbef00_14
                        if ($pathinfo === '/js/cfbef00_api-check_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_cfbef00_14',);
                        }

                        if (0 === strpos($pathinfo, '/js/cfbef00_angular')) {
                            // _assetic_cfbef00_15
                            if ($pathinfo === '/js/cfbef00_angular_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_cfbef00_15',);
                            }

                            if (0 === strpos($pathinfo, '/js/cfbef00_angular-')) {
                                if (0 === strpos($pathinfo, '/js/cfbef00_angular-ui-bootstrap')) {
                                    // _assetic_cfbef00_16
                                    if ($pathinfo === '/js/cfbef00_angular-ui-bootstrap_11.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_cfbef00_16',);
                                    }

                                    // _assetic_cfbef00_17
                                    if ($pathinfo === '/js/cfbef00_angular-ui-bootstrap-tpls_12.js') {
                                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_cfbef00_17',);
                                    }

                                }

                                // _assetic_cfbef00_18
                                if ($pathinfo === '/js/cfbef00_angular-sanitize_13.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_cfbef00_18',);
                                }

                                // _assetic_cfbef00_19
                                if ($pathinfo === '/js/cfbef00_angular-formly_14.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_cfbef00_19',);
                                }

                                // _assetic_cfbef00_20
                                if ($pathinfo === '/js/cfbef00_angular-animate_15.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_cfbef00_20',);
                                }

                                // _assetic_cfbef00_21
                                if ($pathinfo === '/js/cfbef00_angular-messages_16.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_cfbef00_21',);
                                }

                                // _assetic_cfbef00_22
                                if ($pathinfo === '/js/cfbef00_angular-formly-templates-bootstrap_17.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_cfbef00_22',);
                                }

                                // _assetic_cfbef00_23
                                if ($pathinfo === '/js/cfbef00_angular-base64_18.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_cfbef00_23',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/js/cfbef00_part_')) {
                        if (0 === strpos($pathinfo, '/js/cfbef00_part_19_alex')) {
                            // _assetic_cfbef00_24
                            if ($pathinfo === '/js/cfbef00_part_19_alexDataTable_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_cfbef00_24',);
                            }

                            // _assetic_cfbef00_25
                            if ($pathinfo === '/js/cfbef00_part_19_alexTabs_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_cfbef00_25',);
                            }

                        }

                        // _assetic_cfbef00_26
                        if ($pathinfo === '/js/cfbef00_part_20_order_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfbef00',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_cfbef00_26',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/edi')) {
            if (0 === strpos($pathinfo, '/edi/eltreka')) {
                // edi_eltreka_index
                if ($pathinfo === '/edi/eltreka') {
                    return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::indexAction',  '_route' => 'edi_eltreka_index',);
                }

                // edi_eltreka_view
                if (0 === strpos($pathinfo, '/edi/eltreka/view') && preg_match('#^/edi/eltreka/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_eltreka_view')), array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::viewAction',));
                }

                // edi_eltreka_savection
                if ($pathinfo === '/edi/eltreka/save') {
                    return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::savection',  '_route' => 'edi_eltreka_savection',);
                }

                if (0 === strpos($pathinfo, '/edi/eltreka/get')) {
                    // edi_eltreka_getpartmaster
                    if ($pathinfo === '/edi/eltreka/getPartMaster') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::getPartMasterAction',  '_route' => 'edi_eltreka_getpartmaster',);
                    }

                    // edi_eltreka_gettabs
                    if ($pathinfo === '/edi/eltreka/gettab') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::gettabs',  '_route' => 'edi_eltreka_gettabs',);
                    }

                    // edi_eltreka_getdatatable
                    if ($pathinfo === '/edi/eltreka/getdatatable') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::getdatatableAction',  '_route' => 'edi_eltreka_getdatatable',);
                    }

                }

                // edi_eltreka_install
                if ($pathinfo === '/edi/eltreka/install') {
                    return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaController::installAction',  '_route' => 'edi_eltreka_install',);
                }

                if (0 === strpos($pathinfo, '/edi/eltreka/order')) {
                    // edi_eltrekaorder_index
                    if ($pathinfo === '/edi/eltreka/order') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::indexAction',  '_route' => 'edi_eltrekaorder_index',);
                    }

                    // edi_eltrekaorder_view
                    if (0 === strpos($pathinfo, '/edi/eltreka/order/view') && preg_match('#^/edi/eltreka/order/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_eltrekaorder_view')), array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::viewAction',));
                    }

                    // edi_eltrekaorder_save
                    if ($pathinfo === '/edi/eltreka/order/save') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::saveAction',  '_route' => 'edi_eltrekaorder_save',);
                    }

                    // edi_eltrekaorder_addorderitem
                    if (rtrim($pathinfo, '/') === '/edi/eltreka/order/addorderitem') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'edi_eltrekaorder_addorderitem');
                        }

                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::addorderitemAction',  '_route' => 'edi_eltrekaorder_addorderitem',);
                    }

                    // edi_eltrekaorder_editorderitem
                    if (rtrim($pathinfo, '/') === '/edi/eltreka/order/editorderitem') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'edi_eltrekaorder_editorderitem');
                        }

                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::editorderitemAction',  '_route' => 'edi_eltrekaorder_editorderitem',);
                    }

                    if (0 === strpos($pathinfo, '/edi/eltreka/order/get')) {
                        // edi_eltrekaorder_getitems
                        if (0 === strpos($pathinfo, '/edi/eltreka/order/getitems') && preg_match('#^/edi/eltreka/order/getitems/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_eltrekaorder_getitems')), array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::getitemsAction',));
                        }

                        // edi_eltrekaorder_getfororderitems
                        if (0 === strpos($pathinfo, '/edi/eltreka/order/getfororderitems') && preg_match('#^/edi/eltreka/order/getfororderitems/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_eltrekaorder_getfororderitems')), array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::getfororderitemsAction',));
                        }

                    }

                    // edi_eltrekaorder_sendorder
                    if (rtrim($pathinfo, '/') === '/edi/eltreka/order/sendorder') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'edi_eltrekaorder_sendorder');
                        }

                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::sendorderAction',  '_route' => 'edi_eltrekaorder_sendorder',);
                    }

                    // edi_eltrekaorder_getdatatable
                    if ($pathinfo === '/edi/eltreka/order/getdatatable') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\EltrekaOrderController::getdatatableAction',  '_route' => 'edi_eltrekaorder_getdatatable',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/edi/viacar')) {
                // edi_viacar_index
                if ($pathinfo === '/edi/viacar') {
                    return array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::indexAction',  '_route' => 'edi_viacar_index',);
                }

                // edi_viacar_view
                if (0 === strpos($pathinfo, '/edi/viacar/view') && preg_match('#^/edi/viacar/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_viacar_view')), array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::viewAction',));
                }

                // edi_viacar_savection
                if ($pathinfo === '/edi/viacar/save') {
                    return array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::savection',  '_route' => 'edi_viacar_savection',);
                }

                if (0 === strpos($pathinfo, '/edi/viacar/get')) {
                    // edi_viacar_getpartmaster
                    if ($pathinfo === '/edi/viacar/getPartMaster') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::getPartMasterAction',  '_route' => 'edi_viacar_getpartmaster',);
                    }

                    // edi_viacar_gettabs
                    if ($pathinfo === '/edi/viacar/gettab') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::gettabs',  '_route' => 'edi_viacar_gettabs',);
                    }

                    // edi_viacar_getdatatable
                    if ($pathinfo === '/edi/viacar/getdatatable') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::getdatatableAction',  '_route' => 'edi_viacar_getdatatable',);
                    }

                }

                // edi_viacar_install
                if ($pathinfo === '/edi/viacar/install') {
                    return array (  '_controller' => 'EdiBundle\\Controller\\ViacarController::installAction',  '_route' => 'edi_viacar_install',);
                }

                if (0 === strpos($pathinfo, '/edi/viacar/order')) {
                    // edi_viacarorder_index
                    if ($pathinfo === '/edi/viacar/order') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::indexAction',  '_route' => 'edi_viacarorder_index',);
                    }

                    // edi_viacarorder_view
                    if (0 === strpos($pathinfo, '/edi/viacar/order/view') && preg_match('#^/edi/viacar/order/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_viacarorder_view')), array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::viewAction',));
                    }

                    // edi_viacarorder_save
                    if ($pathinfo === '/edi/viacar/order/save') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::saveAction',  '_route' => 'edi_viacarorder_save',);
                    }

                    // edi_viacarorder_addorderitem
                    if (rtrim($pathinfo, '/') === '/edi/viacar/order/addorderitem') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'edi_viacarorder_addorderitem');
                        }

                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::addorderitemAction',  '_route' => 'edi_viacarorder_addorderitem',);
                    }

                    // edi_viacarorder_editorderitem
                    if (rtrim($pathinfo, '/') === '/edi/viacar/order/editorderitem') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'edi_viacarorder_editorderitem');
                        }

                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::editorderitemAction',  '_route' => 'edi_viacarorder_editorderitem',);
                    }

                    if (0 === strpos($pathinfo, '/edi/viacar/order/get')) {
                        // edi_viacarorder_getitems
                        if (0 === strpos($pathinfo, '/edi/viacar/order/getitems') && preg_match('#^/edi/viacar/order/getitems/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_viacarorder_getitems')), array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::getitemsAction',));
                        }

                        // edi_viacarorder_getfororderitems
                        if (0 === strpos($pathinfo, '/edi/viacar/order/getfororderitems') && preg_match('#^/edi/viacar/order/getfororderitems/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edi_viacarorder_getfororderitems')), array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::getfororderitemsAction',));
                        }

                    }

                    // edi_viacarorder_sendorder
                    if (rtrim($pathinfo, '/') === '/edi/viacar/order/sendorder') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'edi_viacarorder_sendorder');
                        }

                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::sendorderAction',  '_route' => 'edi_viacarorder_sendorder',);
                    }

                    // edi_viacarorder_getdatatable
                    if ($pathinfo === '/edi/viacar/order/getdatatable') {
                        return array (  '_controller' => 'EdiBundle\\Controller\\ViacarOrderController::getdatatableAction',  '_route' => 'edi_viacarorder_getdatatable',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // access_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'access_homepage')), array (  '_controller' => 'AccessBundle\\Controller\\DefaultController::indexAction',));
            }

            // eav_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eav_default_index')), array (  '_controller' => 'EavBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/customer')) {
            // softone_customer_index
            if ($pathinfo === '/customer/customer') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::indexAction',  '_route' => 'softone_customer_index',);
            }

            // softone_customer_autocompletesearch
            if ($pathinfo === '/customer/autocompletesearch') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::autocompletesearch',  '_route' => 'softone_customer_autocompletesearch',);
            }

            // softone_customer_view
            if (0 === strpos($pathinfo, '/customer/view') && preg_match('#^/customer/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_customer_view')), array (  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::viewAction',));
            }

            // softone_customer_savection
            if ($pathinfo === '/customer/save') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::savection',  '_route' => 'softone_customer_savection',);
            }

            if (0 === strpos($pathinfo, '/customer/get')) {
                // softone_customer_gettabs
                if ($pathinfo === '/customer/gettab') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::gettabs',  '_route' => 'softone_customer_gettabs',);
                }

                // softone_customer_getdatatable
                if ($pathinfo === '/customer/getdatatable') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::getdatatableAction',  '_route' => 'softone_customer_getdatatable',);
                }

            }

            // softone_customer_retrievesoftonedata
            if ($pathinfo === '/customer/retrieve') {
                return array (  'params' =>   array (  ),  '_controller' => 'SoftoneBundle\\Controller\\CustomerController::retrieveSoftoneData',  '_route' => 'softone_customer_retrievesoftonedata',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'SoftoneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/order')) {
            // softone_order_index
            if ($pathinfo === '/order/order') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::indexAction',  '_route' => 'softone_order_index',);
            }

            // softone_order_view
            if (0 === strpos($pathinfo, '/order/view') && preg_match('#^/order/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_order_view')), array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/order/save')) {
                // softone_order_save
                if ($pathinfo === '/order/save') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::saveAction',  '_route' => 'softone_order_save',);
                }

                // softone_order_savecustomer
                if ($pathinfo === '/order/saveCustomer') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::saveCustomerAction',  '_route' => 'softone_order_savecustomer',);
                }

            }

            if (0 === strpos($pathinfo, '/order/get')) {
                // softone_order_gettabs
                if ($pathinfo === '/order/gettab') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::gettabs',  '_route' => 'softone_order_gettabs',);
                }

                // softone_order_getfororderitems
                if (0 === strpos($pathinfo, '/order/getfororderitems') && preg_match('#^/order/getfororderitems/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_order_getfororderitems')), array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::getfororderitemsAction',));
                }

                // softone_order_getdatatable
                if ($pathinfo === '/order/getdatatable') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::getdatatableAction',  '_route' => 'softone_order_getdatatable',);
                }

                // softone_order_getitems
                if (0 === strpos($pathinfo, '/order/getitems') && preg_match('#^/order/getitems/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_order_getitems')), array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::getitemsAction',));
                }

            }

            // softone_order_addorderitem
            if (rtrim($pathinfo, '/') === '/order/addorderitem') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'softone_order_addorderitem');
                }

                return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::addorderitemAction',  '_route' => 'softone_order_addorderitem',);
            }

            // softone_order_editorderitem
            if (rtrim($pathinfo, '/') === '/order/editorderitem') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'softone_order_editorderitem');
                }

                return array (  '_controller' => 'SoftoneBundle\\Controller\\OrderController::editorderitemAction',  '_route' => 'softone_order_editorderitem',);
            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // softone_product_index
            if ($pathinfo === '/product/product') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\ProductController::indexAction',  '_route' => 'softone_product_index',);
            }

            // softone_product_view
            if (0 === strpos($pathinfo, '/product/view') && preg_match('#^/product/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_product_view')), array (  '_controller' => 'SoftoneBundle\\Controller\\ProductController::viewAction',));
            }

            // softone_product_savection
            if ($pathinfo === '/product/save') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\ProductController::savection',  '_route' => 'softone_product_savection',);
            }

            if (0 === strpos($pathinfo, '/product/get')) {
                // softone_product_gettabs
                if ($pathinfo === '/product/gettab') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\ProductController::gettabs',  '_route' => 'softone_product_gettabs',);
                }

                // softone_product_getdatatable
                if ($pathinfo === '/product/getdatatable') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\ProductController::getdatatableAction',  '_route' => 'softone_product_getdatatable',);
                }

            }

            // softone_product_fororderajaxjson
            if ($pathinfo === '/product/fororderajaxjson') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\ProductController::fororderajaxjsonAction',  '_route' => 'softone_product_fororderajaxjson',);
            }

        }

        if (0 === strpos($pathinfo, '/route')) {
            // softone_route_index
            if ($pathinfo === '/route/route') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\RouteController::indexAction',  '_route' => 'softone_route_index',);
            }

            // softone_route_view
            if (0 === strpos($pathinfo, '/route/view') && preg_match('#^/route/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_route_view')), array (  '_controller' => 'SoftoneBundle\\Controller\\RouteController::viewAction',));
            }

            // softone_route_save
            if ($pathinfo === '/route/save') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\RouteController::saveAction',  '_route' => 'softone_route_save',);
            }

            if (0 === strpos($pathinfo, '/route/get')) {
                // softone_route_gettabs
                if ($pathinfo === '/route/gettab') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\RouteController::gettabs',  '_route' => 'softone_route_gettabs',);
                }

                // softone_route_getdatatable
                if ($pathinfo === '/route/getdatatable') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\RouteController::getdatatableAction',  '_route' => 'softone_route_getdatatable',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/supplier')) {
            // softone_supplier_index
            if ($pathinfo === '/supplier/supplier') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\SupplierController::indexAction',  '_route' => 'softone_supplier_index',);
            }

            // softone_supplier_view
            if (0 === strpos($pathinfo, '/supplier/view') && preg_match('#^/supplier/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'softone_supplier_view')), array (  '_controller' => 'SoftoneBundle\\Controller\\SupplierController::viewAction',));
            }

            // softone_supplier_savection
            if ($pathinfo === '/supplier/save') {
                return array (  '_controller' => 'SoftoneBundle\\Controller\\SupplierController::savection',  '_route' => 'softone_supplier_savection',);
            }

            if (0 === strpos($pathinfo, '/supplier/get')) {
                // softone_supplier_gettabs
                if ($pathinfo === '/supplier/gettab') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\SupplierController::gettabs',  '_route' => 'softone_supplier_gettabs',);
                }

                // softone_supplier_getdatatable
                if ($pathinfo === '/supplier/getdatatable') {
                    return array (  '_controller' => 'SoftoneBundle\\Controller\\SupplierController::getdatatableAction',  '_route' => 'softone_supplier_getdatatable',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

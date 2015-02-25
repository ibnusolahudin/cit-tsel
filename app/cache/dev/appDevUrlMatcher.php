<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/28c7e8b')) {
            // _assetic_28c7e8b
            if ($pathinfo === '/css/28c7e8b.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_28c7e8b',);
            }

            if (0 === strpos($pathinfo, '/css/28c7e8b_')) {
                // _assetic_28c7e8b_0
                if ($pathinfo === '/css/28c7e8b_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_0',);
                }

                // _assetic_28c7e8b_1
                if ($pathinfo === '/css/28c7e8b_main_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_1',);
                }

                // _assetic_28c7e8b_2
                if ($pathinfo === '/css/28c7e8b_theme_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_2',);
                }

                // _assetic_28c7e8b_3
                if ($pathinfo === '/css/28c7e8b_MoneAdmin_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_3',);
                }

                // _assetic_28c7e8b_4
                if ($pathinfo === '/css/28c7e8b_font-awesome_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_4',);
                }

                // _assetic_28c7e8b_5
                if ($pathinfo === '/css/28c7e8b_layout2_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_5',);
                }

                // _assetic_28c7e8b_6
                if ($pathinfo === '/css/28c7e8b_examples_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_6',);
                }

                // _assetic_28c7e8b_7
                if ($pathinfo === '/css/28c7e8b_timeline_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28c7e8b',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_28c7e8b_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/7103bac')) {
                // _assetic_7103bac
                if ($pathinfo === '/js/7103bac.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7103bac',);
                }

                if (0 === strpos($pathinfo, '/js/7103bac_')) {
                    // _assetic_7103bac_0
                    if ($pathinfo === '/js/7103bac_jquery-1.9.0_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7103bac_0',);
                    }

                    // _assetic_7103bac_1
                    if ($pathinfo === '/js/7103bac_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7103bac_1',);
                    }

                    // _assetic_7103bac_2
                    if ($pathinfo === '/js/7103bac_modernizr-2.6.2-respond-1.1.0.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7103bac_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/7103bac_jquery.flot')) {
                        // _assetic_7103bac_3
                        if ($pathinfo === '/js/7103bac_jquery.flot_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7103bac_3',);
                        }

                        if (0 === strpos($pathinfo, '/js/7103bac_jquery.flot.')) {
                            // _assetic_7103bac_4
                            if ($pathinfo === '/js/7103bac_jquery.flot.resize_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_7103bac_4',);
                            }

                            // _assetic_7103bac_5
                            if ($pathinfo === '/js/7103bac_jquery.flot.time_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_7103bac_5',);
                            }

                            // _assetic_7103bac_6
                            if ($pathinfo === '/js/7103bac_jquery.flot.stack_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_7103bac_6',);
                            }

                        }

                    }

                    // _assetic_7103bac_7
                    if ($pathinfo === '/js/7103bac_for_index_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7103bac',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_7103bac_7',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/ed37f4b')) {
                // _assetic_ed37f4b
                if ($pathinfo === '/js/ed37f4b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ed37f4b',);
                }

                if (0 === strpos($pathinfo, '/js/ed37f4b_')) {
                    // _assetic_ed37f4b_0
                    if ($pathinfo === '/js/ed37f4b_jquery-2.0.3.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_0',);
                    }

                    // _assetic_ed37f4b_1
                    if ($pathinfo === '/js/ed37f4b_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_1',);
                    }

                    // _assetic_ed37f4b_2
                    if ($pathinfo === '/js/ed37f4b_modernizr-2.6.2-respond-1.1.0.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/ed37f4b_jquery.flot')) {
                        // _assetic_ed37f4b_3
                        if ($pathinfo === '/js/ed37f4b_jquery.flot_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_3',);
                        }

                        if (0 === strpos($pathinfo, '/js/ed37f4b_jquery.flot.')) {
                            // _assetic_ed37f4b_4
                            if ($pathinfo === '/js/ed37f4b_jquery.flot.resize_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_4',);
                            }

                            // _assetic_ed37f4b_5
                            if ($pathinfo === '/js/ed37f4b_jquery.flot.time_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_5',);
                            }

                            // _assetic_ed37f4b_6
                            if ($pathinfo === '/js/ed37f4b_jquery.flot.stack_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_6',);
                            }

                        }

                    }

                    // _assetic_ed37f4b_7
                    if ($pathinfo === '/js/ed37f4b_for_index_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed37f4b',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_ed37f4b_7',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/b2eca9f')) {
            // _assetic_b2eca9f
            if ($pathinfo === '/css/b2eca9f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2eca9f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b2eca9f',);
            }

            if (0 === strpos($pathinfo, '/css/b2eca9f_')) {
                // _assetic_b2eca9f_0
                if ($pathinfo === '/css/b2eca9f_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2eca9f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b2eca9f_0',);
                }

                // _assetic_b2eca9f_1
                if ($pathinfo === '/css/b2eca9f_metisMenu.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2eca9f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b2eca9f_1',);
                }

                // _assetic_b2eca9f_2
                if ($pathinfo === '/css/b2eca9f_sb-admin-2_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2eca9f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b2eca9f_2',);
                }

                // _assetic_b2eca9f_3
                if ($pathinfo === '/css/b2eca9f_datagrid_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2eca9f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_b2eca9f_3',);
                }

                // _assetic_b2eca9f_4
                if ($pathinfo === '/css/b2eca9f_font-awesome.min_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2eca9f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_b2eca9f_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/461ec47')) {
            // _assetic_461ec47
            if ($pathinfo === '/js/461ec47.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '461ec47',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_461ec47',);
            }

            if (0 === strpos($pathinfo, '/js/461ec47_')) {
                // _assetic_461ec47_0
                if ($pathinfo === '/js/461ec47_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '461ec47',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_461ec47_0',);
                }

                // _assetic_461ec47_1
                if ($pathinfo === '/js/461ec47_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '461ec47',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_461ec47_1',);
                }

                // _assetic_461ec47_2
                if ($pathinfo === '/js/461ec47_metisMenu.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '461ec47',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_461ec47_2',);
                }

                // _assetic_461ec47_3
                if ($pathinfo === '/js/461ec47_sb-admin-2_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '461ec47',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_461ec47_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/2b3ec23')) {
            // _assetic_2b3ec23
            if ($pathinfo === '/css/2b3ec23.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2b3ec23',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2b3ec23',);
            }

            if (0 === strpos($pathinfo, '/css/2b3ec23_')) {
                // _assetic_2b3ec23_0
                if ($pathinfo === '/css/2b3ec23_timeline_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2b3ec23',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2b3ec23_0',);
                }

                // _assetic_2b3ec23_1
                if ($pathinfo === '/css/2b3ec23_morris_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2b3ec23',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2b3ec23_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/e4d84ce')) {
            // _assetic_e4d84ce
            if ($pathinfo === '/js/e4d84ce.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e4d84ce',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e4d84ce',);
            }

            if (0 === strpos($pathinfo, '/js/e4d84ce_')) {
                // _assetic_e4d84ce_0
                if ($pathinfo === '/js/e4d84ce_raphael.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e4d84ce',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e4d84ce_0',);
                }

                if (0 === strpos($pathinfo, '/js/e4d84ce_morris')) {
                    // _assetic_e4d84ce_1
                    if ($pathinfo === '/js/e4d84ce_morris.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e4d84ce',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e4d84ce_1',);
                    }

                    // _assetic_e4d84ce_2
                    if ($pathinfo === '/js/e4d84ce_morris-data_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e4d84ce',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e4d84ce_2',);
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

        if (0 === strpos($pathinfo, '/apps')) {
            // _agn_homepage
            if ($pathinfo === '/apps/dashboard') {
                return array (  '_controller' => 'App\\AgnBundle\\Controller\\DefaultController::indexAction',  '_route' => '_agn_homepage',);
            }

            // _agn_test
            if ($pathinfo === '/apps/test') {
                return array (  '_controller' => 'App\\AgnBundle\\Controller\\DefaultController::testAction',  '_route' => '_agn_test',);
            }

            if (0 === strpos($pathinfo, '/apps/auth')) {
                if (0 === strpos($pathinfo, '/apps/auth/log')) {
                    if (0 === strpos($pathinfo, '/apps/auth/login')) {
                        // _auth_login
                        if ($pathinfo === '/apps/auth/login') {
                            return array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::loginAction',  '_route' => '_auth_login',);
                        }

                        // _auth_login_check
                        if ($pathinfo === '/apps/auth/login_check') {
                            return array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::securityCheckAction',  '_route' => '_auth_login_check',);
                        }

                    }

                    // _auth_logout
                    if ($pathinfo === '/apps/auth/logout') {
                        return array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::logoutAction',  '_route' => '_auth_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/apps/auth/hello')) {
                    // app_agn_security_hello
                    if ($pathinfo === '/apps/auth/hello') {
                        return array (  'name' => 'World',  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloAction',  '_route' => 'app_agn_security_hello',);
                    }

                    // _auth_hello
                    if (preg_match('#^/apps/auth/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_auth_hello')), array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloAction',));
                    }

                    // _auth_hello_admin
                    if (0 === strpos($pathinfo, '/apps/auth/hello/admin') && preg_match('#^/apps/auth/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_auth_hello_admin')), array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloadminAction',));
                    }

                }

                // _auth_encode_passwd
                if (0 === strpos($pathinfo, '/apps/auth/encode/pwd') && preg_match('#^/apps/auth/encode/pwd/(?P<passwd>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_auth_encode_passwd')), array (  '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::setPasswdAction',));
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/apps/secured')) {
            if (0 === strpos($pathinfo, '/apps/secured/log')) {
                if (0 === strpos($pathinfo, '/apps/secured/login')) {
                    // _demo_login
                    if ($pathinfo === '/apps/secured/login') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                    }

                    // _demo_security_check
                    if ($pathinfo === '/apps/secured/login_check') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                    }

                }

                // _demo_logout
                if ($pathinfo === '/apps/secured/logout') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/apps/secured/hello')) {
                // acme_demo_secured_hello
                if ($pathinfo === '/apps/secured/hello') {
                    return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                }

                // _demo_secured_hello
                if (preg_match('#^/apps/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                }

                // _demo_secured_hello_admin
                if (0 === strpos($pathinfo, '/apps/secured/hello/admin') && preg_match('#^/apps/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                }

            }

            // _demo_encode_passwd
            if (0 === strpos($pathinfo, '/apps/secured/encode/pwd') && preg_match('#^/apps/secured/encode/pwd/(?P<passwd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_encode_passwd')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::setPasswdAction',));
            }

        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

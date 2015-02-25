<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

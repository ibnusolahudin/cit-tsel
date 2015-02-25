<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_agn_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apps/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_agn_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\DefaultController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apps/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_auth_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apps/auth/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_auth_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apps/auth/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_auth_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apps/auth/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_agn_security_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apps/auth/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_auth_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/apps/auth/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_auth_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/apps/auth/hello/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_auth_encode_passwd' => array (  0 =>   array (    0 => 'passwd',  ),  1 =>   array (    '_controller' => 'App\\AgnBundle\\Controller\\SecurityController::setPasswdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'passwd',    ),    1 =>     array (      0 => 'text',      1 => '/apps/auth/encode/pwd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

<?php

/* AppAgnBundle:Security:login.html.twig */
class __TwigTemplate_cade292c417ee24476fd93f5761a0f211858b07723930a3e7ff176ef7fd270a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("X4DSBAdmin2Bundle:Login:login.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "X4DSBAdmin2Bundle:Login:login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    Please Sign In
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "
<form role=\"form\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_auth_login_check");
        echo "\" method=\"post\">
    <fieldset>
        <div class=\"form-group\">
            <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"  required=\"required\" autofocus>
        </div>
        <div class=\"form-group\">
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required=\"required\">
        </div>
        ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "            <div class=\"alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
        ";
        }
        // line 22
        echo "        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">Remember Me
            </label>
        </div>
        <input type=\"submit\" id=\"_submit\" class=\"btn btn-lg btn-success btn-block\" name=\"_submit\" value=\"Login\" />
    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "AppAgnBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 20,  72 => 19,  64 => 14,  58 => 11,  55 => 10,  52 => 9,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}

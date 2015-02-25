<?php

/* X4DSBAdmin2Bundle:Login:login.html.twig */
class __TwigTemplate_3200b2138a03c73f9b0f1c97896d09ddff7a447b26544696637921e8cc55ccc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("X4DSBAdmin2Bundle:Login:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "X4DSBAdmin2Bundle:Login:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
<form role=\"form\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <fieldset>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"form-group\">
            <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"  required=\"required\" autofocus>
        </div>
        <div class=\"form-group\">
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "\" required=\"required\">
        </div>
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "
            </label>
        </div>
        <input type=\"submit\" id=\"_submit\" class=\"btn btn-lg btn-success btn-block\" name=\"_submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "X4DSBAdmin2Bundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  67 => 16,  60 => 12,  52 => 9,  47 => 7,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

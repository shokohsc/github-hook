<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04ba027650e55fb5f92e2eff873c4c1646228fa99809efd5e100545fe3cac8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59dadb1063aa57f4630c2ec7af0526f5f8fa2c511d8f24c08c1a954632f844ee = $this->env->getExtension("native_profiler");
        $__internal_59dadb1063aa57f4630c2ec7af0526f5f8fa2c511d8f24c08c1a954632f844ee->enter($__internal_59dadb1063aa57f4630c2ec7af0526f5f8fa2c511d8f24c08c1a954632f844ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dadb1063aa57f4630c2ec7af0526f5f8fa2c511d8f24c08c1a954632f844ee->leave($__internal_59dadb1063aa57f4630c2ec7af0526f5f8fa2c511d8f24c08c1a954632f844ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d6e401cd34dceb92c8d3a09026b2d44b049242b0ae886de67d963463798cf26 = $this->env->getExtension("native_profiler");
        $__internal_9d6e401cd34dceb92c8d3a09026b2d44b049242b0ae886de67d963463798cf26->enter($__internal_9d6e401cd34dceb92c8d3a09026b2d44b049242b0ae886de67d963463798cf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d6e401cd34dceb92c8d3a09026b2d44b049242b0ae886de67d963463798cf26->leave($__internal_9d6e401cd34dceb92c8d3a09026b2d44b049242b0ae886de67d963463798cf26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cf70a79f5f939ba95ecf2d72b1d056515c96ca2211e735836f60fe5c2408c3f = $this->env->getExtension("native_profiler");
        $__internal_5cf70a79f5f939ba95ecf2d72b1d056515c96ca2211e735836f60fe5c2408c3f->enter($__internal_5cf70a79f5f939ba95ecf2d72b1d056515c96ca2211e735836f60fe5c2408c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5cf70a79f5f939ba95ecf2d72b1d056515c96ca2211e735836f60fe5c2408c3f->leave($__internal_5cf70a79f5f939ba95ecf2d72b1d056515c96ca2211e735836f60fe5c2408c3f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73485b466816b0c74f46b7dae701549311b67a8fe447c36f45c4337ebd5ea208 = $this->env->getExtension("native_profiler");
        $__internal_73485b466816b0c74f46b7dae701549311b67a8fe447c36f45c4337ebd5ea208->enter($__internal_73485b466816b0c74f46b7dae701549311b67a8fe447c36f45c4337ebd5ea208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_73485b466816b0c74f46b7dae701549311b67a8fe447c36f45c4337ebd5ea208->leave($__internal_73485b466816b0c74f46b7dae701549311b67a8fe447c36f45c4337ebd5ea208_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

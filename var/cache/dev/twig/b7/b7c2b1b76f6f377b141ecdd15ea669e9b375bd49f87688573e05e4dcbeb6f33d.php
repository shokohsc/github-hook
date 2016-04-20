<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d58f084a7065b067b23b3799ffa404f9017f83fdae35e8ff6c062b2d62310ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f175866d95c926dbf162cfd738a78456487ce9ab7bdbc9e9b435423988097a6 = $this->env->getExtension("native_profiler");
        $__internal_0f175866d95c926dbf162cfd738a78456487ce9ab7bdbc9e9b435423988097a6->enter($__internal_0f175866d95c926dbf162cfd738a78456487ce9ab7bdbc9e9b435423988097a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f175866d95c926dbf162cfd738a78456487ce9ab7bdbc9e9b435423988097a6->leave($__internal_0f175866d95c926dbf162cfd738a78456487ce9ab7bdbc9e9b435423988097a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f16331b01dcaaf34fba8f31d3b082585cc72d87b0c8b1c314570af4ae0178c91 = $this->env->getExtension("native_profiler");
        $__internal_f16331b01dcaaf34fba8f31d3b082585cc72d87b0c8b1c314570af4ae0178c91->enter($__internal_f16331b01dcaaf34fba8f31d3b082585cc72d87b0c8b1c314570af4ae0178c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f16331b01dcaaf34fba8f31d3b082585cc72d87b0c8b1c314570af4ae0178c91->leave($__internal_f16331b01dcaaf34fba8f31d3b082585cc72d87b0c8b1c314570af4ae0178c91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb3e0cea18ed55f1c1de700c2cb89877b6de877d5f1a159413e6b57f1025bf11 = $this->env->getExtension("native_profiler");
        $__internal_fb3e0cea18ed55f1c1de700c2cb89877b6de877d5f1a159413e6b57f1025bf11->enter($__internal_fb3e0cea18ed55f1c1de700c2cb89877b6de877d5f1a159413e6b57f1025bf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb3e0cea18ed55f1c1de700c2cb89877b6de877d5f1a159413e6b57f1025bf11->leave($__internal_fb3e0cea18ed55f1c1de700c2cb89877b6de877d5f1a159413e6b57f1025bf11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a5712f19abf783d1d45f20e1362f2510f2776e9f98aeea8c3139c842a175d24 = $this->env->getExtension("native_profiler");
        $__internal_9a5712f19abf783d1d45f20e1362f2510f2776e9f98aeea8c3139c842a175d24->enter($__internal_9a5712f19abf783d1d45f20e1362f2510f2776e9f98aeea8c3139c842a175d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a5712f19abf783d1d45f20e1362f2510f2776e9f98aeea8c3139c842a175d24->leave($__internal_9a5712f19abf783d1d45f20e1362f2510f2776e9f98aeea8c3139c842a175d24_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

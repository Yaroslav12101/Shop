<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_684cc818b8fdc8ee79ee8de7aa7a2835de637bd0df168ec21c2795247ab2692b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 7, $this->source); })()) % 3));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "                <div class=\"card col\" style=\"width: 20rem;\">
                    <img src=\"images/products/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 9), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"card-img-top\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</a>
                        </h4>
                        <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 14), "html", null, true);
            echo " грн</p>
                        <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "specifications", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"btn btn-primary\">Купить</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 20,  103 => 15,  99 => 14,  92 => 12,  80 => 9,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            {% for product in products % 3 %}
                <div class=\"card col\" style=\"width: 20rem;\">
                    <img src=\"images/products/{{ product.slug }}/{{ product.images }}\" class=\"card-img-top\" title=\"{{ product.name }}\" alt=\"{{ product.name }}\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"{{ path('view', {slug: product.slug}) }}\">{{ product.name }}</a>
                        </h4>
                        <p class=\"card-text\">{{ product.price }} грн</p>
                        <p class=\"card-text\">{{ product.specifications }}</p>
                        <a href=\"#\" class=\"btn btn-primary\">Купить</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

{% endblock %}", "home/index.html.twig", "/home/yaroslav/var/www/shop.ll/templates/home/index.html.twig");
    }
}

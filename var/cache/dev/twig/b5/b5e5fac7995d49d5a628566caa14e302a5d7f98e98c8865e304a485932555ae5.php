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

/* category/products.html.twig */
class __TwigTemplate_6be17469566f93a78b773a18fcf9b610968059182185c3d34b73eb362e57da3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/products.html.twig", 1);
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
        $context["i"] = 0;
        // line 8
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "            ";
            if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 9, $this->source); })()) % 3) == 0)) {
                // line 10
                echo "        </div>
        <div class=\"row\">
            ";
            }
            // line 13
            echo "            <div class=\"col-4\">
                <div class=\"card col\" style=\"width: 20rem;\">
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\"><img src=\"images/products/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 15), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top home\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                        </h4>
                        <p class=\"card-text\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo " грн</p>
                        <p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "specifications", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", true, true, false, 22)) {
                // line 23
                echo "                            <div class=\"categoryinput\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 25
                    echo "                                    <span><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\"></a></span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </div>
                        ";
            }
            // line 29
            echo "                        <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product_to_cart");
            echo "\"></form>
                        <a class=\"btn btn-success product-link\" data-id=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">Купить</a>
                        </form>
                    </div>
                </div>
            </div>
            ";
            // line 35
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 35, $this->source); })()) + 1);
            // line 36
            echo "            ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 36, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 36, $this->source); })()), "count", [], "any", false, false, false, 36))) {
                // line 37
                echo "        </div>
        ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        <div class=\"navigation\">
            ";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 41, $this->source); })()));
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 41,  171 => 40,  165 => 39,  161 => 37,  158 => 36,  156 => 35,  148 => 30,  143 => 29,  139 => 27,  130 => 25,  126 => 24,  123 => 23,  121 => 22,  117 => 21,  113 => 20,  106 => 18,  92 => 15,  88 => 13,  83 => 10,  80 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            {% set i=0 %}
            {% for product in pagination %}
            {% if i % 3 ==0 %}
        </div>
        <div class=\"row\">
            {% endif %}
            <div class=\"col-4\">
                <div class=\"card col\" style=\"width: 20rem;\">
                    <a href=\"{{ path('view', {slug: product.slug}) }}\"><img src=\"images/products/{{ product.slug }}/{{ product.images }}\" class=\"card-img-top home\" title=\"{{ product.name }}\" alt=\"{{ product.name }}\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"{{ path('view', {slug: product.slug}) }}\">{{ product.name }}</a>
                        </h4>
                        <p class=\"card-text\">{{ product.price }} грн</p>
                        <p class=\"card-text\">{{ product.specifications }}</p>
                        {% if product.category is defined %}
                            <div class=\"categoryinput\">
                                {% for category in product.category %}
                                    <span><a href=\"{{ path('categories', {id: category.id}) }}\"></a></span>
                                {% endfor %}
                            </div>
                        {% endif %}
                        <form method=\"post\" action=\"{{ path('add_product_to_cart') }}\"></form>
                        <a class=\"btn btn-success product-link\" data-id=\"{{ product.id }}\">Купить</a>
                        </form>
                    </div>
                </div>
            </div>
            {% set i = i + 1 %}
            {% if i == pagination.count %}
        </div>
        {% endif %}
        {% endfor %}
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>

{% endblock %}", "category/products.html.twig", "/home/yaroslav/var/www/shop.ll/templates/category/products.html.twig");
    }
}

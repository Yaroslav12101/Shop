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
class __TwigTemplate_a54bc0dc1cdba616ec2c1142961e69466878492d7bf6a396b7550a02bf9c9047 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"6\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"7\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"8\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"9\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"images/1.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/2.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/3.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/4.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/5.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/6.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/7.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/8.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/9.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 59
        $context["i"] = 0;
        // line 60
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 61
            echo "                ";
            if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 61, $this->source); })()) % 3) == 0)) {
                // line 62
                echo "                </div>
                <div class=\"row\">
                ";
            }
            // line 65
            echo "                <div class=\"col-4\">
                <div class=\"card col\" style=\"width: 20rem;\">
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><img src=\"images/products/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 67), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"card-img-top home\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</a>
                        </h4>
                        <p class=\"card-text\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72), "html", null, true);
            echo " грн</p>
                        <p class=\"card-text\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "specifications", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
                        ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", true, true, false, 74)) {
                // line 75
                echo "                        <div class=\"categoryinput\">
                        ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 77
                    echo "                            <span><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\"></a></span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                        </div>
                        ";
            }
            // line 81
            echo "                        <form method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product_to_cart");
            echo "\"></form>
                        <a class=\"btn btn-success product-link\" data-id=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">Купить</a>
                        </form>
                    </div>
                </div>
                </div>
                ";
            // line 87
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 87, $this->source); })()) + 1);
            // line 88
            echo "                ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 88, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 88, $this->source); })()), "count", [], "any", false, false, false, 88))) {
                // line 89
                echo "                </div>
                ";
            }
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            <div class=\"navigation\">
                ";
        // line 93
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 93, $this->source); })()));
        echo "
            </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo " ";
        
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
        return array (  252 => 100,  242 => 99,  227 => 93,  224 => 92,  218 => 91,  214 => 89,  211 => 88,  209 => 87,  201 => 82,  196 => 81,  192 => 79,  183 => 77,  179 => 76,  176 => 75,  174 => 74,  170 => 73,  166 => 72,  159 => 70,  145 => 67,  141 => 65,  136 => 62,  133 => 61,  128 => 60,  126 => 59,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"5\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"6\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"7\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"8\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"9\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"images/1.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/2.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/3.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/4.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/5.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/6.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/7.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/8.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/9.jpeg\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


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

{% endblock %}

{% block javascripts %}
 {% endblock %}", "home/index.html.twig", "/home/yaroslav/var/www/shop.ll/templates/home/index.html.twig");
    }
}

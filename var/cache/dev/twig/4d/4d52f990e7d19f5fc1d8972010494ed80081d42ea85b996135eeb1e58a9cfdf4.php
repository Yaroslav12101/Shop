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

/* headerNav/faq.html.twig */
class __TwigTemplate_8976ae5c022aaa1d232c7a300ddb68a94599540369bb60b0ad2a1645b62b2009 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "headerNav/faq.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
        <h3 class=\"heading\">Вопросы и ответы</h3>
        <p>Здесь вы найдете ответы на самые распространенные вопросы наших покупателей. Если вы не нашли ответ, не отчаивайтесь — пришлите ваш вопрос нам, и мы вам ответим.</p>
        <p>
        <h5 class=\"heading\">Можно ли заказать товар с доставкой в другую страну?</h5>
        К сожалению, пока такой возможности нет, сейчас можно заказать товар только по территории Украины.
        <h5 class=\"heading\">Можно ли изменить место доставки или имя получателя после оформления заказа?</h5>
        Да, можно. Для этого необходимо связаться с оператором колл-центра и продиктовать новый адрес доставки или имя получателя.
        <h5 class=\"heading\">Можно ли оплатить заказ картой при получении?</h5>
        К сожалению, оплатить товар картой нельзя. Вы можете оплатить товар наличными при получении или картой на сайте сразу при оформлении заказа.
        <h5 class=\"heading\">На какой срок предоставляется гарантия на товары?</h5>
        Срок гарантии указан в описании каждого товара на нашем сайте.
        <h5 class=\"heading\">Можно ли обменять или вернуть товар?</h5>
        Да, вы можете обменять или вернуть товар в течение 14 дней после покупки.
        <h5 class=\"heading\">Сколько дней за мной будет закреплен мой заказ?</h5>
        Товар будет зарезервирован за вами в течение трех дней.
        <h5 class=\"heading\">Если на сайте товара нет в наличии, можно ли его заказать?</h5>
        Нажав на кнопку “Узнать, когда появится” в карточке товара, вы можете оставить свой адрес электронной почты и телефон и мы сообщим вам о поступлении товара.
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "headerNav/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 7,  77 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block carousel %}
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h3 class=\"heading\">Вопросы и ответы</h3>
        <p>Здесь вы найдете ответы на самые распространенные вопросы наших покупателей. Если вы не нашли ответ, не отчаивайтесь — пришлите ваш вопрос нам, и мы вам ответим.</p>
        <p>
        <h5 class=\"heading\">Можно ли заказать товар с доставкой в другую страну?</h5>
        К сожалению, пока такой возможности нет, сейчас можно заказать товар только по территории Украины.
        <h5 class=\"heading\">Можно ли изменить место доставки или имя получателя после оформления заказа?</h5>
        Да, можно. Для этого необходимо связаться с оператором колл-центра и продиктовать новый адрес доставки или имя получателя.
        <h5 class=\"heading\">Можно ли оплатить заказ картой при получении?</h5>
        К сожалению, оплатить товар картой нельзя. Вы можете оплатить товар наличными при получении или картой на сайте сразу при оформлении заказа.
        <h5 class=\"heading\">На какой срок предоставляется гарантия на товары?</h5>
        Срок гарантии указан в описании каждого товара на нашем сайте.
        <h5 class=\"heading\">Можно ли обменять или вернуть товар?</h5>
        Да, вы можете обменять или вернуть товар в течение 14 дней после покупки.
        <h5 class=\"heading\">Сколько дней за мной будет закреплен мой заказ?</h5>
        Товар будет зарезервирован за вами в течение трех дней.
        <h5 class=\"heading\">Если на сайте товара нет в наличии, можно ли его заказать?</h5>
        Нажав на кнопку “Узнать, когда появится” в карточке товара, вы можете оставить свой адрес электронной почты и телефон и мы сообщим вам о поступлении товара.
        </p>
    </div>
{% endblock %}
", "headerNav/faq.html.twig", "/home/yaroslav/var/www/shop.ll/templates/headerNav/faq.html.twig");
    }
}

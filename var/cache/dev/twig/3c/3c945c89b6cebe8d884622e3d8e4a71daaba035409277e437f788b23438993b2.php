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

/* headerNav/traidein.html.twig */
class __TwigTemplate_78903cad49299713e1616895bd182ae0308415c5d015c2aeb9fbe0098eefceaf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/traidein.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerNav/traidein.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "headerNav/traidein.html.twig", 1);
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
        <h3 class=\"heading\">Обмен</h3>
        <p>
            Новые гаджеты приходят в нашу жизнь почти каждый день, и чтобы с выгодой попрощаться со старой техникой, мы запускаем для своих Клиентов программу Обмен. Программа предоставляет вам отличную возможность регулярно совершать апгрейд своей техники на выгодных условиях.
        </p>
        <p>
            Размер скидки, которую вы получаете, сдав свою технику, рассчитывается в зависимости от:
        <ul>
            <li>модели;</li>
            <li>объема встроенной памяти устройства;</li>
            <li>срока эксплуатации;</li>
            <li>технического состояния и комплектности товара, который вы хотите обменять.</li>
        </ul>
        </p>
        <p>То есть, чем лучше состояние и меньше срок эксплуатации техники, которую вы сдаете, тем больше будет скидка на приобретение любых товаров у нас на сайте.</p>
        <p>Приходите в магазины наших партнеров и обменяйте свой старый девайс на любой новый товар. Не забудьте паспорт и код ИНН!</p>
        <p>Стать участником программы обмена техники могут все граждане Украины, достигшие совершеннолетия.</p>
        <p>В программе обмена участвует следующее старое оборудование:
        <ul>
            <li>Смартфоны: iPhone, Samsung, Xiaomi, Meizu, Huawei, Honor.</li>
            <li>Ноутбуки: Apple</li>
            <li>Планшеты: Apple, Samsung, Huawei, Lenovo.</li>
            <li>Смарт-часы: Apple, Samsung, Huawei.</li>
        </ul>
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "headerNav/traidein.html.twig";
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
        <h3 class=\"heading\">Обмен</h3>
        <p>
            Новые гаджеты приходят в нашу жизнь почти каждый день, и чтобы с выгодой попрощаться со старой техникой, мы запускаем для своих Клиентов программу Обмен. Программа предоставляет вам отличную возможность регулярно совершать апгрейд своей техники на выгодных условиях.
        </p>
        <p>
            Размер скидки, которую вы получаете, сдав свою технику, рассчитывается в зависимости от:
        <ul>
            <li>модели;</li>
            <li>объема встроенной памяти устройства;</li>
            <li>срока эксплуатации;</li>
            <li>технического состояния и комплектности товара, который вы хотите обменять.</li>
        </ul>
        </p>
        <p>То есть, чем лучше состояние и меньше срок эксплуатации техники, которую вы сдаете, тем больше будет скидка на приобретение любых товаров у нас на сайте.</p>
        <p>Приходите в магазины наших партнеров и обменяйте свой старый девайс на любой новый товар. Не забудьте паспорт и код ИНН!</p>
        <p>Стать участником программы обмена техники могут все граждане Украины, достигшие совершеннолетия.</p>
        <p>В программе обмена участвует следующее старое оборудование:
        <ul>
            <li>Смартфоны: iPhone, Samsung, Xiaomi, Meizu, Huawei, Honor.</li>
            <li>Ноутбуки: Apple</li>
            <li>Планшеты: Apple, Samsung, Huawei, Lenovo.</li>
            <li>Смарт-часы: Apple, Samsung, Huawei.</li>
        </ul>
        </p>
    </div>
{% endblock %}
", "headerNav/traidein.html.twig", "/home/yaroslav/var/www/shop.ll/templates/headerNav/traidein.html.twig");
    }
}

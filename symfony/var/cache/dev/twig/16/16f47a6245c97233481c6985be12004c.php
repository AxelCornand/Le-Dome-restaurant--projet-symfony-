<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_b3691d594842d6f5022e3456cb0aedfa extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Bootstrap Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\">
    
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 54
        yield "</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <i class=\"bi bi-shop\"></i> Le Dôme
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        yield "\">Notre Menu</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\">Réserver</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
                    </li>

                    ";
        // line 80
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                <i class=\"bi bi-gear\"></i> Admin
            </a>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dish_index");
            yield "\">Gestion Plats</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
            yield "\">Gestion Catégories</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allergen_index");
            yield "\">Gestion Allergènes</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 89
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
            yield "\">Gestion Réservations</a></li>
            </ul>
        </li>
        ";
        }
        // line 93
        yield "        
        ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                <i class=\"bi bi-box-arrow-right\"></i> Déconnexion (";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "email", [], "any", false, false, false, 97), "html", null, true);
            yield ")
            </a>
        </li>
        ";
        } else {
            // line 101
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                <i class=\"bi bi-box-arrow-in-right\"></i> Connexion
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                <i class=\"bi bi-box-arrow-in-right\"></i> Inscription
            </a>
        </li>
        ";
        }
        // line 112
        yield "                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    <div class=\"container mt-3\">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 120
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 121
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "    </div>

    <!-- Main Content -->
    ";
        // line 130
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 131
        yield "
    <!-- Footer -->
    <footer class=\"mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h5><i class=\"bi bi-shop\"></i> Le Dôme</h5>
                    <p>Cuisine traditionnelle et raffinée depuis 199'</p>
                </div>
                <div class=\"col-md-4\">
                    <h5>Horaires</h5>
                    <p>
                        <i class=\"bi bi-clock\"></i> Du lundi au samedi<br>
                        12h00 - 14h00 coté restauration, fermeture 19h00
                </div>
                <div class=\"col-md-4\">
                    <h5>Contact</h5>
                    <p>
                        <i class=\"bi bi-geo-alt\"></i> 10 chemin petit, 69300 Caluire<br>
                        <i class=\"bi bi-telephone\"></i> 04 78 23 64 15<br>
                        <i class=\"bi bi-envelope\"></i> contact@ledome.fr
                    </p>
                </div>
            </div>
            <hr class=\"bg-light\">
            <div class=\"text-center\">
                <p>&copy; ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Restaurant Le Dome - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    ";
        // line 164
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 165
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Restaurant Le Dôme";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        yield "    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        .card {
            transition: transform 0.3s;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #28a745;
        }
        .allergen-badge {
            font-size: 0.8rem;
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  386 => 164,  364 => 130,  314 => 14,  301 => 13,  278 => 6,  266 => 165,  264 => 164,  254 => 157,  226 => 131,  224 => 130,  219 => 127,  213 => 126,  203 => 122,  198 => 121,  193 => 120,  189 => 119,  180 => 112,  172 => 107,  164 => 102,  161 => 101,  154 => 97,  150 => 96,  147 => 95,  145 => 94,  142 => 93,  135 => 89,  131 => 88,  127 => 87,  123 => 86,  116 => 81,  114 => 80,  108 => 77,  102 => 74,  96 => 71,  90 => 68,  78 => 59,  71 => 54,  69 => 13,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Restaurant Le Dôme{% endblock %}</title>
    
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Bootstrap Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css\">
    
    {% block stylesheets %}
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        .card {
            transition: transform 0.3s;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #28a745;
        }
        .allergen-badge {
            font-size: 0.8rem;
        }
    </style>
    {% endblock %}
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                <i class=\"bi bi-shop\"></i> Le Dôme
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_menu') }}\">Notre Menu</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_reservation') }}\">Réserver</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact</a>
                    </li>

                    {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                <i class=\"bi bi-gear\"></i> Admin
            </a>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"{{ path('app_dish_index') }}\">Gestion Plats</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_category_index') }}\">Gestion Catégories</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_allergen_index') }}\">Gestion Allergènes</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_reservation_index') }}\">Gestion Réservations</a></li>
            </ul>
        </li>
        {% endif %}
        
        {% if app.user %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                <i class=\"bi bi-box-arrow-right\"></i> Déconnexion ({{ app.user.email }})
            </a>
        </li>
        {% else %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                <i class=\"bi bi-box-arrow-in-right\"></i> Connexion
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
                <i class=\"bi bi-box-arrow-in-right\"></i> Inscription
            </a>
        </li>
        {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    <div class=\"container mt-3\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <!-- Main Content -->
    {% block body %}{% endblock %}

    <!-- Footer -->
    <footer class=\"mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h5><i class=\"bi bi-shop\"></i> Le Dôme</h5>
                    <p>Cuisine traditionnelle et raffinée depuis 199'</p>
                </div>
                <div class=\"col-md-4\">
                    <h5>Horaires</h5>
                    <p>
                        <i class=\"bi bi-clock\"></i> Du lundi au samedi<br>
                        12h00 - 14h00 coté restauration, fermeture 19h00
                </div>
                <div class=\"col-md-4\">
                    <h5>Contact</h5>
                    <p>
                        <i class=\"bi bi-geo-alt\"></i> 10 chemin petit, 69300 Caluire<br>
                        <i class=\"bi bi-telephone\"></i> 04 78 23 64 15<br>
                        <i class=\"bi bi-envelope\"></i> contact@ledome.fr
                    </p>
                </div>
            </div>
            <hr class=\"bg-light\">
            <div class=\"text-center\">
                <p>&copy; {{ \"now\"|date(\"Y\") }} Restaurant Le Dome - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/var/www/symfony/templates/base.html.twig");
    }
}

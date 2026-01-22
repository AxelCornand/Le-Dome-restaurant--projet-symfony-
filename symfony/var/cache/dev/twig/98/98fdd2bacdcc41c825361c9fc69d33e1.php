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

/* home/index.html.twig */
class __TwigTemplate_1e30185a3b6eea45fc6de5b3f2d28eb7 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Accueil - Restaurant Le Dôme";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<!-- Hero Section -->
<div class=\"hero-section\">
    <div class=\"container\">
        <h1 class=\"display-3 fw-bold mb-4\">Bienvenue au Restaurant Le Dôme</h1>
        <p class=\"lead mb-4\">Une expérience culinaire authentique dans un cadre conviviale</p>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"btn btn-primary btn-lg me-3\">
            <i class=\"bi bi-calendar-check\"></i> Réserver une table
        </a>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        yield "\" class=\"btn btn-outline-light btn-lg\">
            <i class=\"bi bi-book\"></i> Découvrir notre menu
        </a>
    </div>
</div>

<!-- Présentation du restaurant -->
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-lg-6 mb-4\">
            <h2 class=\"mb-4\">Notre Histoire</h2>
            <p class=\"lead\">
                Depuis 1994, Le Dôme propose une cuisine française traditionnelle 
                revisitée avec des produits frais et de saison.
            </p>
            <p>
                Notre chef, passionné par son métier, sélectionne avec soin 
                chaque ingrédient pour vous offrir une expérience culinaire 
                inoubliable. Dans un cadre élégant et chaleureux, notre équipe 
                vous accueille pour un moment de partage et de convivialité.
            </p>
        </div>
        <div class=\"col-lg-6 mb-4\">
            <img src=\"https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600\" 
                 class=\"img-fluid rounded shadow\" alt=\"Restaurant\">
        </div>
    </div>
</div>

<!-- Points forts -->
<div class=\"bg-light py-5\">
    <div class=\"container\">
        <h2 class=\"text-center mb-5\">Pourquoi nous choisir ?</h2>
        <div class=\"row\">
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-award display-4 text-primary mb-3\"></i>
                <h4>Qualité Premium</h4>
                <p>Produits frais sélectionnés avec soin</p>
            </div>
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-people display-4 text-primary mb-3\"></i>
                <h4>Service Attentionné</h4>
                <p>Une équipe professionnelle à votre écoute</p>
            </div>
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-house-heart display-4 text-primary mb-3\"></i>
                <h4>Ambiance Chaleureuse</h4>
                <p>Un cadre convivial</p>
            </div>
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-egg-fried display-4 text-primary mb-3\"></i>
                <h4>Chef Expérimenté</h4>
                <p>Plus de 20 ans d'expérience culinaire</p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action pour réservation -->
<div class=\"container my-5\">
    <div class=\"card bg-primary text-white\">
        <div class=\"card-body text-center py-5\">
            <h2 class=\"card-title mb-3\">Réservez votre table dès maintenant</h2>
            <p class=\"lead mb-4\">
                Du lundi au samedi, de 12h à 14h<br>
            </p>
            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"btn btn-light btn-lg\">
                <i class=\"bi bi-calendar-plus\"></i> Faire une réservation
            </a>
        </div>
    </div>
</div>

<!-- Horaires et informations -->
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-clock display-4 text-primary mb-3\"></i>
                    <h4>Nos Horaires</h4>
                    <p class=\"mb-1\"><strong>Lundi - Samedi</strong></p>
                    <p class=\"mb-1\">Déjeuner : 12h00 - 14h00</p>
                    <p>Dîner : 19h00 - 22h00</p>
                    <p class=\"text-muted\"><small>Fermé le dimanche</small></p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-geo-alt display-4 text-primary mb-3\"></i>
                    <h4>Nous Trouver</h4>
                    <p>10 chemin petit</p>
                    <p>69300 Caluire, France</p>
                    <a href=\"#\" class=\"btn btn-outline-primary btn-sm mt-2\">
                        <i class=\"bi bi-map\"></i> Voir sur la carte
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-telephone display-4 text-primary mb-3\"></i>
                    <h4>Nous Contacter</h4>
                    <p><i class=\"bi bi-telephone\"></i> 04 78 23 64 15</p>
                    <p><i class=\"bi bi-envelope\"></i> contact@ledôme.fr</p>
                    <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-outline-primary btn-sm mt-2\">
                        <i class=\"bi bi-send\"></i> Envoyer un message
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  227 => 122,  182 => 80,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Restaurant Le Dôme{% endblock %}

{% block body %}
<!-- Hero Section -->
<div class=\"hero-section\">
    <div class=\"container\">
        <h1 class=\"display-3 fw-bold mb-4\">Bienvenue au Restaurant Le Dôme</h1>
        <p class=\"lead mb-4\">Une expérience culinaire authentique dans un cadre conviviale</p>
        <a href=\"{{ path('app_reservation') }}\" class=\"btn btn-primary btn-lg me-3\">
            <i class=\"bi bi-calendar-check\"></i> Réserver une table
        </a>
        <a href=\"{{ path('app_menu') }}\" class=\"btn btn-outline-light btn-lg\">
            <i class=\"bi bi-book\"></i> Découvrir notre menu
        </a>
    </div>
</div>

<!-- Présentation du restaurant -->
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-lg-6 mb-4\">
            <h2 class=\"mb-4\">Notre Histoire</h2>
            <p class=\"lead\">
                Depuis 1994, Le Dôme propose une cuisine française traditionnelle 
                revisitée avec des produits frais et de saison.
            </p>
            <p>
                Notre chef, passionné par son métier, sélectionne avec soin 
                chaque ingrédient pour vous offrir une expérience culinaire 
                inoubliable. Dans un cadre élégant et chaleureux, notre équipe 
                vous accueille pour un moment de partage et de convivialité.
            </p>
        </div>
        <div class=\"col-lg-6 mb-4\">
            <img src=\"https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600\" 
                 class=\"img-fluid rounded shadow\" alt=\"Restaurant\">
        </div>
    </div>
</div>

<!-- Points forts -->
<div class=\"bg-light py-5\">
    <div class=\"container\">
        <h2 class=\"text-center mb-5\">Pourquoi nous choisir ?</h2>
        <div class=\"row\">
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-award display-4 text-primary mb-3\"></i>
                <h4>Qualité Premium</h4>
                <p>Produits frais sélectionnés avec soin</p>
            </div>
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-people display-4 text-primary mb-3\"></i>
                <h4>Service Attentionné</h4>
                <p>Une équipe professionnelle à votre écoute</p>
            </div>
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-house-heart display-4 text-primary mb-3\"></i>
                <h4>Ambiance Chaleureuse</h4>
                <p>Un cadre convivial</p>
            </div>
            <div class=\"col-md-3 text-center mb-4\">
                <i class=\"bi bi-egg-fried display-4 text-primary mb-3\"></i>
                <h4>Chef Expérimenté</h4>
                <p>Plus de 20 ans d'expérience culinaire</p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action pour réservation -->
<div class=\"container my-5\">
    <div class=\"card bg-primary text-white\">
        <div class=\"card-body text-center py-5\">
            <h2 class=\"card-title mb-3\">Réservez votre table dès maintenant</h2>
            <p class=\"lead mb-4\">
                Du lundi au samedi, de 12h à 14h<br>
            </p>
            <a href=\"{{ path('app_reservation') }}\" class=\"btn btn-light btn-lg\">
                <i class=\"bi bi-calendar-plus\"></i> Faire une réservation
            </a>
        </div>
    </div>
</div>

<!-- Horaires et informations -->
<div class=\"container my-5\">
    <div class=\"row\">
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-clock display-4 text-primary mb-3\"></i>
                    <h4>Nos Horaires</h4>
                    <p class=\"mb-1\"><strong>Lundi - Samedi</strong></p>
                    <p class=\"mb-1\">Déjeuner : 12h00 - 14h00</p>
                    <p>Dîner : 19h00 - 22h00</p>
                    <p class=\"text-muted\"><small>Fermé le dimanche</small></p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-geo-alt display-4 text-primary mb-3\"></i>
                    <h4>Nous Trouver</h4>
                    <p>10 chemin petit</p>
                    <p>69300 Caluire, France</p>
                    <a href=\"#\" class=\"btn btn-outline-primary btn-sm mt-2\">
                        <i class=\"bi bi-map\"></i> Voir sur la carte
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-telephone display-4 text-primary mb-3\"></i>
                    <h4>Nous Contacter</h4>
                    <p><i class=\"bi bi-telephone\"></i> 04 78 23 64 15</p>
                    <p><i class=\"bi bi-envelope\"></i> contact@ledôme.fr</p>
                    <a href=\"{{ path('app_contact') }}\" class=\"btn btn-outline-primary btn-sm mt-2\">
                        <i class=\"bi bi-send\"></i> Envoyer un message
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "home/index.html.twig", "/var/www/symfony/templates/home/index.html.twig");
    }
}

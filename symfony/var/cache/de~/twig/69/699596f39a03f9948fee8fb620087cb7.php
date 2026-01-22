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

/* security/login.html.twig */
class __TwigTemplate_a1b84e84092ba855ad1b2575c10fa4e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion - Administration";
        
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
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-body p-5\">
                    <h1 class=\"text-center mb-4\">
                        <i class=\"bi bi-shield-lock\"></i> Connexion Admin
                    </h1>

                    ";
        // line 15
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 20
        yield "
                    ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                        <div class=\"alert alert-info\">
                            Vous êtes connecté en tant que ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "userIdentifier", [], "any", false, false, false, 23), "html", null, true);
            yield "
                            <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                        </div>
                    ";
        }
        // line 27
        yield "
                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label\">Email</label>
                            <input type=\"email\" 
                                   value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" 
                                   name=\"_username\" 
                                   id=\"inputEmail\" 
                                   class=\"form-control\" 
                                   placeholder=\"votre@email.com\"
                                   autocomplete=\"email\" 
                                   required 
                                   autofocus>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label\">Mot de passe</label>
                            <input type=\"password\" 
                                   name=\"_password\" 
                                   id=\"inputPassword\" 
                                   class=\"form-control\" 
                                   placeholder=\"Votre mot de passe\"
                                   autocomplete=\"current-password\" 
                                   required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <div class=\"d-grid\">
                            <button class=\"btn btn-primary btn-lg\" type=\"submit\">
                                <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                            </button>
                        </div>
                    </form>

                    <hr class=\"my-4\">

                    <div class=\"text-center\">
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted\">
                            <i class=\"bi bi-arrow-left\"></i> Retour à l'accueil
                        </a>
                    </div>
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
        return "security/login.html.twig";
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
        return array (  186 => 65,  171 => 53,  147 => 32,  140 => 27,  134 => 24,  130 => 23,  127 => 22,  125 => 21,  122 => 20,  116 => 17,  113 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion - Administration{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-body p-5\">
                    <h1 class=\"text-center mb-4\">
                        <i class=\"bi bi-shield-lock\"></i> Connexion Admin
                    </h1>

                    {% if error %}
                        <div class=\"alert alert-danger\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"alert alert-info\">
                            Vous êtes connecté en tant que {{ app.user.userIdentifier }}
                            <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                        </div>
                    {% endif %}

                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"inputEmail\" class=\"form-label\">Email</label>
                            <input type=\"email\" 
                                   value=\"{{ last_username }}\" 
                                   name=\"_username\" 
                                   id=\"inputEmail\" 
                                   class=\"form-control\" 
                                   placeholder=\"votre@email.com\"
                                   autocomplete=\"email\" 
                                   required 
                                   autofocus>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"inputPassword\" class=\"form-label\">Mot de passe</label>
                            <input type=\"password\" 
                                   name=\"_password\" 
                                   id=\"inputPassword\" 
                                   class=\"form-control\" 
                                   placeholder=\"Votre mot de passe\"
                                   autocomplete=\"current-password\" 
                                   required>
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <div class=\"d-grid\">
                            <button class=\"btn btn-primary btn-lg\" type=\"submit\">
                                <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                            </button>
                        </div>
                    </form>

                    <hr class=\"my-4\">

                    <div class=\"text-center\">
                        <a href=\"{{ path('app_home') }}\" class=\"text-muted\">
                            <i class=\"bi bi-arrow-left\"></i> Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "/var/www/symfony/templates/security/login.html.twig");
    }
}

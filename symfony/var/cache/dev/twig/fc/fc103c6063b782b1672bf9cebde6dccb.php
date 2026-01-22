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

/* menu/index.html.twig */
class __TwigTemplate_4a2c5e9d0780eb2cafd4442e71f5ee73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

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

        yield "Notre Menu - Restaurant Le Dôme";
        
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
    <h1 class=\"text-center mb-5\">
        <i class=\"bi bi-book\"></i> Notre Menu
    </h1>

    <!-- Entrées -->
    ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-egg\"></i> Entrées
        </h2>
        <div class=\"row\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 19
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 22), "html", null, true);
                yield "</h5>
                        ";
                // line 23
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 24), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 26
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 27), "html", null, true);
                yield "€</span>
                            ";
                // line 28
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 28)) > 0)) {
                    // line 29
                    yield "                            <div>
                                ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 31
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 32
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 32), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    yield "                            </div>
                            ";
                }
                // line 37
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "        </div>
    </div>
    ";
        }
        // line 45
        yield "
    <!-- Section Plats Chauds -->
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-fire\"></i> Nos Plats Chauds
        </h2>

        <!-- Burgers -->
        ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["burgers"]) || array_key_exists("burgers", $context) ? $context["burgers"] : (function () { throw new RuntimeError('Variable "burgers" does not exist.', 53, $this->source); })())) > 0)) {
            // line 54
            yield "        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Burgers
        </h3>
        <div class=\"row\">
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["burgers"]) || array_key_exists("burgers", $context) ? $context["burgers"] : (function () { throw new RuntimeError('Variable "burgers" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 59
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 62), "html", null, true);
                yield "</h5>
                        ";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 64), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 66
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 67), "html", null, true);
                yield "€</span>
                            ";
                // line 68
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 68)) > 0)) {
                    // line 69
                    yield "                            <div>
                                ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 71
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 72), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    yield "                            </div>
                            ";
                }
                // line 77
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "        </div>
        ";
        }
        // line 84
        yield "
        <!-- Viandes -->
        ";
        // line 86
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["viandes"]) || array_key_exists("viandes", $context) ? $context["viandes"] : (function () { throw new RuntimeError('Variable "viandes" does not exist.', 86, $this->source); })())) > 0)) {
            // line 87
            yield "        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Viandes
        </h3>
        <div class=\"row\">
            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["viandes"]) || array_key_exists("viandes", $context) ? $context["viandes"] : (function () { throw new RuntimeError('Variable "viandes" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 92
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 95), "html", null, true);
                yield "</h5>
                        ";
                // line 96
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 97
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 97), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 99
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 100), "html", null, true);
                yield "€</span>
                            ";
                // line 101
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 101)) > 0)) {
                    // line 102
                    yield "                            <div>
                                ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 103));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 104
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 105
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 105), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    yield "                            </div>
                            ";
                }
                // line 110
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "        </div>
        ";
        }
        // line 117
        yield "
        <!-- Pâtes -->
        ";
        // line 119
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pates"]) || array_key_exists("pates", $context) ? $context["pates"] : (function () { throw new RuntimeError('Variable "pates" does not exist.', 119, $this->source); })())) > 0)) {
            // line 120
            yield "        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Pâtes
        </h3>
        <div class=\"row\">
            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pates"]) || array_key_exists("pates", $context) ? $context["pates"] : (function () { throw new RuntimeError('Variable "pates" does not exist.', 124, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 125
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 128), "html", null, true);
                yield "</h5>
                        ";
                // line 129
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 130
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 130), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 132
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 133), "html", null, true);
                yield "€</span>
                            ";
                // line 134
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 134)) > 0)) {
                    // line 135
                    yield "                            <div>
                                ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 137
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 138
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 138), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    yield "                            </div>
                            ";
                }
                // line 143
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "        </div>
        ";
        }
        // line 150
        yield "
        <!-- Tartares -->
        ";
        // line 152
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tartares"]) || array_key_exists("tartares", $context) ? $context["tartares"] : (function () { throw new RuntimeError('Variable "tartares" does not exist.', 152, $this->source); })())) > 0)) {
            // line 153
            yield "        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Tartares
        </h3>
        <div class=\"row\">
            ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tartares"]) || array_key_exists("tartares", $context) ? $context["tartares"] : (function () { throw new RuntimeError('Variable "tartares" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 158
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 161), "html", null, true);
                yield "</h5>
                        ";
                // line 162
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 163
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 163), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 165
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 166), "html", null, true);
                yield "€</span>
                            ";
                // line 167
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 167)) > 0)) {
                    // line 168
                    yield "                            <div>
                                ";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 169));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 170
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 171), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    yield "                            </div>
                            ";
                }
                // line 176
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "        </div>
        ";
        }
        // line 183
        yield "
        <!-- Poissons -->
        ";
        // line 185
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["poissons"]) || array_key_exists("poissons", $context) ? $context["poissons"] : (function () { throw new RuntimeError('Variable "poissons" does not exist.', 185, $this->source); })())) > 0)) {
            // line 186
            yield "        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Poissons
        </h3>
        <div class=\"row\">
            ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["poissons"]) || array_key_exists("poissons", $context) ? $context["poissons"] : (function () { throw new RuntimeError('Variable "poissons" does not exist.', 190, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 191
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 194), "html", null, true);
                yield "</h5>
                        ";
                // line 195
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 196
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 196), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 198
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 199), "html", null, true);
                yield "€</span>
                            ";
                // line 200
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 200)) > 0)) {
                    // line 201
                    yield "                            <div>
                                ";
                    // line 202
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 202));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 203
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 204
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 204), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    yield "                            </div>
                            ";
                }
                // line 209
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            yield "        </div>
        ";
        }
        // line 216
        yield "    </div>

    <!-- Fromages -->
    ";
        // line 219
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fromages"]) || array_key_exists("fromages", $context) ? $context["fromages"] : (function () { throw new RuntimeError('Variable "fromages" does not exist.', 219, $this->source); })())) > 0)) {
            // line 220
            yield "    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-square\"></i> Fromages
        </h2>
        <div class=\"row\">
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fromages"]) || array_key_exists("fromages", $context) ? $context["fromages"] : (function () { throw new RuntimeError('Variable "fromages" does not exist.', 225, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 226
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 229), "html", null, true);
                yield "</h5>
                        ";
                // line 230
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 231
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 231), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 233
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 234), "html", null, true);
                yield "€</span>
                            ";
                // line 235
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 235)) > 0)) {
                    // line 236
                    yield "                            <div>
                                ";
                    // line 237
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 237));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 238
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 239
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 239), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 242
                    yield "                            </div>
                            ";
                }
                // line 244
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            yield "        </div>
    </div>
    ";
        }
        // line 252
        yield "
    <!-- Desserts -->
    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["desserts"]) || array_key_exists("desserts", $context) ? $context["desserts"] : (function () { throw new RuntimeError('Variable "desserts" does not exist.', 254, $this->source); })())) > 0)) {
            // line 255
            yield "    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-cup-straw\"></i> Desserts
        </h2>
        <div class=\"row\">
            ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["desserts"]) || array_key_exists("desserts", $context) ? $context["desserts"] : (function () { throw new RuntimeError('Variable "desserts" does not exist.', 260, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 261
                yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 264), "html", null, true);
                yield "</h5>
                        ";
                // line 265
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 266
                    yield "                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 266), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 268
                yield "                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 269), "html", null, true);
                yield "€</span>
                            ";
                // line 270
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 270)) > 0)) {
                    // line 271
                    yield "                            <div>
                                ";
                    // line 272
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "allergens", [], "any", false, false, false, 272));
                    foreach ($context['_seq'] as $context["_key"] => $context["allergen"]) {
                        // line 273
                        yield "                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> ";
                        // line 274
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["allergen"], "name", [], "any", false, false, false, 274), "html", null, true);
                        yield "
                                </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['allergen'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 277
                    yield "                            </div>
                            ";
                }
                // line 279
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "        </div>
    </div>
    ";
        }
        // line 287
        yield "
    <!-- Boissons Soft -->
    ";
        // line 289
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["boissonsSoft"]) || array_key_exists("boissonsSoft", $context) ? $context["boissonsSoft"] : (function () { throw new RuntimeError('Variable "boissonsSoft" does not exist.', 289, $this->source); })())) > 0)) {
            // line 290
            yield "    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-cup\"></i> Boissons Sans Alcool
        </h2>
        <div class=\"row\">
            ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["boissonsSoft"]) || array_key_exists("boissonsSoft", $context) ? $context["boissonsSoft"] : (function () { throw new RuntimeError('Variable "boissonsSoft" does not exist.', 295, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 296
                yield "            <div class=\"col-md-6 col-lg-3 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 299), "html", null, true);
                yield "</h5>
                        ";
                // line 300
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 301
                    yield "                        <p class=\"card-text text-muted small\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 301), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 303
                yield "                        <span class=\"price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 303), "html", null, true);
                yield "€</span>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            yield "        </div>
    </div>
    ";
        }
        // line 311
        yield "
    <!-- Boissons Alcoolisées -->
    ";
        // line 313
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["boissonsAlcool"]) || array_key_exists("boissonsAlcool", $context) ? $context["boissonsAlcool"] : (function () { throw new RuntimeError('Variable "boissonsAlcool" does not exist.', 313, $this->source); })())) > 0)) {
            // line 314
            yield "    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-wine\"></i> Boissons Alcoolisées
        </h2>
        <div class=\"row\">
            ";
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["boissonsAlcool"]) || array_key_exists("boissonsAlcool", $context) ? $context["boissonsAlcool"] : (function () { throw new RuntimeError('Variable "boissonsAlcool" does not exist.', 319, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 320
                yield "            <div class=\"col-md-6 col-lg-3 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 323), "html", null, true);
                yield "</h5>
                        ";
                // line 324
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 325
                    yield "                        <p class=\"card-text text-muted small\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 325), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 327
                yield "                        <span class=\"price\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 327), "html", null, true);
                yield "€</span>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dish'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            yield "        </div>
    </div>
    ";
        }
        // line 335
        yield "
    <!-- Informations allergènes -->
    <div class=\"alert alert-info\">
        <h5><i class=\"bi bi-info-circle\"></i> Information Allergènes</h5>
        <p class=\"mb-0\">
            Si vous souffrez d'allergies alimentaires, n'hésitez pas à consulter notre personnel. 
            Nous faisons de notre mieux pour vous informer des allergènes présents dans nos plats.
        </p>
    </div>

    <!-- Call to action -->
    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"btn btn-primary btn-lg\">
            <i class=\"bi bi-calendar-check\"></i> Réserver une table
        </a>
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
        return "menu/index.html.twig";
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
        return array (  865 => 347,  851 => 335,  846 => 332,  834 => 327,  828 => 325,  826 => 324,  822 => 323,  817 => 320,  813 => 319,  806 => 314,  804 => 313,  800 => 311,  795 => 308,  783 => 303,  777 => 301,  775 => 300,  771 => 299,  766 => 296,  762 => 295,  755 => 290,  753 => 289,  749 => 287,  744 => 284,  734 => 279,  730 => 277,  721 => 274,  718 => 273,  714 => 272,  711 => 271,  709 => 270,  705 => 269,  702 => 268,  696 => 266,  694 => 265,  690 => 264,  685 => 261,  681 => 260,  674 => 255,  672 => 254,  668 => 252,  663 => 249,  653 => 244,  649 => 242,  640 => 239,  637 => 238,  633 => 237,  630 => 236,  628 => 235,  624 => 234,  621 => 233,  615 => 231,  613 => 230,  609 => 229,  604 => 226,  600 => 225,  593 => 220,  591 => 219,  586 => 216,  582 => 214,  572 => 209,  568 => 207,  559 => 204,  556 => 203,  552 => 202,  549 => 201,  547 => 200,  543 => 199,  540 => 198,  534 => 196,  532 => 195,  528 => 194,  523 => 191,  519 => 190,  513 => 186,  511 => 185,  507 => 183,  503 => 181,  493 => 176,  489 => 174,  480 => 171,  477 => 170,  473 => 169,  470 => 168,  468 => 167,  464 => 166,  461 => 165,  455 => 163,  453 => 162,  449 => 161,  444 => 158,  440 => 157,  434 => 153,  432 => 152,  428 => 150,  424 => 148,  414 => 143,  410 => 141,  401 => 138,  398 => 137,  394 => 136,  391 => 135,  389 => 134,  385 => 133,  382 => 132,  376 => 130,  374 => 129,  370 => 128,  365 => 125,  361 => 124,  355 => 120,  353 => 119,  349 => 117,  345 => 115,  335 => 110,  331 => 108,  322 => 105,  319 => 104,  315 => 103,  312 => 102,  310 => 101,  306 => 100,  303 => 99,  297 => 97,  295 => 96,  291 => 95,  286 => 92,  282 => 91,  276 => 87,  274 => 86,  270 => 84,  266 => 82,  256 => 77,  252 => 75,  243 => 72,  240 => 71,  236 => 70,  233 => 69,  231 => 68,  227 => 67,  224 => 66,  218 => 64,  216 => 63,  212 => 62,  207 => 59,  203 => 58,  197 => 54,  195 => 53,  185 => 45,  180 => 42,  170 => 37,  166 => 35,  157 => 32,  154 => 31,  150 => 30,  147 => 29,  145 => 28,  141 => 27,  138 => 26,  132 => 24,  130 => 23,  126 => 22,  121 => 19,  117 => 18,  110 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notre Menu - Restaurant Le Dôme{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"text-center mb-5\">
        <i class=\"bi bi-book\"></i> Notre Menu
    </h1>

    <!-- Entrées -->
    {% if entrees|length > 0 %}
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-egg\"></i> Entrées
        </h2>
        <div class=\"row\">
            {% for dish in entrees %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    <!-- Section Plats Chauds -->
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-fire\"></i> Nos Plats Chauds
        </h2>

        <!-- Burgers -->
        {% if burgers|length > 0 %}
        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Burgers
        </h3>
        <div class=\"row\">
            {% for dish in burgers %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endif %}

        <!-- Viandes -->
        {% if viandes|length > 0 %}
        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Viandes
        </h3>
        <div class=\"row\">
            {% for dish in viandes %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endif %}

        <!-- Pâtes -->
        {% if pates|length > 0 %}
        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Pâtes
        </h3>
        <div class=\"row\">
            {% for dish in pates %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endif %}

        <!-- Tartares -->
        {% if tartares|length > 0 %}
        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Tartares
        </h3>
        <div class=\"row\">
            {% for dish in tartares %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endif %}

        <!-- Poissons -->
        {% if poissons|length > 0 %}
        <h3 class=\"mt-4 mb-3 text-primary\">
            <i class=\"bi bi-list\"></i> Poissons
        </h3>
        <div class=\"row\">
            {% for dish in poissons %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endif %}
    </div>

    <!-- Fromages -->
    {% if fromages|length > 0 %}
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-square\"></i> Fromages
        </h2>
        <div class=\"row\">
            {% for dish in fromages %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    <!-- Desserts -->
    {% if desserts|length > 0 %}
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-cup-straw\"></i> Desserts
        </h2>
        <div class=\"row\">
            {% for dish in desserts %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted\">{{ dish.description }}</p>
                        {% endif %}
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"price\">{{ dish.price }}€</span>
                            {% if dish.allergens|length > 0 %}
                            <div>
                                {% for allergen in dish.allergens %}
                                <span class=\"badge bg-warning text-dark allergen-badge\">
                                    <i class=\"bi bi-exclamation-triangle\"></i> {{ allergen.name }}
                                </span>
                                {% endfor %}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    <!-- Boissons Soft -->
    {% if boissonsSoft|length > 0 %}
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-cup\"></i> Boissons Sans Alcool
        </h2>
        <div class=\"row\">
            {% for dish in boissonsSoft %}
            <div class=\"col-md-6 col-lg-3 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted small\">{{ dish.description }}</p>
                        {% endif %}
                        <span class=\"price\">{{ dish.price }}€</span>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    <!-- Boissons Alcoolisées -->
    {% if boissonsAlcool|length > 0 %}
    <div class=\"mb-5\">
        <h2 class=\"border-bottom pb-2 mb-4\">
            <i class=\"bi bi-wine\"></i> Boissons Alcoolisées
        </h2>
        <div class=\"row\">
            {% for dish in boissonsAlcool %}
            <div class=\"col-md-6 col-lg-3 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ dish.name }}</h5>
                        {% if dish.description %}
                        <p class=\"card-text text-muted small\">{{ dish.description }}</p>
                        {% endif %}
                        <span class=\"price\">{{ dish.price }}€</span>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endif %}

    <!-- Informations allergènes -->
    <div class=\"alert alert-info\">
        <h5><i class=\"bi bi-info-circle\"></i> Information Allergènes</h5>
        <p class=\"mb-0\">
            Si vous souffrez d'allergies alimentaires, n'hésitez pas à consulter notre personnel. 
            Nous faisons de notre mieux pour vous informer des allergènes présents dans nos plats.
        </p>
    </div>

    <!-- Call to action -->
    <div class=\"text-center mt-5\">
        <a href=\"{{ path('app_reservation') }}\" class=\"btn btn-primary btn-lg\">
            <i class=\"bi bi-calendar-check\"></i> Réserver une table
        </a>
    </div>
</div>
{% endblock %}", "menu/index.html.twig", "/var/www/symfony/templates/menu/index.html.twig");
    }
}

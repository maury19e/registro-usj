<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nova Studio | Home Demo</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-950 text-white antialiased selection:bg-cyan-400 selection:text-slate-950">
        <div class="relative min-h-screen overflow-hidden bg-slate-950">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(34,211,238,0.18),_transparent_30%),radial-gradient(circle_at_bottom_right,_rgba(168,85,247,0.22),_transparent_25%)]"></div>
            <div class="absolute inset-0 opacity-30" style="background-image: linear-gradient(rgba(148,163,184,0.08) 1px, transparent 1px), linear-gradient(90deg, rgba(148,163,184,0.08) 1px, transparent 1px); background-size: 48px 48px;"></div>

            <header class="relative z-20 mx-auto max-w-7xl px-6 pt-6 lg:px-8">
                <nav class="flex items-center justify-between rounded-full border border-white/10 bg-white/5 px-4 py-3 shadow-2xl shadow-cyan-500/10 backdrop-blur-xl">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-cyan-400 via-blue-500 to-violet-500 shadow-lg shadow-cyan-500/30">
                            <span class="text-lg font-black text-slate-950">N</span>
                        </div>
                        <div>
                            <p class="text-lg font-bold tracking-tight">Nova Studio</p>
                        </div>
                    </div>

                    <div class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
                        <a href="#features" class="transition hover:text-white">Características</a>
                        <a href="#showcase" class="transition hover:text-white">Casos</a>
                        <a href="#pricing" class="transition hover:text-white">Precios</a>
                        <a href="#reviews" class="transition hover:text-white">Opiniones</a>
                    </div>

                    <div class="flex items-center gap-3">
                        <button class="hidden rounded-full border border-white/10 px-4 py-2 text-sm font-medium text-slate-200 transition hover:border-cyan-400/50 hover:text-white sm:inline-flex">
                            Iniciar sesión
                        </button>
                        <button class="inline-flex items-center rounded-full bg-gradient-to-r from-cyan-400 via-blue-500 to-violet-500 px-5 py-2.5 text-sm font-semibold text-slate-950 shadow-lg shadow-cyan-500/30 transition hover:scale-[1.02]">
                            Probar gratis
                        </button>
                    </div>
                </nav>
            </header>

            <main class="relative z-10">
                <section class="mx-auto max-w-7xl px-6 pb-24 pt-16 lg:px-8 lg:pt-24">
                    <div class="grid items-center gap-14 lg:grid-cols-[1.1fr_0.9fr]">
                        <div>
                            <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-cyan-400/30 bg-cyan-400/10 px-3 py-1.5 text-xs font-medium text-cyan-200 backdrop-blur-sm">
                                <span class="h-2 w-2 rounded-full bg-cyan-400"></span>
                                NUEVO • Impulsa tus ideas con IA
                            </div>

                            <h1 class="max-w-xl text-5xl font-black tracking-tight text-white sm:text-6xl lg:text-7xl">
                                Construye experiencias digitales que <span class="bg-gradient-to-r from-cyan-300 via-blue-400 to-violet-400 bg-clip-text text-transparent">impacten.</span>
                            </h1>

                            <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">
                                Diseñamos productos, sitios y flujos de conversión que convierten atención en acción, con velocidad, claridad y una marca memorable.
                            </p>

                            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                                <button class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-cyan-400 via-blue-500 to-violet-500 px-6 py-3.5 text-base font-semibold text-slate-950 shadow-xl shadow-cyan-500/30 transition hover:scale-[1.02]">
                                    Empezar ahora
                                </button>
                                <button class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3.5 text-base font-semibold text-white backdrop-blur-sm transition hover:border-cyan-400/40 hover:bg-white/10">
                                    Ver demo
                                </button>
                            </div>

                            <div class="mt-10 flex flex-wrap items-center gap-8 text-sm text-slate-400">
                                <div class="flex items-center gap-3">
                                    <div class="flex -space-x-2">
                                        <span class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-950 bg-cyan-400 text-xs font-bold text-slate-950">A</span>
                                        <span class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-950 bg-violet-400 text-xs font-bold text-slate-950">L</span>
                                        <span class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-slate-950 bg-emerald-400 text-xs font-bold text-slate-950">M</span>
                                    </div>
                                    <span>+12k equipos creciendo</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xl text-yellow-400">★★★★★</span>
                                    <span>4.9/5 rating</span>
                                </div>
                            </div>
                        </div>

                        <div class="relative flex justify-center lg:justify-end">
                            <div class="relative w-full max-w-xl">
                                <div class="absolute -left-8 top-12 h-56 w-56 rounded-full bg-cyan-500/20 blur-3xl"></div>
                                <div class="absolute -right-6 bottom-8 h-64 w-64 rounded-full bg-violet-500/20 blur-3xl"></div>

                                <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-slate-900/80 p-4 shadow-2xl shadow-cyan-950/40 backdrop-blur-xl">
                                    <div class="rounded-[1.5rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 p-5">
                                        <div class="mb-4 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <span class="h-3 w-3 rounded-full bg-rose-400"></span>
                                                <span class="h-3 w-3 rounded-full bg-amber-400"></span>
                                                <span class="h-3 w-3 rounded-full bg-emerald-400"></span>
                                            </div>
                                            <span class="rounded-full border border-cyan-400/30 bg-cyan-400/10 px-2.5 py-1 text-[10px] font-medium uppercase tracking-[0.2em] text-cyan-300">
                                                Live
                                            </span>
                                        </div>

                                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                            <div class="mb-4 flex items-end justify-between">
                                                <div>
                                                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Ingresos</p>
                                                    <p class="mt-2 text-3xl font-black text-white">$84.2K</p>
                                                </div>
                                                <span class="rounded-full bg-emerald-400/15 px-2.5 py-1 text-xs font-semibold text-emerald-300">+28.4%</span>
                                            </div>

                                            <div class="mb-5 h-36 rounded-2xl bg-gradient-to-br from-cyan-500/15 via-slate-900 to-violet-500/15 p-3">
                                                <div class="flex h-full items-end gap-2">
                                                    <span class="w-full rounded-t-xl bg-gradient-to-t from-cyan-400 to-blue-500" style="height: 35%"></span>
                                                    <span class="w-full rounded-t-xl bg-gradient-to-t from-blue-400 to-violet-500" style="height: 55%"></span>
                                                    <span class="w-full rounded-t-xl bg-gradient-to-t from-violet-400 to-fuchsia-500" style="height: 72%"></span>
                                                    <span class="w-full rounded-t-xl bg-gradient-to-t from-cyan-300 to-violet-400" style="height: 88%"></span>
                                                    <span class="w-full rounded-t-xl bg-gradient-to-t from-emerald-400 to-cyan-500" style="height: 100%"></span>
                                                </div>
                                            </div>

                                            <div class="grid gap-3 sm:grid-cols-2">
                                                <div class="rounded-2xl border border-white/10 bg-slate-800/80 p-3">
                                                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Leads</p>
                                                    <p class="mt-2 text-2xl font-bold text-white">1,248</p>
                                                </div>
                                                <div class="rounded-2xl border border-white/10 bg-slate-800/80 p-3">
                                                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">CTR</p>
                                                    <p class="mt-2 text-2xl font-bold text-white">8.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="features" class="mx-auto max-w-7xl px-6 pb-24 lg:px-8">
                    <div class="mb-12 text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-300">Características</p>
                        <h2 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-4xl">Todo lo que necesitas para escalar.</h2>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                        <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition hover:-translate-y-1 hover:border-cyan-400/40 hover:bg-white/10">
                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-400/25 to-blue-500/25">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 text-cyan-300" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M4 18l7-7 4 4 7-9" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19 6h2v2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Analítica inteligente</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-300">Monitorea métricas clave, comportamientos y oportunidades de conversión en tiempo real.</p>
                        </article>

                        <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition hover:-translate-y-1 hover:border-cyan-400/40 hover:bg-white/10">
                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-400/25 to-fuchsia-500/25">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 text-violet-300" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="5" width="18" height="14" rx="3"></rect>
                                    <path d="M7 9h10M7 13h6" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Automatización</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-300">Diseña flujos, automatiza tareas repetitivas y mejora la experiencia de tus clientes.</p>
                        </article>

                        <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition hover:-translate-y-1 hover:border-cyan-400/40 hover:bg-white/10">
                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-400/25 to-teal-500/25">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 text-emerald-300" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M12 3v18M3 12h18" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Diseño premium</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-300">Interfaz elegante, clara y productiva que refleja la calidad de tu marca.</p>
                        </article>

                        <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition hover:-translate-y-1 hover:border-cyan-400/40 hover:bg-white/10">
                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-amber-400/25 to-orange-500/25">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 text-amber-300" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M12 2l2.7 5.7L20 8.5l-4.5 4.1L16.6 20 12 17.2 7.4 20l1.1-7.4L4 8.5l5.3-.8L12 2z" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Experiencia sólida</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-300">Alinea producto, marketing y atención para crear momentos que la gente recuerde.</p>
                        </article>
                    </div>
                </section>

                <section id="showcase" class="mx-auto max-w-7xl px-6 pb-24 lg:px-8">
                    <div class="rounded-[2rem] border border-white/10 bg-gradient-to-br from-slate-900 via-slate-900 to-slate-800 p-6 shadow-2xl shadow-violet-900/20 lg:p-8">
                        <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-violet-300">Resultados</p>
                                <h2 class="mt-3 text-3xl font-black tracking-tight text-white">El crecimiento real de marcas modernas.</h2>
                            </div>
                            <button class="inline-flex items-center rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm font-medium text-slate-200 transition hover:border-violet-400/50 hover:text-white">
                                Ver estudio de caso
                            </button>
                        </div>

                        <div class="grid gap-6 lg:grid-cols-3">
                            <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                <div class="mb-4 flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-slate-400">BrandFlow</p>
                                        <p class="text-2xl font-bold text-white">+236%</p>
                                    </div>
                                    <span class="rounded-full bg-emerald-400/15 px-2.5 py-1 text-xs font-semibold text-emerald-300">ROI</span>
                                </div>
                                <div class="mb-4 h-28 rounded-2xl bg-gradient-to-br from-cyan-500/10 via-slate-900 to-violet-500/10 p-3">
                                    <div class="flex h-full items-end gap-2">
                                        <span class="w-full rounded-t-xl bg-cyan-400/80" style="height: 40%"></span>
                                        <span class="w-full rounded-t-xl bg-blue-400/80" style="height: 55%"></span>
                                        <span class="w-full rounded-t-xl bg-violet-400/80" style="height: 72%"></span>
                                        <span class="w-full rounded-t-xl bg-fuchsia-400/80" style="height: 88%"></span>
                                        <span class="w-full rounded-t-xl bg-emerald-400/80" style="height: 100%"></span>
                                    </div>
                                </div>
                                <p class="text-sm leading-6 text-slate-300">Rediseñamos la experiencia digital y optimizamos la conversión en tres campañas clave.</p>
                            </div>

                            <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                <div class="mb-4 flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-slate-400">NorthPeak</p>
                                        <p class="text-2xl font-bold text-white">3.1x</p>
                                    </div>
                                    <span class="rounded-full bg-cyan-400/15 px-2.5 py-1 text-xs font-semibold text-cyan-300">Ventas</span>
                                </div>
                                <div class="mb-4 h-28 rounded-2xl bg-gradient-to-br from-blue-500/10 via-slate-900 to-cyan-500/10 p-3">
                                    <div class="flex h-full items-end gap-2">
                                        <span class="w-full rounded-t-xl bg-blue-400/80" style="height: 30%"></span>
                                        <span class="w-full rounded-t-xl bg-cyan-400/80" style="height: 48%"></span>
                                        <span class="w-full rounded-t-xl bg-sky-400/80" style="height: 62%"></span>
                                        <span class="w-full rounded-t-xl bg-emerald-400/80" style="height: 82%"></span>
                                        <span class="w-full rounded-t-xl bg-teal-400/80" style="height: 100%"></span>
                                    </div>
                                </div>
                                <p class="text-sm leading-6 text-slate-300">Implementamos un funnel más claro y un sistema de leads automatizado para cada etapa.</p>
                            </div>

                            <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                <div class="mb-4 flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-slate-400">PixelForge</p>
                                        <p class="text-2xl font-bold text-white">67%</p>
                                    </div>
                                    <span class="rounded-full bg-violet-400/15 px-2.5 py-1 text-xs font-semibold text-violet-300">Engagement</span>
                                </div>
                                <div class="mb-4 h-28 rounded-2xl bg-gradient-to-br from-violet-500/10 via-slate-900 to-fuchsia-500/10 p-3">
                                    <div class="flex h-full items-end gap-2">
                                        <span class="w-full rounded-t-xl bg-violet-400/80" style="height: 25%"></span>
                                        <span class="w-full rounded-t-xl bg-fuchsia-400/80" style="height: 42%"></span>
                                        <span class="w-full rounded-t-xl bg-purple-400/80" style="height: 59%"></span>
                                        <span class="w-full rounded-t-xl bg-pink-400/80" style="height: 90%"></span>
                                        <span class="w-full rounded-t-xl bg-cyan-400/80" style="height: 100%"></span>
                                    </div>
                                </div>
                                <p class="text-sm leading-6 text-slate-300">Creación de contenido y UX enfocada en retención, velocidad y experiencias memorables.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="pricing" class="mx-auto max-w-7xl px-6 pb-24 lg:px-8">
                    <div class="mb-12 text-center">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-300">Planes</p>
                        <h2 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-4xl">Escoge el plan que impulsa tu siguiente paso.</h2>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-3">
                        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
                            <p class="text-sm uppercase tracking-[0.2em] text-slate-400">Starter</p>
                            <div class="mt-5 flex items-end gap-2">
                                <span class="text-4xl font-black text-white">$29</span>
                                <span class="pb-1 text-slate-400">/mes</span>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-slate-300">Perfecto para empezar y validar una idea con velocidad.</p>
                            <ul class="mt-6 space-y-3 text-sm text-slate-200">
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> 1 proyecto activo</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Dashboard analytics</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Soporte por email</li>
                            </ul>
                            <button class="mt-8 w-full rounded-full border border-white/15 bg-white/5 px-4 py-3 text-sm font-semibold text-white transition hover:border-cyan-400/40 hover:bg-white/10">Elegir Starter</button>
                        </div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-cyan-400/40 bg-gradient-to-b from-cyan-500/10 via-slate-900 to-slate-900 p-7 shadow-2xl shadow-cyan-500/10">
                            <div class="absolute right-5 top-5 rounded-full bg-cyan-400 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-950">Popular</div>
                            <p class="text-sm uppercase tracking-[0.2em] text-cyan-300">Growth</p>
                            <div class="mt-5 flex items-end gap-2">
                                <span class="text-4xl font-black text-white">$79</span>
                                <span class="pb-1 text-slate-400">/mes</span>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-slate-300">Ideal para equipos que quieren crecer con más automatización y claridad.</p>
                            <ul class="mt-6 space-y-3 text-sm text-slate-200">
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Proyectos ilimitados</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Automatizaciones</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Integraciones avanzadas</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Soporte prioritario</li>
                            </ul>
                            <button class="mt-8 w-full rounded-full bg-gradient-to-r from-cyan-400 via-blue-500 to-violet-500 px-4 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-cyan-500/20 transition hover:scale-[1.01]">Elegir Growth</button>
                        </div>

                        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
                            <p class="text-sm uppercase tracking-[0.2em] text-slate-400">Scale</p>
                            <div class="mt-5 flex items-end gap-2">
                                <span class="text-4xl font-black text-white">$149</span>
                                <span class="pb-1 text-slate-400">/mes</span>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-slate-300">Para marcas que necesitan estrategia, velocidad y sostenibilidad a gran escala.</p>
                            <ul class="mt-6 space-y-3 text-sm text-slate-200">
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Equipo multiusuario</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Consultoría estratégica</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> SLA premium</li>
                                <li class="flex items-center gap-3"><span class="text-cyan-300">✓</span> Acompañamiento dedicado</li>
                            </ul>
                            <button class="mt-8 w-full rounded-full border border-white/15 bg-white/5 px-4 py-3 text-sm font-semibold text-white transition hover:border-violet-400/40 hover:bg-white/10">Elegir Scale</button>
                        </div>
                    </div>
                </section>

                <section id="reviews" class="mx-auto max-w-7xl px-6 pb-24 lg:px-8">
                    <div class="rounded-[2rem] border border-white/10 bg-slate-900/70 p-6 shadow-2xl shadow-fuchsia-900/10 lg:p-8">
                        <div class="mb-8 text-center">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-fuchsia-300">Testimonios</p>
                            <h2 class="mt-4 text-3xl font-black tracking-tight text-white">Lo que dicen nuestros clientes.</h2>
                        </div>

                        <div class="grid gap-6 lg:grid-cols-3">
                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                                <div class="mb-4 text-lg text-yellow-400">★★★★★</div>
                                <p class="text-base leading-7 text-slate-200">“Nos dio claridad, velocidad y una presencia online con muchísimo más impacto. Cambió completamente la percepción de nuestra marca.”</p>
                                <div class="mt-6 flex items-center gap-4">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-cyan-400 to-violet-500 font-bold text-slate-950">MA</div>
                                    <div>
                                        <p class="font-semibold text-white">María Alvarado</p>
                                        <p class="text-sm text-slate-400">Marketing lead</p>
                                    </div>
                                </div>
                            </article>

                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                                <div class="mb-4 text-lg text-yellow-400">★★★★★</div>
                                <p class="text-base leading-7 text-slate-200">“La combinación entre estrategia, diseño y automatización fue clave. Hoy tenemos más ventas y menos fricción en cada etapa.”</p>
                                <div class="mt-6 flex items-center gap-4">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-emerald-400 to-cyan-500 font-bold text-slate-950">JC</div>
                                    <div>
                                        <p class="font-semibold text-white">Javier Costa</p>
                                        <p class="text-sm text-slate-400">Founder</p>
                                    </div>
                                </div>
                            </article>

                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                                <div class="mb-4 text-lg text-yellow-400">★★★★★</div>
                                <p class="text-base leading-7 text-slate-200">“Más que un sitio web, creamos una experiencia premium para clientes. Lo más valioso fue la claridad de cada decisión.”</p>
                                <div class="mt-6 flex items-center gap-4">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-violet-400 to-fuchsia-500 font-bold text-slate-950">SL</div>
                                    <div>
                                        <p class="font-semibold text-white">Sofía León</p>
                                        <p class="text-sm text-slate-400">Brand strategist</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-6 pb-32 lg:px-8">
                    <div class="rounded-[2rem] border border-cyan-400/25 bg-gradient-to-r from-cyan-500/10 via-slate-900 to-violet-500/10 p-8 text-center shadow-2xl shadow-cyan-900/20 lg:p-12">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-300">Listo para avanzar</p>
                        <h2 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-5xl">Haz que tu próxima idea se vuelva un caso de éxito.</h2>
                        <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-slate-300">Diseñamos experiencias que conectan con tu audiencia, impulsan resultados y te permiten crecer con confianza.</p>
                        <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">
                            <button class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-cyan-400 via-blue-500 to-violet-500 px-6 py-3.5 text-base font-semibold text-slate-950 shadow-xl shadow-cyan-500/30 transition hover:scale-[1.02]">
                                Solicitar demo
                            </button>
                            <button class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3.5 text-base font-semibold text-white transition hover:border-cyan-400/40 hover:bg-white/10">
                                Hablar con ventas
                            </button>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="relative z-10 border-t border-white/10 bg-slate-950/80">
                <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm text-slate-400 md:flex-row lg:px-8">
                    <p>© 2026 Nova Studio. Todos los derechos reservados.</p>
                    <div class="flex items-center gap-6">
                        <a href="#" class="transition hover:text-white">Privacidad</a>
                        <a href="#" class="transition hover:text-white">Términos</a>
                        <a href="#" class="transition hover:text-white">Contacto</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

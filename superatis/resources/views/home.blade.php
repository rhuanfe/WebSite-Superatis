<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERATIS | Assessoria de Corrida</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0B0616] text-white overflow-x-hidden">

    <!-- BACKGROUND EFFECT -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">

        <div class="absolute w-[500px] h-[500px] bg-purple-700/30 blur-[180px] rounded-full top-[-100px] left-[-100px]"></div>

        <div class="absolute w-[400px] h-[400px] bg-orange-500/20 blur-[160px] rounded-full top-[200px] right-[-100px]"></div>

    </div>

    <!-- NAVBAR -->
    <nav class="flex items-center justify-between px-8 lg:px-16 py-6">

        <div class="flex items-center gap-3">

            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-orange-500 to-purple-700 flex items-center justify-center font-black text-xl shadow-2xl shadow-orange-500/30">
                S
            </div>

            <h1 class="text-2xl font-black tracking-wide">
                SUPERATIS
            </h1>

        </div>

        <div class="hidden md:flex items-center gap-10 text-sm font-medium text-zinc-300">

            <a href="#" class="hover:text-orange-400 transition">
                Início
            </a>

            <a href="#" class="hover:text-orange-400 transition">
                Planos
            </a>

            <a href="#" class="hover:text-orange-400 transition">
                Assessoria
            </a>

            <a href="#" class="hover:text-orange-400 transition">
                Resultados
            </a>

        </div>

        <a href="/login"
           class="bg-gradient-to-r from-orange-500 to-purple-700 px-6 py-3 rounded-2xl font-bold hover:scale-105 transition-all duration-300 shadow-2xl shadow-purple-700/30">
            Área do Aluno
        </a>

    </nav>

    <!-- HERO -->
    <section class="min-h-screen flex items-center px-8 lg:px-16 py-20">

        <div class="grid lg:grid-cols-2 gap-16 items-center w-full">

            <!-- LEFT -->
            <div>

                <div class="inline-flex items-center gap-3 bg-white/5 border border-white/10 px-5 py-2 rounded-full text-sm text-zinc-300 mb-8 backdrop-blur-xl">

                    <div class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></div>

                    Assessoria Premium de Corrida

                </div>

                <h1 class="text-5xl md:text-7xl font-black leading-[1.05]">

                    SUPERE
                    <span class="bg-gradient-to-r from-orange-400 to-purple-500 bg-clip-text text-transparent">
                        SEUS LIMITES
                    </span>

                    A CADA PASSO.

                </h1>

                <p class="text-zinc-400 text-lg mt-8 leading-relaxed max-w-2xl">

                    A SUPERATIS nasceu para transformar atletas comuns
                    em corredores extraordinários. Treinos personalizados,
                    acompanhamento profissional e uma comunidade criada
                    para evolução constante.

                </p>

                <div class="flex flex-wrap gap-5 mt-10">

                    <a href="#"
                       class="bg-gradient-to-r from-orange-500 to-purple-700 px-8 py-4 rounded-2xl font-bold text-lg hover:scale-105 transition-all duration-300 shadow-2xl shadow-orange-500/20">

                        Começar Agora

                    </a>

                    <a href="#"
                       class="border border-white/10 bg-white/5 backdrop-blur-xl px-8 py-4 rounded-2xl font-semibold hover:bg-white/10 transition">

                        Conhecer Planos

                    </a>

                </div>

                <!-- STATS -->
                <div class="flex flex-wrap gap-10 mt-16">

                    <div>
                        <h2 class="text-4xl font-black text-orange-400">
                            +500
                        </h2>

                        <p class="text-zinc-400 mt-1">
                            Alunos ativos
                        </p>
                    </div>

                    <div>
                        <h2 class="text-4xl font-black text-purple-400">
                            +12k
                        </h2>

                        <p class="text-zinc-400 mt-1">
                            Quilômetros percorridos
                        </p>
                    </div>

                    <div>
                        <h2 class="text-4xl font-black text-white">
                            100%
                        </h2>

                        <p class="text-zinc-400 mt-1">
                            Foco em performance
                        </p>
                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="relative flex justify-center">

                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-purple-700/20 blur-[120px] rounded-full"></div>

                <div class="relative bg-white/5 border border-white/10 backdrop-blur-2xl rounded-[40px] p-6 shadow-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?q=80&w=1400&auto=format&fit=crop"
                        class="w-full max-w-[550px] h-[700px] object-cover rounded-[30px]"
                        alt="Runner"
                    >

                    <!-- FLOAT CARD -->
                    <div class="absolute -bottom-8 -left-8 bg-[#140B27] border border-white/10 rounded-3xl p-6 shadow-2xl backdrop-blur-xl">

                        <p class="text-zinc-400 text-sm">
                            Performance semanal
                        </p>

                        <h2 class="text-4xl font-black mt-2">
                            +28%
                        </h2>

                        <div class="mt-4 flex gap-2">

                            <div class="w-14 h-2 rounded-full bg-orange-400"></div>
                            <div class="w-20 h-2 rounded-full bg-purple-500"></div>
                            <div class="w-10 h-2 rounded-full bg-white"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</body>
</html>
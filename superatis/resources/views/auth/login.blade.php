<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERATIS | Login</title>

    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen bg-[#0A0614] text-white flex overflow-hidden">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 overflow-hidden">

        <div class="absolute top-[-100px] left-[-100px] w-[400px] h-[400px] bg-purple-700/30 rounded-full blur-[120px]"></div>

        <div class="absolute bottom-[-100px] right-[-100px] w-[400px] h-[400px] bg-orange-500/20 rounded-full blur-[120px]"></div>

    </div>

    <!-- LEFT -->
    <div class="hidden lg:flex w-1/2 relative items-center justify-center p-16">

        <div class="max-w-xl relative z-10">

            <p class="uppercase tracking-[5px] text-orange-400 text-sm mb-6">
                Assessoria Premium
            </p>

            <h1 class="text-7xl font-black leading-[1]">
                CORRA
                <span class="text-orange-400">
                    ALÉM
                </span>
                DOS
                LIMITES.
            </h1>

            <p class="text-zinc-400 text-lg mt-8 leading-relaxed">
                A SUPERATIS transforma corredores comuns
                em atletas extraordinários através de
                acompanhamento profissional e performance.
            </p>

            <div class="flex gap-10 mt-14">

                <div>
                    <h2 class="text-4xl font-black text-orange-400">
                        +500
                    </h2>

                    <p class="text-zinc-400 mt-2">
                        alunos ativos
                    </p>
                </div>

                <div>
                    <h2 class="text-4xl font-black text-purple-400">
                        +12k
                    </h2>

                    <p class="text-zinc-400 mt-2">
                        quilômetros
                    </p>
                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="w-full max-w-md bg-white/5 border border-white/10 backdrop-blur-2xl rounded-[32px] p-10 shadow-2xl">

            <!-- LOGO -->
            <div class="flex flex-col items-center mb-10">

                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-orange-500 to-purple-700 flex items-center justify-center text-4xl font-black shadow-2xl shadow-orange-500/20">
                    S
                </div>

                <h1 class="text-4xl font-black mt-5">
                    SUPERATIS
                </h1>

                <p class="text-zinc-400 mt-2">
                    Área do Aluno
                </p>

            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- EMAIL -->
                <div class="mb-5">

                    <label class="block text-sm mb-3 text-zinc-300">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        required
                        class="w-full bg-[#120B22] border border-white/10 rounded-2xl px-5 py-4 focus:outline-none focus:border-orange-400 transition"
                        placeholder="Digite seu email"
                    >

                </div>

                <!-- SENHA -->
                <div class="mb-6">

                    <label class="block text-sm mb-3 text-zinc-300">
                        Senha
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full bg-[#120B22] border border-white/10 rounded-2xl px-5 py-4 focus:outline-none focus:border-purple-500 transition"
                        placeholder="Digite sua senha"
                    >

                </div>

                <!-- CHECK -->
                <div class="flex items-center justify-between mb-8">

                    <label class="flex items-center gap-3 text-sm text-zinc-400">

                        <input type="checkbox" name="remember">

                        Lembrar de mim

                    </label>

                    <a href="#"
                       class="text-orange-400 hover:text-orange-300 text-sm">
                        Esqueci minha senha
                    </a>

                </div>

                <!-- BOTÃO -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-purple-700 py-4 rounded-2xl text-lg font-black hover:scale-[1.02] transition-all duration-300">

                    ENTRAR

                </button>

            </form>

        </div>

    </div>

</body>
</html>
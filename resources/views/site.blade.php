<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupons de Desconto - Economize nas suas compras</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold text-blue-600">
                    <span class="text-orange-500">💰</span> CupomMax
                </a>
            </div>

            <!-- Barra de Pesquisa -->
            <div class="flex-grow mx-4 max-w-xl">
                <div class="relative">
                    <input type="text" placeholder="Carrefour, Netshoes, Renner..." 
                           class="w-full pl-10 pr-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <button class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Links de Navegação (Desktop) -->
            <nav class="hidden lg:flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">🔥 Ofertas</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Cupons</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Exclusivos</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Lojas</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Categorias</a>
            </nav>

            <!-- Menu Hamburguer (Mobile) -->
            <div class="lg:hidden">
                <button class="text-gray-600 hover:text-blue-600 focus:outline-none" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobileMenu" class="lg:hidden hidden bg-white border-t border-gray-200">
            <nav class="container mx-auto px-4 py-4 space-y-2">
                <a href="#" class="block text-gray-600 hover:text-blue-600 py-2">🔥 Ofertas</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 py-2">Cupons</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 py-2">Exclusivos</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 py-2">Lojas</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 py-2">Categorias</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Economize com os Melhores Cupons
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">
                Encontre códigos de desconto exclusivos das suas lojas favoritas
            </p>
            <!-- <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" placeholder="Digite o nome da loja..." 
                           class="w-full pl-6 pr-32 py-4 rounded-full text-gray-800 text-lg focus:outline-none focus:ring-4 focus:ring-white focus:ring-opacity-30">
                    <button class="absolute right-2 top-2 bg-orange-500 hover:bg-orange-600 text-white px-8 py-2 rounded-full font-semibold transition-colors duration-200">
                        Buscar
                    </button>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Lojas Populares -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Lojas Populares</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <!-- Loja 1 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <div class="w-16 h-16 bg-red-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">
                        A
                    </div>
                    <h3 class="font-semibold text-gray-800">Amazon</h3>
                    <p class="text-sm text-gray-600">15 cupons</p>
                </div>

                <!-- Loja 2 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <div class="w-16 h-16 bg-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">
                        M
                    </div>
                    <h3 class="font-semibold text-gray-800">Magazine Luiza</h3>
                    <p class="text-sm text-gray-600">8 cupons</p>
                </div>

                <!-- Loja 3 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <div class="w-16 h-16 bg-green-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">
                        S
                    </div>
                    <h3 class="font-semibold text-gray-800">Shopee</h3>
                    <p class="text-sm text-gray-600">12 cupons</p>
                </div>

                <!-- Loja 4 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <div class="w-16 h-16 bg-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">
                        N
                    </div>
                    <h3 class="font-semibold text-gray-800">Netshoes</h3>
                    <p class="text-sm text-gray-600">6 cupons</p>
                </div>

                <!-- Loja 5 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <div class="w-16 h-16 bg-orange-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">
                        C
                    </div>
                    <h3 class="font-semibold text-gray-800">Carrefour</h3>
                    <p class="text-sm text-gray-600">9 cupons</p>
                </div>

                <!-- Loja 6 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow duration-200 cursor-pointer">
                    <div class="w-16 h-16 bg-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-xl">
                        R
                    </div>
                    <h3 class="font-semibold text-gray-800">Renner</h3>
                    <p class="text-sm text-gray-600">4 cupons</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cupons em Destaque -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Cupons em Destaque</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cupom 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white font-bold">
                                    A
                                </div>
                                <div class="ml-3">
                                    <h3 class="font-semibold text-gray-800">Amazon</h3>
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full">EXCLUSIVO</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-green-600">30%</div>
                                <div class="text-sm text-gray-600">OFF</div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Desconto de 30% em produtos selecionados. Válido até o final do mês!</p>
                        <div class="flex items-center justify-between">
                            <div class="bg-gray-100 px-3 py-1 rounded font-mono text-sm">AMAZON30</div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-semibold transition-colors duration-200">
                                Pegar Cupom
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cupom 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                    M
                                </div>
                                <div class="ml-3">
                                    <h3 class="font-semibold text-gray-800">Magazine Luiza</h3>
                                    <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-full">IMPERDÍVEL</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-green-600">R$ 50</div>
                                <div class="text-sm text-gray-600">OFF</div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">R$ 50 de desconto em compras acima de R$ 300. Aproveite!</p>
                        <div class="flex items-center justify-between">
                            <div class="bg-gray-100 px-3 py-1 rounded font-mono text-sm">MAGALU50</div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-semibold transition-colors duration-200">
                                Pegar Cupom
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cupom 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                    S
                                </div>
                                <div class="ml-3">
                                    <h3 class="font-semibold text-gray-800">Shopee</h3>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">NOVO</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-green-600">25%</div>
                                <div class="text-sm text-gray-600">OFF</div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">25% de desconto na primeira compra. Válido para novos usuários!</p>
                        <div class="flex items-center justify-between">
                            <div class="bg-gray-100 px-3 py-1 rounded font-mono text-sm">SHOPEE25</div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-semibold transition-colors duration-200">
                                Pegar Cupom
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">
                        <span class="text-orange-500">💰</span> CupomMax
                    </h3>
                    <p class="text-gray-400">
                        Encontre os melhores cupons de desconto e economize nas suas compras online.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Links Úteis</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Todas as Lojas</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Categorias</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Cupons Exclusivos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Ofertas do Dia</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suporte</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Como Usar</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Contato</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Receba os melhores cupons no seu email</p>
                    <div class="flex">
                        <input type="email" placeholder="Seu email" 
                               class="flex-1 px-4 py-2 rounded-l-lg text-gray-800 focus:outline-none">
                        <button class="bg-orange-500 hover:bg-orange-600 px-6 py-2 rounded-r-lg font-semibold transition-colors duration-200">
                            Inscrever
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 CupomMax. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>


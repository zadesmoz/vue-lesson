<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Assets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <div class="container px-9"></div>

                <header class="py-6 mb-8">
                    <h1>
                        <img src="/images/Logo.png" alt="Logo">
                    </h1>
                </header>

                <main class="flex mx-20">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The Brand</h5>

                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/colors">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/typography">Typography</router-link></li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/illustrations">Ilustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/loadersAndAnimations">Loaders and Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-gray-700" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>

                </main>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>

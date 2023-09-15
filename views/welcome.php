<body class="bg-gray-50 dark:bg-gray-800 scrollbar scrollbar-w-3 scrollbar-thumb-rounded-[0.25rem] scrollbar-track-slate-200 scrollbar-thumb-gray-400 dark:scrollbar-track-gray-900 dark:scrollbar-thumb-gray-700">
    <nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="/" class="flex ml-2 md:mr-24">
                        <img src="../public/src/img/logo.png" class="h-8 mr-3" alt="FlowBite Logo">
                        <span class="fuente self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Tecno Gestión</span>
                    </a>
                </div>

                <div class="flex items-center">
                    <div class="hidden mr-3 -mb-1 sm:block">
                        <span></span>
                    </div>

                    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

                    <!-- Profile -->
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </button>
                        </div>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-2" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1263px, 61px);" data-popper-placement="bottom">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop">
    </div>
    <div class="flex pt-15 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 dark:bg-gray-900 min-h-screen">
            <div class="bg-gradient-to-r from-slate-100 to-slate-200 dark:from-slate-900 dark:to-slate-800 text-slate-800 dark:text-slate-100 p-4 lg:p-16 shadow-xl shadow-slate-200 dark:shadow-slate-900 astro-FBYZQWZ3">
                <header class="p-8 flex justify-center items-center flex-wrap flex-col w-full mt-16 astro-FBYZQWZ3">
                    <div class="flex justify-center w-full astro-FBYZQWZ3">
                    <a href="#"><img class="h-[100px] w-[100px] mb-6" src="../public/src/img/logo.png" alt="logo" /></a>
                    </div>

                    <div class="format dark:format-invert lg:format-lg mt-32 astro-FBYZQWZ3">
                        <p class="fuente text-4xl lg:text-8xl dark:text-slate-200 text-slate-600 leading-tight astro-FBYZQWZ3">
                            Hola!
                            <br class="astro-FBYZQWZ3">
                            <span class="font-bold text-blue-600 dark:text-blue-500 no-underline astro-FBYZQWZ3">Tecno Gestión</span>!
                        </p>

                        <div class="flex justify-center w-full astro-FBYZQWZ3">
                            <div data-trigger-confettis="" class="astro-2WRV7662">
                                <a href="/auth/login/" class="text-blue-800 hover:text-white border border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-100 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 astro-FBYZQWZ3">Ingresar</a>
                            </div>
                        </div>
                    </div>
                </header>

            <p class="my-10 text-sm text-center text-gray-500">
                © 2023 —
                <a href="https://flowbite.com/" class="hover:underline" target="_blank">Tecnogestion.com</a>. Todos los derechos reservados.
            </p>
        </div>
    </div>


</body>
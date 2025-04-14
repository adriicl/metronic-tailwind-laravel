<!doctype html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">

<head>
    <meta charset="utf-8">
    <title>Metronic - Tailwind CSS</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    @vite('resources/css/app.scss')
</head>

<body class="flex h-full demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
    <!--begin::Theme mode setup on page load-->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('theme')) {
                themeMode = localStorage.getItem('theme');
            } else if (document.documentElement.hasAttribute('data-theme-mode')) {
                themeMode = document.documentElement.getAttribute('data-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    @yield('main')

    @vite('resources/js/app.js')
    
    @stack('scripts')

</body>

</html>

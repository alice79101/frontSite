<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/src/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
</head>
<body class="font-inter antialiased bg-white text-gray-900 tracking-tight">
<noscript>You need to enable JavaScript to run this app.</noscript>
<script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
        document.querySelector('body').classList.add('sidebar-expanded');
    } else {
        document.querySelector('body').classList.remove('sidebar-expanded');
    }
</script>
<div id="root"></div>
<script type="module" src="/src/main.jsx"></script>
</body>
</html>

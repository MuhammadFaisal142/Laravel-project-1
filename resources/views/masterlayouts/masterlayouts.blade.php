<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title','website') Page</title>
    @stack('style')
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Sidebar</h3>
        <p>This is the sidebar content.</p>
    </aside>

    <!-- Main Content Area -->
    <div class="main-content">
        <header>
            <h1>Welcome to Our Website</h1>
        </header>

        <!-- Navbar -->
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
        </nav>
<article>
    @yield('content')
</article>
        
        <!-- Footer -->
        <footer>
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>

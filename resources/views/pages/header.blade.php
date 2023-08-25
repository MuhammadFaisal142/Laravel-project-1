{{-- <div style="background: lightblue"><h1>This is header page File  :</h1>
<ol>
@foreach ($names as $items)
<li>{{$items}}</li>    
@endforeach
</ol>
<ol>
    @forelse ($names as $items)
    <li>{{$items}}</li>    
    @empty
        <p>No recorde Found :   </p>
    @endforelse 
        
    </ol>
</div> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Home Page</title>
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
       
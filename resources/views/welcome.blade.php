{{-- <h1>Hello! welcome <b>This is my first project in laravel</b></h1>
@php
 $fruits = ["Banana","Orange","Anaar","Alu-bukhara"]   
@endphp
@include('pages.header', ['names' => $fruits])
<a href="/page/post">post page</a><br>
<a href="/page/about">About page</a><br>
<a href="/page/contectus">Content us  page</a><br>
@include('pages.footer') --}}




{{-- 
 @include('pages.header')
 <nav>
    <ul>
        <li><a href="/welcome">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/post">Post</a></li>
    </ul>
</nav>
        
 <section id="home">
            <h1>Home page</h1>
            <p>Home ipsum dolor sit amet consectetur adipisicing elit. Minima mollitia aspernatur, sed, sint corrupti qui esse beatae expedita distinctio eligendi laudantium tempore fuga cumque, provident aut maxime commodi doloremque. Repellat nisi dolorum totam dolores!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus non harum, sit optio iste itaque fugit maxime vero quisquam recusandae natus totam saepe repudiandae eveniet quas necessitatibus ab exercitationem, quos incidunt esse facilis expedita explicabo! Quidem ea quos quia nam voluptates reiciendis sapiente illum magnam. Rem vero eius consequatur quod, porro laborum impedit esse adipisci hic provident quaerat quam perspiciatis minus nobis necessitatibus repudiandae, quia ipsa temporibus minima corrupti facere molestias a? Quo nesciunt labore qui rem molestias nihil similique facere minima nostrum quisquam ea voluptas dignissimos, fugit libero numquam, beatae ipsum amet laudantium animi sequi possimus. Excepturi, quis iste?
            </p>
        </section>
      

@include('pages.footer')
   --}}
   <h1>{{$id}}</h1>
   {{-- {{$id}} --}}
   @extends('masterlayouts.masterlayouts')
   @section('content')
        <h1>Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aut necessitatibus libero. At laudantium voluptatibus asperiores quas, omnis minus iste debitis ad cupiditate aut voluptates ipsa esse impedit soluta cum obcaecati nam beatae? Ipsam minima magni commodi amet dolores incidunt, ducimus asperiores totam in dolor placeat quia porro assumenda. Rerum quibusdam cupiditate blanditiis ad veritatis laudantium a ullam distinctio quasi corporis fugit beatae incidunt qui eligendi eum maxime iure, velit assumenda. Eveniet suscipit beatae blanditiis, dolorem iste quos, iure non nostrum quasi in ad asperiores dolorum deserunt? Fugiat et dicta, sapiente architecto consequatur voluptates est earum, labore nostrum, necessitatibus magni.</p>
   @endsection

   @section('title')
        Home
   @endsection

   @push('scripts')
   <script src="/example1.js"></script>
   <script src="/example2.js"></script>
   <script src="/example3.js"></script>
   @endpush
   @push('style')
     <link rel="stylesheet" href="css/style.css ">
   @endpush
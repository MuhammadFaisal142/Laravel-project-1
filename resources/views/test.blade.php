
@php
    $users="Faisalsaith"; 
    $fruits=["Yellow","Banana","Anaar","Mango"];   
@endphp
<script>

// var data = @json($fruits) ;
var data={{ Js::from($fruits)}};
var data1 = @json($users) ;
data.forEach(function (entry){
    console.log(entry);    
})

console.log(data1);
</script>
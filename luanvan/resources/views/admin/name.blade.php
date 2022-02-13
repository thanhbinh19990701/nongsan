{{-- <?php
    $id = Auth::user();
?>
dd($id); --}}
@foreach($id as $key => $name )
<p>
xin chao {{$name->customer_name}}

    </p>
    @endforeach
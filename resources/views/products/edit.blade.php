@extends('products.layout')

@section('content')


<br>
<div class="row">
    <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('products.index')}}" >All products</a>
    </div>
     
  </div>
  <br>


  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
        @endforeach
       
    </ul>
  </div>
      
  @endif


<div class='container p-5'>


<form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" value="{{$product->name}}" >
 </div>
 <div class="mb-3">
   <label for="" class="form-label">Details</label>
   <textarea class="form-control" name="details" id="" rows="3">
    {{$product->details}}
   </textarea>
 </div>
 <div class="mb-3">
    <img src="/images/{{$product->image}}" width="300px">
    
    <input type="file" class="form-control" name="image" >
   </div>

   <button type="submit" class="btn btn-primary">Submit</button>
 

</form>
   

</div>

@endsection
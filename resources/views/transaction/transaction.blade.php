<!doctype html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add - user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<p align="right"><a href = "{{route('dashboard')}}" class="btn btn-outline-primary">> back to dashboard</button></a>  </p>
<form method="POST" action ="{{route('store')}}">
    @csrf           
                    
    <div class="container mt-2">
        <div class="row">
             
            <div class="col-sm-6">
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">User </label>
                            <select class="form-control"  name="user_id" id="exampleFormControlSelect1">
                            @foreach($users as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                          
                           
                                                       
                        </select> 
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Product Category</label>
                            <select class="form-control"  name="category_id" id="category">
                            @foreach($category as $item)
                            <option value="{{$item->id}}">{{$item->category}}</option>
                            @endforeach

                                             
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>         

            </div>
                    
            <div class="col-sm-6">

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User Type</label>
                            <select class="form-control"  name="type" id="exampleFormControlSelect1">
                            <option value="">-select</option>
                            <option value="customer"></option>                                                       
                        </select> 
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">product </label>
                            <select class="form-control"  name="product_id" id="product_id">
                            <option ></option>
                                                                                  
                        </select> 
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">price </label>
                            <select class="form-control"  name="price" id="pirce_id">
                            <option ></option>
                                                                                  
                        </select> 
                    </div>                        
          
            </div>

           
        </div>
            <div class="pt-5">
            <input class="btn btn-primary " type="submit" value="Submit">
            </div>
    </div>
</form> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function ($) {
$("#category").change(function(e) {

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
e.preventDefault();

var category =  $(this).val();
$.ajax({
url:"{{ route('get_product') }}",
dataType:'html',
type:"POST",
data: { category_id: category},

success:function (data) {
  
    $("#product_id").html(data);

},
error:function (data) {
    $("#product_id").html('There was an error please contact administrator');

},
})
});
});
</script>

<script type="text/javascript">

$(document).ready(function ($) {
$("#product_id").change(function(e) {

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
e.preventDefault();

var product_id =  $(this).val();
$.ajax({
url:"{{ route('get_price') }}",
dataType:'json',
type:"POST",
data: { product_id: product_id},
success: function(res) {

if (res) {

    $("#pirce_id").empty();
    $("#pirce_id").append;
    $.each(res, function(key, value) {
        $("#pirce_id").append('<option value="' + key + '">' + value +
            '</option>');
    });

} else {

    $("#pirce_id").empty();
}
}

})
});
});
</script>
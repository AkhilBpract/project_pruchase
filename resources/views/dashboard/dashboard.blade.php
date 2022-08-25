<form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        {{ __('Logout') }}
                </button>
</form>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-2">
           
            </div>

            <div class="col-md-2">
            <a href = "{{route('user')}}" class="btn btn-outline-primary">Coustomer/Vendor</a>
            </div>

            <div class="col-md-2">
            <a href = "{{route('product')}}" class="btn btn-outline-primary" >+Add Product </a>
            </div>

          
            <div class="col-md-2">
            <a href = "{{route('list_category')}}" class="btn btn-outline-primary">+Add category</a>
            </div>

            <div class="col-md-2">
            </div>
            <div class="col-md-2">            
                                  
            </div>

            

        </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
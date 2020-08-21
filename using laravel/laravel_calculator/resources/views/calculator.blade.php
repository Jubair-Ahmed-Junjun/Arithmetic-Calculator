<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body style="background-color: #D2691E;">
        <br><br><br>
          <div class="container text-center">
              <div class="row">
                  <div class="col-md-4 m-auto">
                    <form action="calculation" method="POST">
                        @csrf
                        <div class="card" style="background-color: #2E8B57;">
                          <div class="card-body m-auto">
                              <h1 class="text-center text-light">Arithmetic Calculator</h1>

                              <div class="form-group row">
                                  <div class="col-md-9">
                                      <input type="number" name="firstnumber" class="form-control" placeholder="Enter first number" required="">
                                  </div>
                              </div>

                               <div class="form-group row">
                                  <div class="col-md-9">
                                      <input type="number" name="secondnumber" class="form-control" placeholder="Enter second number" required="">
                                  </div>
                               </div>


                                <div class="form-group row">
                                  <div class="col-md-9">
                                      <select name="operator" class="form-control">
                                          <option>----Select Operator----</option>
                                          <option value="+">+</option>
                                          <option value="-">-</option>
                                          <option value="*">*</option>
                                          <option value="/">/</option>
                                          <option value="%">%</option>
                                      </select>
                                  </div>
                              </div>
                    
                          </div>
                          <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Enter">
                      </div>
                    </form>
                  </div>
              </div>
          </div> 
<br><br><br>
          <div class="row">
              <div class="col-md-4 m-auto">
                  @if(session('message'))
                  <div class="alert alert-warning">
                      <h1 class="text-center">{{ session('message') }}</h1>
                  </div>
                  @endif
              </div>
          </div>
    </body>
</html>

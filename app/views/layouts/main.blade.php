<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Authentication App With Laravel 4</title>
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css')}}

    {{ HTML::script('js/jquery-2.1.0.min.js') }}
  </head>
 
  <body>
      <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav"> 
                     @if(!Auth::check())
                            
                            <li>{{ HTML::link('users/register', 'Register') }}</li>   
                            <li>{{ HTML::link('users/login', 'Login') }}</li>
                            
                    @else
                    
                             @if($is_admin)
                                <li>{{ HTML::link('admin/users', 'Users') }}</li>   
                             @else
                                <li>{{ HTML::link('transfer', 'Transactions') }}</li>
                             @endif
                            <li>{{ HTML::link('users/logout', 'logout') }}</li>
                    @endif
                </ul> 
            </div>
        </div>
      </div>
      <div class="container">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif 
        {{ $content }}
      </div>
  </body>
</html>
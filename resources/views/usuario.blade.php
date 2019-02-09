@auth
   <h4>vc esta logado</h4>
   <p>{{ Auth::user()->name}}</p>
   <p>{{ Auth::user()->email}}</p> 
@endauth

@guest
    <h4>Vc não está logado</h4>
@endguest
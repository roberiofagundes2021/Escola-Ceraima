






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css'); }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=2.0">
	<title>Document</title>
</head>
<body>
@include('layouts.app')

@yield('conteudo')<br>
	<div id="header">
			<h1>@yield('titulo')</h1>
			<div id="nav">
				<ul id="menu-h">
					<li><a href="{{route('evento.index')}}">Eventos</a> </li>
					<li><a href="{{route('usuario.index')}}">Usuario</a> </li>
					<li><a href="{{route('reservas.index')}}">Reserva</a> </li>
					<li><a href="{{route('sala.index')}}">Sala</a> </li>
					<li><a href="{{route('patrimonio.index')}}">Patrimonio</a> </li>
					<li><a href="{{route('testes.index')}}">Testes</a> </li>
					<li><a href="{{route('manutencao.index')}}">Manutenção</a> </li>
					<li><a href="{{route('previsaoentregar.index')}}">Previsão de entregar de equipamentos </a> </li>
				</ul>
			</div>
	</div>



<div id="container">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                
    @if($errors->any())
        <div class="alert alert-danger"> 
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach    
            </ul>   
        </div>        
    @endif
    


         @csrf
             <form action="{{route('evento.store')}}" method="post">
                <div class="row g-3">
                    <div class="row"><h4>cadastro de eventos</h4></div>
                    <div class="col">
                        <label for="nome">nome</label>
                        <input type="text" class="form-control" name="nome" >
                         <label>data de inicio</label>
                         <input type="date" class="form-control" name="data_inicio">
                        <label>data de fim</label>
                         <input type="date" class="form-control" name="data_fim">
                          
                 
                        <label>hora de inicio</label>
                         <input type="time" class="form-control" name="hora_inicio">
                          <label>hora de fim</label>
                         <input type="time" class="form-control" name="hora_terminio"><br> 
                         <input type="submit" class="btn btn-primary" value="cadastrar">      
                </div>            
            </form>               
        </div>            


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="nav">
			<ul id="menu-h">

				<li>
                             
			</ul>
		</div>


                </div>
            </div>
        </div>
    </div>
</div>


	 <h4>@yield('subtitulo')</h4>
  <table class="col" id="row">

  	 

       <div class="row g-3">
        <div class=col>

        </div>

       </div>


  </table>
<footer>
			<br>
			<br><br>
            <div id="footer" align="center">
			copyrigth @Sistema desenvolvido por Robério Fagundes dos Santos
            </div>
</footer>
</div>



	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</body>
</html>






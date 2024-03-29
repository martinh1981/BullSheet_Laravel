@extends('layouts.main')

@section('content')

  <section class="_ranking">
    <h2 class="_rank">Ranking de Real News</h2>
    <?php $i = 0; ?>
    <?php $cant = $rankNews->count(); ?>
    <ul>
    @foreach ($rankNews as $rankNew)
    <?php $i++; ?>
    <div class="noticia">
    <li>
    <div class="card mb-3  " style="max-width: 540px;">
       <div class="row no-gutters">
          <div class="col-md-4">
          <img src="/storage/realnewsfiles/{{$rankNew->realnewsfile}}" height="200px" alt="imagen">
           </div>
            <div class="col-md-8">
             <div class="card-body">
             <div class="ranking_type">
           <img class="_newsType" src="img/internet.png" alt="news_type">
           <p>{{$i}}/{{$cant}}</p>
         </div>
               <h5 class="card-title">{{$rankNew->headline}}</h5>
               <h6 class="card-title">{{$rankNew->subheading}}</h6>
               <p class="card-text">{{$rankNew->text}}</p>
               <p class="card-text"><small class="text-muted">{{$rankNew->caption}}</small></p>
               <a href="/realnews/{{$rankNew->id}}" class="d-flex btn btn-primary __comprar">Ver detalle</a>
             </div>
         </div>
       </div>
     </div>

     </li>
     </div>
     @endforeach
    </ul>
  </section>

  <section class="_rankTable">
  <h2 class="_rank2">Ranking de Usuarios de Real News</h2>
  <table class="table table-borderless">
     <thead>
       <tr>
         <th scope="col"></th>
         <th scope="col">Nombre de Usuario</th>
         <th scope="col">Cantidad de notas subidas</th>

       </tr>
     </thead>
     <tbody>
     <?php $j = 0; ?>
     @foreach($ranks as $rank)
       <tr>
       <?php $j++; ?>
         <th scope="row">{{$j}}</th>
         <td>{{$rank->first_name . ' ' . $rank->last_name}}</td>
         <td>{{$rank->news_count}}</td>
       </tr>
       @endforeach

     </tbody>
   </table>
  </section>


@endsection

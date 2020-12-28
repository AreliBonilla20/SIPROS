@extends('Sitio.app')
@section('title')
    Noticias - Unidad de Proyección Social FCE
@endsection
@section('content')
<style>
      .pagination > li > a,
      .pagination > li > span {
          color:#ea6a56; // use your own color here
      }

      .pagination > .active > a,
      .pagination > .active > a:focus,
      .pagination > .active > a:hover,
      .pagination > .active > span,
      .pagination > .active > span:focus,
      .pagination > .active > span:hover {
          background-color: #ea6a56;
          border-color: #ea6a56;
      }
      .page-item.active .page-link {
          z-index: 3;
          color: #fff;
          background-color: #ea6a56;
          border-color: #ea6a56;
      }
</style>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
       
                <ol>
                    <li><a href="{{ route('sitio_index') }}">Inicio</a></li>
                    <li>Noticias</li>
                  </ol>
                  <h2>Noticias</h2>
            
    </div>
  </section>


<section id="blog" class="blog">
    <div class="container">

      <div class="row">
        @foreach($avisos as $aviso)
        <div class="col-md-6">

            <article class="entry">
  
              <div class="entry-img">
                <img src="{{ Storage::url($aviso->url) }}" alt="" class="img-fluid">
              </div>
  
              <h2 class="entry-title">
                <h2> <b>{{ $aviso->titulo }}</b></h2>
              </h2>
  
              <div class="entry-meta">
                <ul>

                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> {{ date('d/m/Y h:i', strtotime( $aviso->created_at)) }}</li>
    
                </ul>
              </div>
  
              <div class="entry-content">
                <p class="text-justify">
                    {{ $aviso->descripcion }}
                </p>
                
              </div>
  
            </article><!-- End blog entry -->
  
          </div>
        @endforeach
       
      </div>
       
      {{ $avisos->links() }}
          
      </div>

    </div>
  </section>

@endsection
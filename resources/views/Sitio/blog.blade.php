@extends('Sitio.app')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ol>
                    <li><a href="{{ route('sitio.index') }}">Home</a></li>
                    <li>Noticias</li>
                  </ol>
                  <h2>Noticias</h2>
            </div>
            <div class="col-md-4">
                
                <div class="search-form">
                    <form action="{{ route('sitio.blog')}}">
                      <input type="text" name="search" placeholder="Buscar">
                      <button type="submit"><i class="icofont-search"></i></button>
                    </form>     
                  </div>
            </div>        
        </div>
    </div>
  </section>


<section id="blog" class="blog">
    <div class="container">

      <div class="row">
        @foreach($lista as $aviso)
        <div class="col-md-6">

            <article class="entry">
  
              <div class="entry-img">
                <img src="{{ $aviso->url }}" alt="" class="img-fluid">
              </div>
  
              <h2 class="entry-title">
                <h2> <b>{{ $aviso->titulo }}</b></h2>
              </h2>
  
              <div class="entry-meta">
                <ul>

                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="{{ $aviso->created_at }}">{{ date('d/m/Y h:i', strtotime( $aviso->created_at)) }}</time></a></li>
    
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
       

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="disabled"><i class="icofont-rounded-left"></i></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
            </ul>
          </div>

      </div>

    </div>
  </section>

@endsection
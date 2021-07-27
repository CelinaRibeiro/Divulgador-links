@extends('admin.page')

@section('body')
    
    <a class="bigbutton" href="{{url('/admin/'.$page->slug.'/newLink')}}">Novo Link</a>

    <ul id="links">
        @foreach($links as $link)
           <li class="link--item" data-id="{{$link->id}}">
                <div class="link--item-order">
                    <img src="{{url('/assets/images/sort.png')}}" alt="Ordenar" width="18" />
                </div>
                <div class="link--item-info">
                    <div class="link--item-title">{{$link->title}}</div>
                    <div class="link--item-href">{{$link->href}}</div>
                </div>
                <div class="link--item-buttons">
                    <a href="{{url('/admin/'.$page->slug.'/editLink/'.$link->id)}}')}}">Editar</a>
                    <a href="{{url('/admin/'.$page->slug.'/delLink/'.$link->id)}}')}}">Excluir</a>
                </div>
           </li>
        @endforeach
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        new Sortable(document.querySelector('#links'), {
            animation: 150,
            onEnd: async (e) => {
                let id = e.item.getAttribute('data-id');
                let link = `{{url('/admin/linkorder/${id}/${e.newIndex}')}}`;
                await fetch(link);
                window.location.href = window.location.href;
            }
        });
    </script>

@endsection
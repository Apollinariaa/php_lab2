<h1>Hello</h1>
<h2>Category {{$category->id}}.{{$category->name}}</h2>

@foreach($banners as $banner)
    <div style="border: 2px solid #fff; margin-bottom: 100px;">
        <p>{{$banner->id}}</p>
        <p>{{$banner->name}}</p>
        <p>{{$banner->active}}</p>
        <p>{{$banner->link}}</p>
        <p>{{$banner->active_to}}</p>
        <p>{{$banner->active_from}}</p>
        <a href="{{$banner->link}}"><img src="{{$banner->image}}" alt="image"></a>
    </div>
@endforeach

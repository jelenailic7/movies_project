<html>
<head>
</head>
<body>
<h4>Movies</h4>
<ul>
@foreach($movies as $movie)
        <li><a href="{{route('single-movie',['id'=>$movie->id])}}">{{$movie->title}}</a></li>
        @endforeach
   </ul>
</body>
</html>
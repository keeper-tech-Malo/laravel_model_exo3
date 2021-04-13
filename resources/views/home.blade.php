<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <section>
        <!-- @foreach($membre as $item)
            @if($item->genre == 'Homme')
                <p style="color: blue;">{{$item->nom}}</p>
            @else
                <p style="color: pink;">{{$item->nom}}</p>
            @endif
        @endforeach -->
    </section>

    <!-- <section>
        @foreach($membre as $item)
            @if($item->genre == 'Homme')
                <p>{{$item->nom}}</p>
            @endif
        @endforeach
    
    </section> -->

    <!-- <section>
        @foreach($membre as $item)
            @if($item->genre == 'Femme')
                <p>{{$item->nom}}</p>
            @endif
        @endforeach
    
    </section> -->

    <!-- <section>
        @foreach($membre as $item)
            @if($item->genre == 'Homme' && $item->age >= 18 && $item->age <= 24 )
                <p>Prenom: {{$item->nom}} Age:{{$item->age}}</p>
            @endif
        @endforeach
    
    </section> -->

    <!-- <section>
        @foreach($membre as $item)
            @if($item->genre == 'Femme' && $item->age >= 18 && $item->age <= 24 )
                <p>Prenom: {{$item->nom}} Age:{{$item->age}}</p>
            @endif
        @endforeach
    
    </section> -->

    <section>
        @foreach($membre as $item)
            @if($item->age < 18 || $item->age > 24 )
                <p>Prenom: {{$item->nom}} Age:{{$item->age}}</p>
            @endif
        @endforeach
    
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
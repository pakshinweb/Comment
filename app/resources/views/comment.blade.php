<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="resources/public/css/main.css">
    </head>
    <body>
<div class="container">
    <div class="head">
        <div class="row space-between">
            <div class="info">
                <p class="tel text">Телефон: (499) 340-94-71</p>
                <p class="email text">Email: info@future-group.ru</p>
                <p class="title text">Комментарии</p>
            </div>
            <div class="logo">
                <a href=""><img src="resources/public/img/logo.png" alt="logo"></a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row colum">
            @if(count($comments)>0)
                @foreach($comments as $com)
            <ul class="commet">
                <li><span class="text">{{$com->name}}</span>
                    <small class="text">
                        <b>{{$com->updated_at->format('H:m')}}</b>
                        {{$com->updated_at->format('d.m.Y')}}
                    </small>
                </li>
                <li>{{$com->comment}}</li>
            </ul>
                @endforeach
            @else
                <div class="commet">
                    Пока сообщений нет...(((
                </div>
            @endif

            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/" class="claim flex colum">
                <h2>Оставить комментарий</h2>
                <label for="">Ваше имя</label>
                <input class="name" type="text" name="name">
                <label for="">Ваш комментарий</label>
                <textarea class="post" name="comment"></textarea>
                <input class="button text" type="submit" value="Отправить">
                @csrf
            </form>
        </div>

    </div>
    <div class="footer">
        <div class="row">
            <div class="logo">
                <a href=""><img src="resources/public/img/logo.png" alt="logo"></a>
            </div>
            <div class="info">
                <p class="tel text">Телефон: (499) 340-94-71</p>
                <p class="email text">Email: info@future-group.ru</p>
                <p class="adress text">Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                <p class="copr text">© 2010 - 2014 Future. Все права защищены</p>

            </div>
        </div>
    </div>
</div>

    </body>
</html>

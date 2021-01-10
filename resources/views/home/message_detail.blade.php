<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    @include('home.messages')
    <div class="container">
        <h3 class="mb-5">{{$message->name}} kişisinin mesaj içeriği</h3>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <td>{{$message->id}}</td>
            </tr>
            <tr>
                <th scope="col">name</th>
                <td>{{$message->name}}</td>
            </tr>
            <tr>
                <th scope="col">email</th>
                <td>{{$message->email}}</td>
            </tr>
            <tr>
                <th scope="col">phone</th>
                <td>{{$message->phone}}</td>
            </tr>
            <tr>
                <th scope="col">subject</th>
                <td>{{$message->subject}}</td>
            </tr>
            <tr>
                <th scope="col">message</th>
                <td>{{$message->message}}</td>
            </tr>
            <tr>
                <form action="{{route('adminnote')}}" method="post">
                    @csrf
                <th scope="col">Admin Note</th>
                <input type="hidden" name="id" value="{{$message->id}}"> 
                <td><textarea name="adminnote" id="" cols="30" rows="10">
                    {{$message->adminnote}}
                </textarea>
            <button type="submit" class="btn btn-info">Kaydet</button>
        </form>
            </td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>

</html>
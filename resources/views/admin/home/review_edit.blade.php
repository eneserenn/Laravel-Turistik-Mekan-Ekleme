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
        <h3 class="mb-5">{{$review->name}} kişisinin Yorum içeriği</h3>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">User Name</th>
                <td>{{$review->user->name}}</td>
            </tr>
            <tr>
                <th scope="col">Mekan</th>
                <td>{{$review->place->title}}</td>
            </tr>
            <tr>
                <th scope="col">Konu</th>
                <td>{{$review->subject}}</td>
            </tr>
            <tr>
                <th scope="col">Yorum içeriği</th>
                <td>{{$review->review}}</td>
            </tr>
            <tr>
                <th scope="col">IP</th>
                <td>{{$review->IP}}</td>
            </tr>
            <tr>
                <th scope="col">Like</th>
                <td>{{$review->like}}</td>
            </tr>
            <tr>
                <form action="{{route('editstatus')}}" method="post">
                    @csrf
                <th scope="col">status</th>
                <input type="hidden" name="id" value="{{$review->id}}">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                      <option value="true">true</option>
                      <option value="true">false</option>
                    </select>
                  </div>
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
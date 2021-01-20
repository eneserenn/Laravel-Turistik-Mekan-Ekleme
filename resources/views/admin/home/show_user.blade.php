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
        <h3 class="mb-5">{{$user->name}} kişisi</h3>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">user id</th>
                <td><img width="120" height="120" src="{{Storage::url($user->profile_photo_path)}}" alt=""></td>
            </tr>
            <tr>
                <th scope="col">user id</th>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <th scope="col">name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="col">email</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th scope="col">Roller</th>
                <td>@foreach ($user->roles as $role)
                     {{$role->name}} <a href="{{route('delete_user_role',['user_id'=>$user->id,'role_id'=>$role->id])}}">sil</a><br>
                @endforeach</td>
            </tr>
          
            <tr>
                <form action="{{route('add_user_role')}}" method="post">
                    @csrf
            
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <select class="form-control" name="role_id">
                    @foreach ($roles as $role)
                      <option value="{{$role->id}}">{{$role->name}}</option>
                      @endforeach
                  </select>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Reseau Social</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Adress</th>
                <th>Tel</th>
                <th>ICE</th>
                <th>Createur</th>
                <th>Editeur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $c)
            <tr>
                <td>{{$c->reseau_social}}</td>
                <td>{{$c->nom}}</td>
                <td>{{$c->prenom}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->ville}}</td>
                <td>{{$c->adress}}</td>
                <td>{{$c->tel}}</td>
                <td>{{$c->ICE}}</td>
                <td>{{$c->created_by}}</td>
                <td>{{$c->updated_by}}</td>
                <td>
                    <button class="btn btn-primary"><a href="{{ route('Clients.editclient', $c->id) }}">Edit</a></button>
                    <form method="post" action="{{ route('Clients.deleteclient', $c->id) }}" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            {{$clients->links()}}
        </tbody>
    </table>
</body>
</html>

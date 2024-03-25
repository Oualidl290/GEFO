<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Client</title>
</head>
<body>
    <h1>Edit Client</h1>
    <form method="POST" action="{{ route('Clients.editclient', $clients->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="reseau_social">Reseau Social:</label>
            <input type="text" id="reseau_social" name="reseau_social" value="{{ $clients->reseau_social }}" required>
        </div>
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{ $clients->nom }}" required>
        </div>
        <div>
            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" value="{{ $clients->prenom }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $clients->email }}" required>
        </div>
        <div>
            <label for="ville">Ville:</label>
            <input type="text" id="ville" name="ville" value="{{ $clients->ville }}" required>
        </div>
        <div>
            <label for="adress">Adress:</label>
            <input type="text" id="adress" name="adress" value="{{ $clients->adress }}" required>
        </div>
        <div>
            <label for="tel">Tel:</label>
            <input type="text" id="tel" name="tel" value="{{ $clients->tel }}" required>
        </div>
        <div>
            <label for="ICE">ICE:</label>
            <input type="text" id="ICE" name="ICE" value="{{ $clients->ICE }}" required>
        </div>
        <div>
            <label for="created_by">Createur:</label>
            <input type="text" id="created_by" name="created_by" value="{{ $clients->created_by }}" required>
        </div>
        <div>
            <label for="updated_by">Editeur:</label>
            <input type="text" id="updated_by" name="updated_by" value="{{ $clients->updated_by }}" required>
        </div>
        <button type="submit">Update clients</button>
    </form>
</body>
</html>

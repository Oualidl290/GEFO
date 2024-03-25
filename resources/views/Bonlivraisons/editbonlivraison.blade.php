<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bonlivraison</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Bonlivraison</h2>
                <form action="{{ route('updatebonlivraison', $bonlivraison->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $bonlivraison->date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="regle">Reglement:</label>
                        <select class="form-control" id="regle" name="regle" required>
                            <option value="0" {{ $bonlivraison->regle == 0 ? 'selected' : '' }}>Not Paid</option>
                            <option value="1" {{ $bonlivraison->regle == 1 ? 'selected' : '' }}>Paid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="client_id">Client:</label>
                        <select class="form-control" id="client_id" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" {{ $bonlivraison->client_id == $client->id ? 'selected' : '' }}>{{ $client->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="created_by">Created By:</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" value="{{ $bonlivraison->created_by }}" required>
                    </div>
                    <div class="form-group">
                        <label for="updated_by">Updated By:</label>
                        <input type="text" class="form-control" id="updated_by" name="updated_by" value="{{ $bonlivraison->updated_by }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

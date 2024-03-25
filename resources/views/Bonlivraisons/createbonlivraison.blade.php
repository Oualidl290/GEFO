<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bonlivraison</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create New Bonlivraison</h2>
                <form action="{{ route('storebonlivraison') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="regle">Reglement:</label>
                        <select class="form-control" id="regle" name="regle" required>
                            <option value="0">Not Paid</option>
                            <option value="1">Paid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="client_id">Client:</label>
                        <select class="form-control" id="client_id" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="created_by">Created By:</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" required>
                    </div>
                    <div class="form-group">
                        <label for="updated_by">Updated By:</label>
                        <input type="text" class="form-control" id="updated_by" name="updated_by" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

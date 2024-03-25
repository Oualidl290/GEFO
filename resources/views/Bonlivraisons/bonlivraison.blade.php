<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonlivraisons</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>List of Bonlivraisons</h2>
                @if ($bonlivraisons->isEmpty())
                    <p>No Bonlivraisons found.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Reglement</th>
                                <th>Client</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bonlivraisons as $bonlivraison)
                                <tr>
                                    <td>{{ $bonlivraison->id }}</td>
                                    <td>{{ $bonlivraison->date }}</td>
                                    <td>{{ $bonlivraison->regle ? 'Paid' : 'Not Paid' }}</td>
                                    <td>{{ $bonlivraison->client->nom }}</td> <!-- Assuming you have a name attribute in your Client model -->
                                    <td>
                                        {{-- <a href="{{ route('bonlivraisons.show', $bonlivraison->id) }}" class="btn btn-primary">View</a> --}}
                                        <a href="{{ route('editbonlivraison', $bonlivraison->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('deletebonlivraison', $bonlivraison->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $bonlivraisons->links() }} <!-- Pagination links -->
                @endif
            </div>
        </div>
    </div>
</body>
</html>

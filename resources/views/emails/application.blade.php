<h2>Nouvelle candidature {{ $data['slug'] }}</h2>

<p><strong>Nom :</strong> {{ $data['name'] }}</p>
<p><strong>Email :</strong> {{ $data['email'] }}</p>
<p><strong>Telephone :</strong><br>{{ $data['message'] ?? 'Aucun message' }}</p>
<p>Le CV est joint à cet email.</p>
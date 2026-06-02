<h2>Nouvelle candidature {{ $data['slug'] }}</h2>

<p><strong>Nom :</strong> {{ $data['fullName'] }}</p>
<p><strong>Email :</strong> {{ $data['email'] }}</p>
<p><strong>Phone :</strong><br>{{ $data['phone'] }}</p>
<p><strong>message :</strong><br>{{ $data['message'] ?? 'Aucun message' }}</p>
<p><strong>Question 1 :</strong><br>{{ $data['Question1'] }}</p>
<p><strong>Question 2 :</strong><br>{{ $data['Question2'] }}</p>
<p><strong>Question 3 :</strong><br>{{ $data['Question3'] }}</p>
<p>Le CV est joint à cet email.</p>
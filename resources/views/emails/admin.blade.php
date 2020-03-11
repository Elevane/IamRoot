
<!--Body of the validation email-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>you recieved le following message : From  {{ $contact['lastname'] }} {{ $contact['firstname'] }}</h2>
<span></span>
<p>{{$contact['message']}}</p>
<h3>contact : </h3>
<ul>
    <li>
        {{$contact['lastname']}}
    </li>
    <li>
        {{$contact['firstname']}}
    </li>
    <li>
        {{$contact['email']}}
    </li>

</ul>

</body>
</html>

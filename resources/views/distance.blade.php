@php use Illuminate\Support\Facades\URL; @endphp
<html>
<head>
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <script src="{{ URL::asset('js/app.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.js')}}"></script>
</head>
<body>

<table class="table table-striped custab">
    <thead>
    <tr>
        <th>Affiliate ID</th>
        <th>Affiliate Name</th>
        <th>Distance From Office(km)</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($affiliates as $affiliate)
        <tr>
            <td>{{ $affiliate['affiliate_id'] }}</td>
            <td>{{ $affiliate['name'] }}</td>
            <td>{{ $affiliate['distance'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

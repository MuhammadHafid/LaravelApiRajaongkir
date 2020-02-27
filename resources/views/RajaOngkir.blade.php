<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raja Ongkir Search Index</title>
</head>
<body>
    <h3>List City & Province</h3>
    <form action="{{  route('city.search')  }}" method="get">
            <input type="text" class="carinput" placeholder="Masukan nama kota" name="q">
            <button type="submit" class="cari">Cari</button>
        </form>
    <div class="container">
            <table>
                <thead>
                    <tr>
                        <th class="num">No</th>
                        <th class="oth">City</th>
                        <th class="oth">Province</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                <tr>
                    <td class="num">{{ $no++ }}</td>
                    <td class="oth">{{ $datas->city_name }}</td>
                    <td class="oth">{{ $datas->province }}</td>
                </tr>
                @endforeach
            </table>
    </div>
</body>
</html>
   
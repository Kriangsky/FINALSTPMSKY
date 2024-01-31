<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <div>
        Admin : {{auth()->user()->email}}
    </div>
    <div style="width: 50vw">
        <div style="display: flex; justify-content: space-between">
            <a href="{{ route('admin.home', ['keyword' => request('keyword'), 'category' => '']) }}">Registered Teams</a>
            <a href="{{ route('admin.home', ['keyword' => request('keyword'), 'category' => 'cv']) }}">CV Folder</a>
            <a href="{{ route('admin.home', ['keyword' => request('keyword'), 'category' => 'binusian']) }}">Binusian Flazz Card</a>
            <a href="{{ route('admin.home', ['keyword' => request('keyword'), 'category' => 'non-binusian']) }}">Non Binusian ID Card</a>
            <div>
                <form action="{{route('admin.home')}}" method="GET">
                    <input type="text" name="category" value="{{request('category')}}" hidden id="">
                    <input type="text" name="keyword" placeholder="Search">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>

        <table>
            <tr>
                <th>Nama Group</th>
                <th>Nama Ketua</th>
                <th>{{request('category') == ''? 'Contact' : (request('category') == 'cv'? 'CV': (request('category') == 'binusian' ? 'BINUS ID': 'ID'))}}</th>
            </tr>
            @foreach ($tableData as $data)
                <tr>
                    <td>{{$data['team_name']}}</td>
                    <td>{{$data['leader_name']}}</td>
                    <td>{{$data['third_column']}}</td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>

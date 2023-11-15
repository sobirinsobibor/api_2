<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama Buku</th>
            <th>price</th>
            <th>created_at</th>
        </tr>
        @foreach ($books as $item)
        <tr>
            <td>
                {{ $item->title }}
            </td>
            <td>          
                {{ $item->price }}
            </td>
            <td>
                {{ $item->created_at }}
            </td>
        </tr>
        @endforeach  
    </table>
    
</body>
</html>
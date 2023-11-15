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
        
        <tr>
            <td>
                {{ $book->title }}
            </td>
            <td>          
                {{ $book->price }}
            </td>
            <td>
                {{ $book->created_at }}
            </td>
        </tr>
    </table>
    
</body>
</html>
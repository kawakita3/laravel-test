3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
	
 
<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テスト</title>
</head>
 
<body>
 
    @if ($todo_lists->isNotEmpty())
        <ul>
            @foreach ($todo_lists as $item)
                <li>
                    {{ $item->name }}
                </li>
            @endforeach
        </ul>
    @endif
 
</body>
 
</html>
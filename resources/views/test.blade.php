<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li {
            margin-left: calc(1rem * var(--level));
            position: relative;
        }

        li:not(:first-child) {
            margin-top: 10px;
        }

        li:not(:last-child)::after {
            content: "";
            position: absolute;
            height: calc(100% + 10px);
            width: 2px;
            background-color: #ccc;
            left: 1px;
            top: 65%;
        }

        li:not(:last-child)::before {
            content: "";
            position: absolute;
            height: 2px;
            width: 10px;
            background-color: #ccc;
            left: 1px;
            top: 200%;
        }
    </style>
</head>

<body>
    @isset($replies)
    @foreach ($replies as $item)
    <li style="--level: {{$item->level}}" reply-id="{{$item->id}}"><a href="#">{{$item->reply}}</a></li>
    @endforeach
    @endisset
</body>

</html>
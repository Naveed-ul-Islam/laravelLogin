<table border='1'>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
    </tr>
    @endforeach
</table>
<style>
    table{
        border-collapse: collapse;
        border: 1px solid black;
        border-radius: 20px;

    }
    td{
        padding:8px;

    }
    tr{
        background-color:rgba(0,150,255,0.1);

    }
</style>
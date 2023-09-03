<table>
    <tr>
        Participantes
    </tr>
    @foreach($aprendices as $ap)
    <tr>
        <td>{{ $ap->Nombres }}</td>
        <td>{{ $ap->Apellidos }}</td>
    </tr>
    @endforeach
</table>
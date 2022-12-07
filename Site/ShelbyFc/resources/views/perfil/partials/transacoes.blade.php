@if(empty($transacoes))

    <h2>Você ainda não fez nenhuma transação</h2>

@else


    <table>
        <tbody>
        <tr class="header">
            <th>#</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data</th>
        </tr>
        @foreach($transacoes as $transacao)
        <tr>
            <td>{{$transacao->id}}</td>
            <td>{{$transacao->descricao}}</td>
            <td>{{$transacao->valor}}</td>
            <td>{{$transacao->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endif

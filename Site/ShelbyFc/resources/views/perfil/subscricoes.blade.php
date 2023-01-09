@extends('layouts.perfil')

@section('content-perfil')

    @if(empty($subscriptions))

        <div class="alert-profile">
            <h4>Você ainda não fez nenhuma subscrição</h4>
        </div>

    @else

        <table>
            <tbody>
            <tr class="header">
                <th>#</th>
                <th>Estado</th>
                <th>Valor</th>
                <th>Subscreveu a:</th>
                <th>Expira/ou:</th>
            </tr>
            @foreach($subscriptions as $subscription)
                <tr>
                    <td>{{$subscription->id}}</td>
                    <td>{{$subscription->state}}</td>
                    <td>{{$subscription->value}}€</td>
                    <td>
@if($subscription->state == 'Pendente')
                            <a href="{{route('paypal.pay.subscription', $subscription)}}" class="btn btn-primary"></a>
                        @else
                            {{$subscription->created_at}}
    @endif


                    </td>
                    <td>{{$subscription->expires_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
@endsection

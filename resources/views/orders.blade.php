@extends('mainLayout')

@section('title')Заказы@endsection
@section('stylesheets')

@endsection

@section('content')
    <div class="main_wrapper">
        <div class="container d-flex flex-column justify-content-between">
            <div class="row">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Статус</th>
                        <th>Email клиента</th>
                        <th>Партнер</th>
                        <th>Дата доставки</th>
                    </tr>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            <a href="/orders/edit/{{ $order->id }}">{{ $order->id }}</a>
                        </td>
                        <td>
                            {{ $order->status }}
                        </td>
                        <td>
                            {{ $order->client_email }}
                        </td>
                        <td>
                            {{ $order->partner['name'] }}
                        </td>
                        <td>
                            {{ $order->delivery_dt }}
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')

@endsection
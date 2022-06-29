@extends('mainLayout')

@section('title')Заказы - Рредактирование заказа №{{ $order['id'] }}@endsection
@section('stylesheets')

@endsection


@section('content')
    <div class="main_wrapper">
        <div class="container d-flex flex-column justify-content-between">
            <h1>Редактирование заказа №{{ $order['id'] }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::model($order, array('route' => array('orders_update', $order))) }}
                <div class="form-group">
                    {{ Form::label('client_email', 'Почта клиента') }}
                    {{ Form::text('client_email', $order->client_email, $attributes = ['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('partner', 'Партнер') }}
                    <select id="partner" name="partner" class="form-control">
                        @foreach($partners as $partner)

                            <option value="{{ $partner->id }}" @if($order->partner->id == $partner->id) selected @endif>{{ $partner->name }}</option>
                        @endforeach
                    </select>
                </div>
                <h2>Продукты заказа:</h2>
                <div class="form-group row">
                    @foreach ($orderProducts as $prod)
                        <div class="col-3">
                            Продукт: {{ $prod->name }}
                        </div>
                        <div class="col-9">
                            Кол-во: {{ $prod->pivot->quantity }}
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    {{ Form::label('status', 'Статус заказа') }}
                    {{ Form::select('status', array('0' => '0', '10' => '10', '20' => '20'), $order->status, $attributes = ['class'=>'form-control']) }}
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        Стоимость заказа:
                    </div>
                    <div class="col-9">
                        {{ $orderProducts[0]->pivot->price }}
                    </div>
                </div>
                {{ Form::submit('Сохранить', ['class'=>'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('javascripts')

@endsection

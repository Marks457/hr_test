<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Partner;
use App\Models\Product;
use App\Http\Requests\UpdateOrders;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('orders', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //123
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Order $orders
     * @return Response
     */
    public function show(Order $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $orders
     * @return Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $partners = Partner::all();

        return view('ordersEdit', [
            'order' => $order,
            'partners' => $partners,
            'orderProducts' => $order->products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOrders $request
     * @param Order $orders
     * @return Response
     */
    public function update(UpdateOrders $request, Order $order)
    {
        $order->client_email = $request->client_email;
        $partner = Partner::find($request->partner);
        $order->partner()->associate($partner);
        $order->status = $request->status;
        $order->save();

        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $orders
     * @return Response
     */
    public function destroy(Order $orders)
    {
        //
    }
}

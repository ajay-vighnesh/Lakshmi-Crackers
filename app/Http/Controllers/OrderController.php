<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\BankAccount;
use App\Models\Customer;
use Redirect;

class OrderController extends Controller
{

    // public function price(Request $request)
    // {
    //     $data = Order::all();
    //     return view('print', [
    //         'request' => $request,
    //         'user' => $request->user(),
    //         'order'=> $data
    //     ]);
    // }
    public function store(Request $request, GeneralSettings $settings)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'mobile_number' => ['required', 'regex:/^[0-9]{10}$/'], // Assumes 10-digit mobile number
            'whatsapp_number' => ['required', 'regex:/^[0-9]{10}$/'], // Assumes 10-digit mobile number
            'address' => 'required',
            // 'city_town' => 'required|string',
            // 'district' => 'required|string',
            // 'state' => 'required|string',
            // 'pin_code' => 'required|integer',
            'order_items' => 'required|array',
            'order_items.*.id' => 'required|integer|exists:products,id',
            'order_items.*.quantity' => 'required|integer',
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        $address = $customer->address()->create([
            'address' => $request->address,
            'city_town' => $request->city_town,
            'district' => $request->district,
            'state' => $request->state,
            'pin_code' => $request->pin_code,
        ]);

        $order = $customer->orders()->create([
            'address_id' => $address->id,
            'email' => $customer->id,
            'mobile_number_id' => $customer->id,
            'whatsapp_number_id' => $customer->id
        ]);

        $order_items = [];
        foreach($request->order_items as $item)
        {
            array_push($order_items, ['product_id' => $item['id'], 'quantity' => $item['quantity'], 'total' => $this->getItemTotal($item['id'], $item['quantity'])]);
        }

        $items = $order->items()->createMany($order_items);

        $discount = $settings->global_discount;

        $net_total = $items->sum('total');
        $discount_total = $discount / 100 * $net_total;
        $sub_total = $net_total - $discount_total;

        $order->net_total = $net_total;
        $order->discount_total = $discount_total;
        $order->sub_total = $sub_total;
        $order->save();


        return Redirect::to(route('order'));

    }


    protected function getItemTotal($product_id, $quantity)
    {
        $product = Product::find($product_id);

        return $quantity * $product->price;
    }

    public function printOrder(Request $request)
    {
        $order = Order::with('customer','address', 'items')->find($request->id);
        $bank_accounts = BankAccount::all();

        return view('orders.print', compact('order', 'bank_accounts'));

      
    }
    public function downloadOrder(Request $request)
    {
        $order = Order::with('customer','address', 'items')->find($request->id);

        return view('orders.download', compact('order'));

      
      
    }




}
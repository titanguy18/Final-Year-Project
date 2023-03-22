<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\payment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\OrderDetail;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class OrderController extends Controller
{
    public function manageOrder(){
         $orders = DB::table('orders')
         ->join('customers','orders.customer_id','=', 'customers.customer_id')
         ->join('payments','orders.order_id','=', 'payments.order_id')
         ->select('orders.*','customers.name','payments.payment_type','payments.payment_status')
         ->get();
        return view('Dashboard.manageOrder', compact('orders'));
    }

    public function viewOrder($order_id){
        $order = Order::find($order_id);
        //$payment_ = payment::find($order_id);
        //$order_detail = OrderDetail::find($order_id);

        $customer = Customer::find($order->customer_id);
        $payment = payment::where('order_id', $order->order_id)->first();
        $orderDetail = OrderDetail::where('order_id', $order->order_id)->first();
    return view('Dashboard.view_order', compact('order','customer','payment','orderDetail'));
    }
public function viewInvoice($order_id){
     $order = Order::find($order_id);

        $customer = Customer::find($order->customer_id);
        $payment = payment::where('order_id', $order->order_id)->first();
        $order_details = OrderDetail::where('order_id', $order->order_id)->first();
    return view('Dashboard.view_order_invoice', compact('order','customer','payment','order_details'));
}

 public function downloadInvoice($order_id){
    
$order = Order::find($order_id);

        $customer = Customer::find($order->customer_id);
        $payment = payment::where('order_id', $order->order_id)->first();
        $order_details = OrderDetail::where('order_id', $order->order_id)->first();

         // instantiate and use the dompdf class
       $dompdf = new Dompdf();
      $dompdf->loadHtml(view('Dashboard.download_invoice', compact('order','customer','payment','order_details')));
     //  $dompdf->loadHtmlFile(view('download_invoice'));

       // (Optional) Setup the paper size and orientation
       $dompdf->setPaper('A4', 'portrait');
       
       // Render the HTML as PDF
       $dompdf->render();
       
       // Output the generated PDF to Browser
       $dompdf->stream('OrderInvoice.pdf',['Attachment'=>false]);
    
   // return view('download_invoice', compact('order','customer','shipping','payment','order_details'));
 }

    public function deleteOrder($order_id){
        $order = Order::find($order_id);
        $order->delete();
        return back()->with('sms','Order Deleted Successfully');
    }

}

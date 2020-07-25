<?php

namespace App\Http\Controllers;

use App\Cart; 
use App\Pizza; 
use App\Order; 
use App\Http\Request as HttpRequest; 
use Illuminate\Http\Request; 
use Session; 
use Auth; 


class PizzaController extends Controller
{
      public function getIndex() 
      {
         $pizzas = Pizza::all(); 
         return view('shop.index', ['pizzas' => $pizzas]);  
      }

      public function getAddToCart(Request $request, $id) 
      {
         $pizza =  Pizza::find($id); 
         $oldCart = session()->has('cart') ? session()->get('cart') : null;
         $cart = new Cart($oldCart); 
         $cart->add($pizza, $pizza->id); 

         $request->session()->put('cart', $cart); 
         return redirect()->route('shop.index'); 
      }

      public function getReduceByOne($id) {
         $oldCart = session()->has('cart') ? session()->get('cart') : null;
         $cart = new Cart($oldCart); 
         $cart->reduceByOne($id); 

         Session::put('cart', $cart); 
         return redirect()->route('pizza.shoppingCart'); 

      }
      public function getRemoveItem($id) {
         $oldCart = session()->has('cart') ? session()->get('cart') : null;
         $cart = new Cart($oldCart); 
         $cart->removeItem($id); 

         if(!empty($cart->items)) {
            Session::put('cart', $cart);
         } else {
            Session::forget('cart');
         }

          
         return redirect()->route('pizza.shoppingCart'); 

      }



      public function getCart() {
            if(!session()->has('cart')) {
               return view('shop.shopping-cart'); 
            }
            $oldCart = session()->get('cart'); 
            $cart = new Cart($oldCart); 
            return view('shop.shopping-cart', ['pizzas' => $cart->items, 'totalPrice' => $cart->totalPrice]); 
      }
      public function getCheckout() {
         if(!session()->has('cart')) {
            return view('shop.shopping-cart'); 
         }
         $oldCart = session()->get('cart'); 
         $cart = new Cart($oldCart); 
         $total = $cart->totalPrice; 
         return view('shop.checkout', ['total' => $total]); 
      }

      public function postCheckout(Request $request) {
         if(!session()->has('cart')) {
            return view('shop.shopping-cart'); 
         }
         $oldCart = session()->get('cart'); 
         $cart = new Cart($oldCart); 

          $order = new Order(); 
          $order->cart = serialize($cart); 
          $order->address = $request->input('address'); 
          $order->name = $request->input('name'); 

          Auth::user()->orders()->save($order);  
         
         session()->forget('cart'); 
         return redirect()->route('shop.index')->with('success', 'Successfully purchesed pizza!'); 
      }



   

} 

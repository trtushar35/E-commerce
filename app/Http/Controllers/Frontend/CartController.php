<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cartView()
    {
        return view('frontend.pages.cart.view');
    }

    public function addToCart($pId)
    {
        $product = Product::find($pId);
        // dd($product);
        $cart = session()->get('vcart');

        if ($cart) { //not empty product exist
            if (array_key_exists($pId, $cart)) {
                $cart[$pId]['quantity'] = $cart[$pId]['quantity'] + 1;
                $cart[$pId]['subtotal'] = $cart[$pId]['quantity'] * $cart[$pId]['price'];
                $cart[$pId]['image'] = $product->image;

                session()->put('vcart', $cart);
                notify()->success('Quantity updated successfully.');
                return redirect()->back();
            } else { //no product add to cart
                $cart[$pId] = [
                    'id' => $pId,
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                    'quantity' => 1,
                    'subtotal' => 1 * $product->price,
                ];

                session()->put('vcart', $cart);
                notify()->success('Product added successfully.');
                return redirect()->back();
            }
            return redirect()->back();
        } else { //empty add to cart
            $newCart[$pId] = [
                'id' => $pId,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
                'subtotal' => 1 * $product->price,
            ];
            session()->put('vcart', $newCart);
            notify()->success('Product added to cart successfully.');
            return redirect()->back();
        }

        return view('frontend.pages.cart.view');
    }

    public function clearCartItem()
    {
        session()->forget('vcart');
        notify()->success('Cart clear successfully.');
        return redirect()->back();
    }

    public function deleteCartItem($id) {
        $cartItem = session()->get('vcart', []);
        if (isset($cartItem[$id])) {
            unset($cartItem[$id]);
            session()->put('vcart', $cartItem);
            notify()->success("Cart item deleted successfully.");
            return redirect()->back();
        }
    }
}

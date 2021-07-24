<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giohang extends Model
{
    public $route_cart = 0; //ma tuyen duong
    public $ma_ldh = 0; //ma loai don hang
    public  $customer_cart = 0; //ma khach hang
    public $items = null;
    public $totalQty = 0; // tong so luong san pham
    public $totalPrice = 0; // tong gia san pham

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->customer_cart = $oldCart->customer_cart;
            $this->ma_ldh = $oldCart->ma_ldh;
            $this->route_cart=$oldCart->route_cart;
        }
    }

    public function add($item, $id){
        $giohang = ['qty'=>0, 'price' => $item->giaspbanra, 'item' => $item];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty']++;
        $giohang['price'] = $item->giaspbanra * $giohang['qty'];

        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += $item->giaspbanra;

    }

    public function update_kh($id,$ma_ldh){
        $this->ma_ldh=$ma_ldh;
        $this->customer_cart=$id;
    }
    public function update_route($id){
        $this->route_cart=$id;
    }

    // update cart
    public function update_cart($id,$newQty){
        $present_qty = $this->items[$id]['qty'];

        if( $present_qty > $newQty){
            $this->items[$id]['qty'] = $newQty;
            $this->items[$id]['price'] = $this->items[$id]['item']['giaspbanra'] * $newQty;
            $cut = $present_qty - $newQty;
            $this->totalQty -= $cut;
            $this->totalPrice -= $this->items[$id]['price'];

            if($this->items[$id]['qty']<=0){
                unset($this->items[$id]);
            }
        }

        if($present_qty < $newQty){
            $this->items[$id]['qty'] = $newQty;
            $this->items[$id]['price'] = $this->items[$id]['item']['giaspbanra'] * $newQty;
            $add = $newQty - $present_qty;
            $this->totalQty += $add;
            $this->totalPrice += $this->items[$id]['item']['giaspbanra'] * $add;

            if($this->items[$id]['qty']<=0){
                unset($this->items[$id]);
            }
        }

    }
    //xóa 1
    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['giaspbanra'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['giaspbanra'];
        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }
    //xóa nhiều
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}

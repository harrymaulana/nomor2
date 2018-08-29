<?php
	// checking cart product
	public function searchProdCart($productCode){
		$max = count($_SESSION['cart_items']);
		
		for ($i = 0; $i < $max; $i++) {
			if ($productCode == $_SESSION['cart'][$i]['productid']) {
				return 1;
                break;
			}
		}
	}
	
	// add product
	public function addProduct($productCode, $quantity){
		$product = searchProdCart($productCode);
		
		// new product
		if(product == 0){
			$max = count($_SESSION['cart_items']);
			$_SESSION['cart_items'][$max]['productid'] = $productCode;
            $_SESSION['cart_items'][$max]['qty']       = $quantity;
		}
		else{
			$max = count($_SESSION['cart_items']);
			for ($i = 0; $i < $max; $i++) {
				if ($cart_id == $_SESSION['cart_items'][$i]['productid']) {
					$qty = $_SESSION['cart_items'][$i]['qty'];
					break;
				}
			}
		}
	}
	
	// remove
	public function removeProduct($productCode){
		$max = count($_SESSION['cart_items']);
		
		for ($i = 0; $i < $max; $i++) {
            if ($pid == $_SESSION['cart_items'][$i][$productCode]) {
                unset($_SESSION['cart_items'][$i]);
                break;
            }
        }
        $_SESSION['cart_items'] = array_values($_SESSION['cart_items']);
	}
	
	// show 
	public function showCart(){
		return $_SESSION['cart_items'];
	}
?>
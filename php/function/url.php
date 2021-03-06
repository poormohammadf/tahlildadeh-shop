<?php

function addToCartUrl($product){
	global $category;
	return BASE_URL.sprintf('cart/add.php?c=%d&p=%d', $category, $product['id']);
}

function addToCartSingleproduct($productId){
	global $category;
	return BASE_URL.sprintf('cart/add.php?p=%d', $productId);
}

function removeFromCart ($product){
    
    return BASE_URL.sprintf('cart/delete.php?p=%d', $product['id']);
}

function categoryUrl($categoryId){
	return BASE_URL.sprintf('category?cat=%d', $categoryId);
}

function productUrl($productId){
	return BASE_URL.sprintf('category/product.php?p=%d', $productId);
}

function productImageUrl($product){
	return MEDIA_URL.'images/products/'.$product['image'];
}
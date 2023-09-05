
@extends('layouts/products')
@includes('includes/product-details', ['name' => 'acme'])
<h1>All Products</h1>
<p>Show all products...</p>

@if($next)
    <a href="{{ $next }}">next</a>
    <a href="{!! $next !!}">next</a>
@endif
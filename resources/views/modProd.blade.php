@extends('base')
@section('title')
    Add Product
@endsection
@section('content')
    <div style="text-align: center;background-color:rgb(227, 244, 158); margin: auto;">
        <h2>Product Search & Modification Page</h2>
    </div>
    <form action="" id="myform" class="myform" method="POST">
        @csrf
        <table style="float: left">
            <tr>
                <td><strong>Select Brand</strong></td>
                <td  style="padding: 5px;">
                    <select name="brand" id="brand">
                        <option value="OnePlus">OnePlus</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Google Pixel">Google Pixel</option>
                    </select>
                    <input type="button" class="btn btn-warning" value="Search" onclick="fetch()">
                    &nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td>Enter Model</td>
                <td>
                    <input type="text" name="model" id="model" size="50">
                </td>
            </tr>
            <tr>
                <td>Ram Capacity</td>
                <td>
                    <input type="text" name="ram" id="ram" size="50" readonly>
                </td>
            </tr>
            <tr>
                <td>Internal Storage</td>
                <td>
                    <input type="text" name="storage" id="storage" size="50" readonly>
                </td>
            </tr>
            <tr>
                <td>Product Rate</td>
                <td>
                    <input type="text" name="rate" id="rate" size="50" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; padding: 5px;">
                    <input type="button" class="btn btn-primary" value="Edit" onclick="editEnable()">
                    &nbsp;&nbsp;
                    <input type="button" class="btn btn-success" value="Update" onclick="UpdateProduct()">
                    &nbsp;&nbsp;
                    <input type="button" class="btn btn-danger" value="Delete" onclick="deleteProduct()">
                    &nbsp;&nbsp;
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('scripts')

<script src="{{ asset('js/product.js') }}"></script>
    
@endsection



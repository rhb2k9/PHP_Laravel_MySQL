@extends('base')
@section('title')
    Add Product
@endsection
@section('content')
    <div style="text-align: center;background-color:rgb(220, 185, 235); margin: auto;">
        <h2>New Product Page</h2>
    </div>
    <form action="" id="myform" class="myform" method="POST">
        @csrf
        <table>

            <tr>
                <td><strong>Select Brand</strong></td>
                <td>
                    <select name="brand" id="brand">
                        <option value="OnePlus">OnePlus</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Google">Google</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Enter Model</td>
                <td>
                    <input type="text" name="model" id="model" size="50">
                </td>
            </tr>
            <tr>
                <td>Enter Ram</td>
                <td>
                    <input type="text" name="ram" id="ram" size="50">
                </td>
            </tr>
            <tr>
                <td>Enter internal Storage</td>
                <td>
                    <input type="text" name="storage" id="storage" size="50">
                </td>
            </tr>
            <tr>
                <td>Enter Rate</td>
                <td>
                    <input type="text" name="rate" id="rate" size="50">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; padding: 5px;">
                    <input type="button" class="btn btn-primary" value="Submit" onclick="addProduct()">
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('scripts')
    <script>
        function addProduct(){
            alert ("Hello World");
            $.ajax({
                url:'addProd',
                method: 'POST',
                data:{
                    brand: $("#brand").val(),
                    model: $("#model").val(),
                    ram: $("#ram").val(),
                    storage: $("#storage").val(),
                    rate: $("#rate").val()
                },
                success:function(data){
                    alert(data.message);
                },
                error: function(xhr, status, error){
                    alert("Error "+xhr.responseText);
                }
            })
        }
    </script>
@endsection



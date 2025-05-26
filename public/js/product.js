function fetch() {
    //alert("Hello world");
    $.ajax({
        url: 'prodFetch',
        method: 'POST',
        data: {
            brand: $("#brand").val(),
            model: $("#model").val()
        },
        success: function (data) {
            //alert("Record Found");
            if (data.message == 'found') {
                $("#ram").val(data.ram);
                $("#storage").val(data.storage);
                $("#rate").val(data.rate);
            } else {
                alert("Recrod Do Not Exists");
                var k = "";
                $("#ram").val(k);
                $("#storage").val(k);
                $("#rate").val(k);
            }
        },
        error: function (xhr, status, error) {
            alert("Error : " + xhr.responseText);
        }
    })
}


function editEnable(){
    //alert ("Hello World ");
    $("#brand").prop('disabled',true);
    $("#model").prop('disabled',true);
    $("#ram").prop('readonly',false);
    $("#storage").prop('readonly',false);
    $("#rate").prop('readonly',false);
    $("#ram").css('background-color','yellow');
    $("#storage").css('background-color','yellow');
    $("#rate").css('background-color','yellow');
}
//select * from Mobiles where Brand=*** and Model****


function UpdateProduct(){
    //alert("hello World");
    $.ajax({
        url:'prodUpdate',
        method:'POST',
        data:{
            brand: $("#brand").val(),
            model: $("#model").val(),
            storage: $("#storage").val(),
            ram: $("#ram").val(),
            rate: $("#rate").val()
        },
        success:function(data){
            alert(data.message);
            window.location.href='/';
        },
        error:function(xhr, status, error){
            alert("Error " + xhr.responseText);
        }
    })
}
//update mobile set Ram=***, Storage=***, Rate=*** where Brand=** and Model=***

function deleteProduct(){
    alert("Hello World");
    $.ajax({
        url:'prodDelete',
        method:'POST',
        data:{
            brand: $("#brand").val(),
            model: $("#model").val()
        },
        success:function(data){
            alert(data.message);
        },
        error:function(xhr, status, error){
            alert("Error "+xhr.responseText);
        }
    })
}

//delete from mobile where Brand=*** and Model=***
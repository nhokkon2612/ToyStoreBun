$(document).ready(function (){
    // $(selector).action();
    $('#showHidenPassword').click(function (){
        let typeValue =$('#passWordAdmin').attr('type');
        let classIcon= 'fas fa-eye-slash';
        if (typeValue==='password'){
            typeValue='text';
            classIcon= 'fas fa-eye';
        }else {
            typeValue='password';
            classIcon= 'fas fa-eye-slash';
        }
        $('#passWordAdmin').attr('type',typeValue);
        $('#icon-eye').removeClass();
        $('#icon-eye').addClass(classIcon);
    })

    $('.show-product').hover(function (){
        $(this).css('background-color','orange').css('color','black')
    },function (){
        $(this).css('background-color','white')
    })


    $('#search-product-admin').keydown(function (){
         console.log($(this).val())

        let value = $(this).val()
        let origin = location.origin
        //call ajax-jquery
        $.ajax({
            url: origin + '/admin/products/search/',
            method: "GET",
            type: 'json',
            data: {
              'keyword': value,
            },
            //xy ly ajax goi thanh cong
            success:function (res){
                console.log(res[0])
               displaySearch(res)
            },
            //xu ly ajax goi that bai
            error: function (err){
                console.log(err)
            },
        })
    })
    function displaySearch(arr){
        let data='';
        for (let i=0; i<arr.length;i++){
            console.log(arr[i].image)
            let a = '{{'
            let image ='<img src'+ "={{" +"asset('images/"+arr[i].image+ `')}}"`+'/>'

            // let img =    "<img src={{"+"asset('images"+'/'+arr[i].image+"')}}" +"/>"
            let key = i +1
            data += "  <tr><li> <figure> " +
                "<td>"+ key +
                "</td><td>"+ arr[i].name+"</td> <td>"+image+
                "</td><td>"+arr[i].quantity1 +
                "</td><td>"+arr[i].quantity2 +
                "</td><td>"+arr[i].cost +
                "</td><td>"+arr[i].price +
                "</td><td>"+arr[i].date_import +
                "</td><td>"+arr[i].status +
                "</td><td>"+arr[i].supplier.name+
                "</td><td>"+arr[i].brand.name+
                "</td><td>"+arr[i].category.name+
                "</td>" +
                "</figure></li></tr>"
        }
        $('.showlist').html(data)
    }
})

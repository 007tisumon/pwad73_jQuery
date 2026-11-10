<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery.min.js"></script>
</head>

<body>
    <div class="container"></div>
    <form action="">
        <input type="text" id="name" placeholder="name"> <br>
        <textarea id="address" placeholder="address"></textarea> <br>

        <button type="button" class="send">Send</button>
    </form>
    <h1></h1>
    <!-- <button class="getdata">get</button> -->
    <script>
        $(document).ready(function() {
            // $(".getdata").click(function () { 
            //     $.get("data.php",{name: "sumon"},function(data,status){
            //         alert(data)
            //     })
            //  })

            function getDta() {
                $.get('student.php', function(data, status) {
                    $(".container").html(data)
                })
            }
            getDta();

            $('.send').click(function() {
                let name = $('#name').val()
                let address = $('#address').val()
                // alert(name)
                $.get("insert.php", {
                    name: name,
                    address: address
                }, function(data, status) {
                    alert(data)
                    getDta()
                    let name = $('#name').val(" ")
                    let address = $('#address').val(" ")
                })
            })
        });
    </script>
</body>

</html>
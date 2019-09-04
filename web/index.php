<html>
    <head>
        <title>CI_Sample</title>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- 
            url: 'http://192.168.64.2/CI_Sample/api/Softbank/'を読み込むとapi/application/controllers/Softbank.phpのindexメソッドが
            url: 'http://192.168.64.2/CI_Sample/api/Softbank/father/'を読み込むとapi/application/controllers/Softbank.phpのfatherメソッドが
            url: 'http://192.168.64.2/CI_Sample/api/Softbank/family/名前'を読み込むとapi/application/controllers/Softbank.phpのfamilyメソッド(引数personに名前を格納)が
            呼び出される。
         -->
        <script>
        $.ajax({
            type: 'get',
            url: 'http://192.168.64.2/CI_Sample/api/Softbank/'
            // url: 'http://192.168.64.2/CI_Sample/api/Softbank/father/'
        })
        .done(function(returnData) {
            $('#response').html(returnData)
        });
        </script>
    </head>
    <body>
        <h1 id="response"></h1>
    </body>
</html>
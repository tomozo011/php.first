<form action="list" method="post">
    @csrf
    ID:<input type="text" name="id"></input>
    <button name="myForm" type="submit" onclick="alert()">確認</button>

    <script>
        function alert{
            var reslut = window.confirm('削除を行ってもいいですか？');
            if(result){
                console.log(result);
            }else{

            }
        }
    </script>
</form>
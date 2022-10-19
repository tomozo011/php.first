
$(function() {
    $('#check').on('click', function() {
        console.log('名前' + $('[name="username"]').val());
        console.log('性別' + $('[name="gender"]:checked').val());
        console.log('血液型' + $('[name="blood"]').val());
        $('[name="hobby"]:checked').each(function() {
            //$(this)は1つずつの選択された要素を意味する
            console.log('趣味:' + $(this).val());
        });

        $('[name="username"]').on("input", function () {
            let input = $(this).val();
        
            // 入力文字があればボタンを押せる、なければボタンを押せなくする
            if (input) {
              $("#check").prop('disabled', false);
            } else {
              $("#check").prop('disabled', true);
            }
        });
    });
}); 
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <fieldset>
        <legend>會員登入</legend>
        <table>
            <tr>
                <td class='clo'>帳號</td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td class='clo'>密碼</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="登入" onclick="login()">
                    <input type="reset" value="清除" onclick="clean()">
                </td>
                <td>
                    <a href="?do=forget">忘記密碼</a> |
                    <a href="?do=reg">尚未註冊</a>
                </td>
            </tr>
        </table>
    </fieldset>

    <script>
        function login() {
            // 取得帳號輸入框的值
            let acc = $("#acc").val()
            // 取得密碼輸入框的值
            let pw = $("#pw").val()
            // 發送 POST 請求到 chk_acc.php 檢查帳號是否存在
            $.post('./api/chk_acc.php', {acc}, (res) => {
                // 檢查回傳值
                // console.log(res);

                // 如果回傳的結果為 0，表示查無帳號
                if (parseInt(res) == 0) {
                    alert("查無帳號")
                } else {
                    // 發送 POST 請求到 chk_pw.php 檢查帳號密碼是否正確
                    $.post('./api/chk_pw.php', {
                        acc,
                        pw
                    }, (res) => {
                        // 如果回傳的結果為 1，表示密碼正確，導向後台;否則顯示密碼錯誤
                        if (parseInt(res) == 1) {
                         
                                location.href = 'back.php'
                            
                        } else {
                            // alert(parseInt(int));
                            // return;

                            alert("密碼錯誤")
                        }
                    })
                }
            })
        }

        function clean() {
            //清除帳號和密碼欄位的值
            $("input[type='text'],input[type='password']").val("");
        }
    </script>

</body>

</html>
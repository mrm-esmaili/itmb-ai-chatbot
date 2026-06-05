<!DOCTYPE html>
<html>
<head>
    <title>دستیار هوش مصنوعی ایده پردازان</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font/dist/font-face.css" rel="stylesheet">

    <style>
        body {
            direction: rtl;
            text-align: right;
            font-family: Vazir, sans-serif;
        }
    </style>
</head>

<body class="bg-light">

<div class="container mt-5">

    <h3 class="mb-4">سوالی درباره خدمات یا قیمت محصولات ITMB دارید؟</h3>

    <div class="card p-3">

        <div id="chatBox" style="height:400px; overflow:auto; border:1px solid #ddd; padding:10px;"></div>

        <input type="text" id="question" class="form-control mt-3" placeholder="بنویسید ...">

        <button class="btn btn-primary mt-2" onclick="send()">ارسال</button>

    </div>
</div>

<script>
async function send() {
    let question = document.getElementById('question').value;

    let chatBox = document.getElementById('chatBox');

    chatBox.innerHTML += "<b>کاربر:</b> " + question + "<br>";

    let res = await fetch('/api/chat', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            question: question,
            session_id: "user1"
        })
    });

    let data = await res.json();

    chatBox.innerHTML += "<b>هوش مصنوعی:</b> " + data.answer + "<br><hr>";

    document.getElementById('question').value = "";
}
</script>

</body>
</html>

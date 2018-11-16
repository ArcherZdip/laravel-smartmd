<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Fresh Air') }}</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @include('Smartmd::parse')
    <style>
        body{
            background: white;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-10 mb-4 text-center">
                <img src="https://xiaoqingxin.site/images/default_img.jpg" alt="im" class="col-12">
            </div>
            <div class="col-10">
                <textarea id="editor" placeholder="请输入正文" style="display: none">
# Hello world
Hi,my friend.That is Fresh Air markdown editor.Are you using it for the first time? click the question button or [click there](https://xiaoqingxin.site/p/markdown-guide) there has a simple documentation for you.

## Some great features

### 1. LaTex
You can render LaTeX mathematical expressions inline like this
$
y = x+1
$
,or like a block.

$$
\Gamma(z) = \int_0^\infty t^{z-1}e^{-t}dt\,.
$$

$$
\begin{cases}3x + 5y +  z \\7x - 2y + 4z \\-6x + 3y + 2z\end{cases}
$$

>Mathematics abuse my hundreds of times, I stay mathematics such as first.

### 2. Code highlight

```javascript
// get page width
var width = document.body.clientWidth
```

```python
# Find the odd number within 100
i = 0
sum = 0
while i < 100:
    if i % 2 == 1:
        sum += i
    i += 1
print "odd number sum is：" + str(sum)
```

### 3. Flow chart

```
graph LR
A[rock] -- write --> B((article))
A --> C(posts)
B --> D{mountain}
C --> D
```

### 4.Table lists

| Column 1 | Column 2 | Column 3 |
| -------- | -------- | -------- |
| Text     | Text     | Text     |
| Text     | Text     | Text     |

### 4.Emoji face

emoji shortcode will be render like this：
```
:joy :laughing: :fire: :dragon_face: :frog:
```
:joy: :laughing: :fire: :dragon_face: :frog:

### 4.Upload image
![](https://www.xiaoqingxin.site/images/logo_3.png)
                </textarea>
                <div id="content" class="markdown-body">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var parse = new Parsemd();
    var html = parse.render(document.getElementById("editor").value);
    document.getElementById("content").innerHTML = html;
</script>
</body>
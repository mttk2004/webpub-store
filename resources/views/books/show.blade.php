<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-4xl font-bold petrona">{{ $book->title }}</h1>
    <div class="flex flex-col gap-2">
        <p class="font-medium">{{ $book->author }}</p>
        <p class="font-normal">{{ $book->published_at }}</p>
        <p class="font-normal">{{ $book->genre }}</p>
        <p class="font-normal">{{ $book->description }}</p>
    </div>

    <p class="font-medium">Tất cả các tuyến đường Laravel được xác định trong các tệp tuyến đường của bạn, nằm trong thư mục routes thư mục. Các tệp này được Laravel tự động tải bằng cách sử dụng cấu hình được chỉ định trong tệp ứng dụng của bạn. bootstrap/app.php tài liệu. các routes/web.php file xác định các tuyến dành cho giao diện web của bạn. Các tuyến đường này được gán web nhóm phần mềm trung gian , cung cấp các tính năng như trạng thái phiên và bảo vệ CSRF.

        Đối với hầu hết các ứng dụng, bạn sẽ bắt đầu bằng việc xác định các tuyến đường trong routes/web.php tài liệu. Các tuyến đường được xác định trong routes/web.php có thể được truy cập bằng cách nhập URL của tuyến đường đã xác định vào trình duyệt của bạn. Ví dụ: bạn có thể truy cập tuyến đường sau bằng cách điều hướng đến http://example.com/user trong trình duyệt của bạn: </p>
    <a href="{{ route('books.index') }}">Back</a>
</body>

</html>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! - Không tìm thấy trang | Xám 3D</title>
    <link rel="icon" href="{{ asset('Image/icon3.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            padding: 40px;
            z-index: 10;
            position: relative;
        }

        .error-code {
            font-size: 8rem;
            color: #111;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 4px 4px 0px rgba(0,0,0,0.1);
        }

        .error-message {
            font-size: 2rem;
            color: #4b4b4d;
            margin-bottom: 20px;
        }

        .error-description {
            font-size: 1.3rem;
            color: #000000ff;
            margin-bottom: 40px;
            max-width: 600px;
            font-weight: normal;
        }

        .btn-home {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4b4b4d;
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .btn-home:hover {
            background-color: #333;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-home:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="app-container" style="justify-content: center; min-height: 100vh;">
        <div class="error-container">
            <h1 class="error-code">Oops!</h1>
            <h2 class="error-message">Không tìm thấy trang</h2>
            <p class="error-description">Xin lỗi, trang bạn đang tìm kiếm không tồn tại, đã bị xóa hoặc tạm thời không thể truy cập. Vui lòng kiểm tra lại đường dẫn hoặc quay về trang chủ.</p>
            <a href="{{ url('/') }}" class="btn-home">Quay về Trang chủ</a>
        </div>
    </div>
</body>
</html>

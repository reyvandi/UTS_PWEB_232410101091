<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS Laravel Project')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #7f35d9;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
            --info-color: #4895ef;
            --warning-color: #f72585;
            --gray-color: #e9ecef;
            --light-gray-color: #f1f3f5;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fb;
            color: #333;
        }

        main {
            flex: 1;
            padding: 2rem 0;
        }

        .footer {
            margin-top: auto;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
            transition: none !important;
        }

        .card:hover {
            transform: none !important;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        }

        .card-header {
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
            font-weight: 600;
        }

        .btn {
            border-radius: 5px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: none !important;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table,
        .table tr,
        .table tbody tr,
        .table td,
        .table th {
            transition: none !important;
            animation: none !important;
        }

        .table-hover tbody tr:hover {
            transition: none !important;
            transform: none !important;
            box-shadow: none !important;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .form-control {
            border-radius: 5px;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
            border-color: var(--primary-color);
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
        }

        .fade-in {
            animation: none !important;
            opacity: 1 !important;
        }
    </style>
</head>
<body>
    @if(!Request::is('login'))
        <x-navbar />
    @endif

    <main>
        <div class="container fade-in">
            @yield('content')
        </div>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

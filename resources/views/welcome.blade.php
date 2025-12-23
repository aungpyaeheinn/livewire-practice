<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Basics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        .todo-app {
            max-width: 420px;
            margin: 60px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            font-family: system-ui, -apple-system, sans-serif;
        }

        .todo-app h2 {
            margin-bottom: 16px;
            color: #333;
            text-align: center;
        }

        .todo-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .todo-form input {
            flex: 1;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
        }

        .todo-form input:focus {
            outline: none;
            border-color: #3b82f6;
        }

        .todo-form button {
            padding: 10px 16px;
            background: #3b82f6;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .todo-form button:hover {
            background: #2563eb;
        }

        .todo-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .todo-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 12px;
            margin-bottom: 8px;
            background: #f9fafb;
            border-radius: 6px;
        }

        .todo-item span {
            color: #333;
        }

        .delete-btn {
            background: transparent;
            border: none;
            color: #ef4444;
            cursor: pointer;
            font-size: 14px;
        }

        .delete-btn:hover {
            color: #b91c1c;
        }

        .todo-text strong {
            margin-right: 6px;
            color: #6b7280;
        }
    </style>
</head>

<body>
    <livewire:hello-world />
    <livewire:counter />
    <livewire:todos />
</body>

</html>

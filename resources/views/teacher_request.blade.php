<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Teacher Request Form</h1>
        <!-- Your teacher request form goes here -->
        <form method="post" action="/teacher_request">
            @csrf
            <label for="teacher_name">Teacher Name:</label>
            <input type="text" id="teacher_name" name="teacher_name" required>

            <label for="teacher_id">Teacher ID:</label>
            <input type="text" id="teacher_id" name="teacher_id" required>

            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" required>

            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id" required>

            <label for="section">Section:</label>
            <input type="text" id="section" name="section" required>

            <label for="credit">Credit:</label>
            <select id="credit" name="credit" required>
                <option value="1">TA</option>
                <option value="3">Grader</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

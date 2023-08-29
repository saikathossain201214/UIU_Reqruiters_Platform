<!DOCTYPE html>
<html>
<head>
    <title>View Course</title>
</head>
<body>
    <h1>{{ $uploads[0]->title }} Course Details</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>PDF Link</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach($uploads as $upload)
                <tr>
                    <td>{{ $upload->title }}</td>
                    <td>{{ $upload->description }}</td>
                    <td><a href="{{ asset('storage/' . $upload->pdf_link) }}">{{ $upload->pdf_link }}</a></td>
                    <td><a href="{{ asset('storage/' . $upload->pdf_link) }}" download>Download</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

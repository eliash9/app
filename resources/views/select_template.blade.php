<!-- resources/views/select_template.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Template</title>
</head>
<body>
    <h2>Select Template</h2>
    <form action="generate-pdf" method="get">

        <label for="template">Choose a Template:</label>
        <select name="file" id="file">
            @foreach ($files as $file)
                <option value="{{ $file }}">{{ $file }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Generate PDF</button>
    </form>
</body>
</html>

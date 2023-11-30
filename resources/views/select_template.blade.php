<!-- resources/views/select_template.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Template</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body >
    <div class="py-4">
        <h2>Select Template</h2>
    </div>
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <form action="generate-pdf" method="get" class="bg-white inline-block px-4 py-8 rounded w-2/6">

        <div class="py-4">
			<label for="template" class="block text-sm font-medium text-gray-700">Template</label>
            <select name="file" id="file" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                @foreach ($files as $file)
                <option value="{{ $file }}">{{ $file }}</option>
                @endforeach
            </select>
            <br>
</div>
            <button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Generate PDF</button>
        </form>
    </div>
</body>

</html>
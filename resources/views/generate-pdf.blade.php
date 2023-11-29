<!-- resources/views/generate-pdf.blade.php -->

<form action="{{ url('/generate-pdf') }}" method="post">
    @csrf
    <label for="template">Select Template:</label>
    <select name="template" id="template">
        <option value="template1">Template 1</option>
        <!-- Add more options for other templates -->
    </select>
    <button type="submit">Generate PDF</button>
</form>

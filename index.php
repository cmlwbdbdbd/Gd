<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Link Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Direct Link Generator</h1>
    <form id="link-generator-form">
        <label for="file-url">Enter Google Drive File URL:</label>
        <input type="text" id="file-url" name="file-url" required>
        <button type="submit">Generate Direct Link</button>
    </form>
    <div id="result">
        <h2>Direct Link:</h2>
        <input type="text" id="direct-link" readonly>
        <button id="copy-button">Copy</button>
        <button id="clear-button">Clear</button>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>

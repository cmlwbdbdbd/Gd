document.getElementById('link-generator-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var fileUrl = document.getElementById('file-url').value;
    var directLink = fileUrl.replace('/view', '/uc?export=download');
    document.getElementById('direct-link').value = directLink;
    document.getElementById('result').style.display = 'block';
});

document.getElementById('copy-button').addEventListener('click', function() {
    var copyText = document.getElementById('direct-link');
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    document.execCommand('copy');
    alert('Copied the link: ' + copyText.value);
});

document.getElementById('clear-button').addEventListener('click', function() {
    document.getElementById('file-url').value = '';
    document.getElementById('direct-link').value = '';
    document.getElementById('result').style.display = 'none';
});

<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
</head>
<body>
	<p>{{ $description }}</p>

	<br>

	<p>Put your text here.</p>

	<p>Place your dynamic content here.</p>

    <br/>
	<br/>
	<br/>
    <strong>Public Folder:</strong>
    <img src="{{ public_path('2.jpg') }}" style="width: 20%">

    <br/>
	<br/>
	<br/>
    <strong>Storage Folder:</strong>
    <img src="{{ storage_path('app/public/3.jpg') }}" style="width: 20%">

    <br/>

	<br>

	<p style="text-align: center;">{!! $footer !!}</p>
</body>
</html>
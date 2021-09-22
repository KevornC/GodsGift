<h1>Upload File</h1>
<form action="UploadImage" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="file"><br><br>
<button type="submit">Upload Picture</button>

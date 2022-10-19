<form method="post" action="add_photo" enctype="multipart/form-data">
    @csrf
    <input name="name" type="text">
    <input name="photo" type="file">
    <button type="submit">Add</button>
</form>
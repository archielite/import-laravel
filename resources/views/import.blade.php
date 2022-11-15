<form method="POST" action="/import" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="file" name="file">
    <button type="submit">Import</button>
</form>

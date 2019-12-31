<form action="{{route("post.store")}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input  class="form-control" type="text" name="title">
    </div>

    <div class="form-group">
        <label for="url_clean">Url</label>
        <input  class="form-control" type="text" name="url_clean">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea  class="form-control" name="content"rows="3"></textarea>
    </div>

   <input type="submit" value="Enviar" >


</form>





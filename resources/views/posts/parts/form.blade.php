<div class="form-group">
  <input name="title" type="text" class="form-control" placeholder="Название поста" style="max-width: 40%" required value="{{ $post->title ?? '' }}">
</div>
<div class="form-group">
  <textarea name="descr" rows="10" placeholder="Введите текст поста..." class="form-control" required >{{ $post->descr ?? '' }}</textarea>
</div>
<div class="form-group">
  <input class="form-control" type="file"  name="img" style="max-width: 40%">
</div>
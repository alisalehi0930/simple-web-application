<!-- Modal -->
<div class="modal fade" id="article_delete" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #dc35451a">
                <h5 class="modal-title" id="staticModal" style="color: #dc3545;">هشدار !</h5>
            </div>
            <div class="modal-body">
                مطمئنی که میخوای مقاله رو حذف کنی؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بیخیال</button>
                <form class="d-inline" action="{{ route('userPanel.articles.softDelete' , $article->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#article_delete">حذف کن</button>
                </form>
            </div>
        </div>
    </div>
</div>

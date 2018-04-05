<div class="modal fade" id="modalDelete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this post ?</p>
        <form action="{{route('adminpost.delete')}}" method="post">
            {{csrf_field()}}
            <input id="idPost" type="hidden" name="id" value="">
      </div>
      <div class="modal-footer">
        <a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Close</a>
        <button type="submit" class="btn btn-primary">Yes sure.</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<form action="/admin/delete" method="POST">
  @csrf
  @method('DELETE')
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
           <h5 class="modal-title" id="deleteModalLabel">Vai tiešām vēlies dzēst šo atrakciju?</h5>
           <input type="hidden" name="category-id" id="modelToDeleteId">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
           </button>
           </div>
           <div class="modal-footer d-flex justify-content-between">
              <small class="form-text text-muted">Bildes, kas ir saistītas ar šo atrakciju tiks dzēstas</small>
              <button type="submit" class="btn btn-danger">Dzēst</button>
           </div>
        </div>
     </div>
  </div>
</form>
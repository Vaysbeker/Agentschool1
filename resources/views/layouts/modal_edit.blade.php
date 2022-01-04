<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="referenceLightLabel" id="referenceLight">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="referenceLightLabel"></h4>
            </div>
            <div class="modal-body" id="reference-light">
                <form>
                    <div class="form-group">
                        <label  for="reference-light-name">Название</label>
                        <input name="reference-light-name" value=""
                               id="reference-light-name"
                               type="text"
                               class="form-control"
                               minlength="3"
                               required />
                    </div>
                    <div class="form-group">
                        <label  for="reference-light-position">Позиция</label>
                        <input name="reference-light-position" value="0"
                               id="reference-light-position"
                               type="number"
                               class="form-control"
                               required />
                    </div>
                    <input name="reference-light-id" value="0"
                           id="reference-light-id"
                           type="hidden" />
                    <input name="reference-light-csrf" value="{{ csrf_token() }}"
                           id="reference-light-csrf"
                           type="hidden" />

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-light" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Закрыть без сохранения</button>

            </div>
        </div>
    </div>
</div>

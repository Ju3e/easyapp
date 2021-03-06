<div id="select-google-calendar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?= lang('select_google_calendar') ?></h3>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="google-calendar" class="control-label">
                        <?= lang('select_google_calendar_prompt') ?>
                    </label>
                    <select id="google-calendar" class="form-control"></select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-dismiss="modal">
                    <i class="fas fa-ban mr-2"></i>
                    <?= lang('cancel') ?>
                </button>
                <button id="select-calendar" class="btn btn-primary">
                    <i class="fas fa-check-square mr-2"></i>
                    <?= lang('select') ?>
                </button>
            </div>
        </div>
    </div>
</div>

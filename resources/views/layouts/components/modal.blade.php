<div class="modal {{ isset($classType) ? $classType : null }}" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-labelledby="{{ isset($modalLabelLedby) ? $modalLabelLedby : null }}" aria-hidden="{{ isset($modalHidden) ? $modalHidden : true }}">
    <div class="modal-dialog {{ isset($modalPositionClass) ? $modalPositionClass : null }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalTitle }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $modalBody }}
            </div>
            <div class="modal-footer">
                {{ isset($modalFooter) ? $modalFooter : null }}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ $modalButtonCloseText }}</button>
            </div>
        </div>
    </div>
</div>
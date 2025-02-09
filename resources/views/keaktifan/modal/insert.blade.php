<div id="downloadReport" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Download Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('keaktifan.downloadPDF') }}" method="POST" target="_blank">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Pilih Semester</label>
                        <select class="form-control" name="semester" required>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Download</button>
                </div>
            </form>
        </div>
    </div>
</div>

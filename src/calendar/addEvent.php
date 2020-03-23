<div id="eventModal" class="modal " id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true" style="display: none; background: rgba(0, 0, 0, 0.65);">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" action="calendar/insert.php">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventTitle">start</h5> - 
                <h5 class="modal-title" id="eventTitle2">end</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" onclick="document.getElementById('eventModal').style.display='none';">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <input type="text" name="title" placeholder="Title" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-12">
                        <select name="importance" id="importance" class="form-control">
                            <option>Important</option>
                            <option>Medium important</option>
                            <option>Not important</option>
                        </select>
                        </div>
                    </div>

                </form>
            </div>
            <input type="hidden" id="startT" name="start">
            <input type="hidden" id="endT" name="end">
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('eventModal').style.display='none';">Отменить</button>
                <button type="submit" class="btn btn-primary" >Добавить</button>
            </div>
        </div>
    </form>    
    </div>
</div>

<script type="text/javascript">
    
</script>

<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" action="db/db.php">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Вам на почту придет новый пароль !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="email" name="email" placeholder="Email: " class="form-control">
                            </div>
                        </div>
                    </div>                    

            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                <input type="submit" name="passwordSubmit" class="btn btn-primary" value="Добавить">
            </div>
        </div>
    </form>    
    </div>
</div>



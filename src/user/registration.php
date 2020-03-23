<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" action="db/db.php">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Добавить пользователя</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="surname" placeholder="Фамилия" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="name" placeholder="Имя" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" name="birthdate" placeholder="Дата рождения" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-unlock"></i>
                            </div>
                            <input type="password" name="password" placeholder="Пароль" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                <input type="submit" name="addUser" class="btn btn-primary" value="Добавить">
            </div>
        </div>
    </form>    
    </div>
</div>



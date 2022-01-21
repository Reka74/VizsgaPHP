<div class="card">
    <div class="card-header">
        <h4 class="card-title">Személyes adatok</h4>
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="index.php/Admin/accountsave">
                    <div class="form-group">
                        <label for="email">Felhasználónév</label>
                        <input type="email" class="form-control" id="email" name="email" disabled  value="<?php if(isset($userdetails)){print($userdetails['email']);}  ?>" >
                    </div>

                    <div class="form-group">
                        <label for="vezeteknev">Vezetéknév</label>
                        <input type="text" class="form-control" id="vezeteknev" name="vezeteknev" value="<?php if(isset($userdetails)){print($userdetails['vezeteknev']);}  ?>" placeholder="vezetéknév">
                    </div>

                    <div class="form-group">
                        <label for="utonev">Utónév</label>
                        <input type="text" class="form-control" id="utonev" name="utonev"  value="<?php if(isset($userdetails)){print($userdetails['utonev']);}  ?>"  placeholder="utónév">
                    </div>

                    <div class="form-group">
                        <label for="rjelszo">Régi Jelszó</label>
                        <input type="password" class="form-control" id="rjelszo" name="rjelszo">
                    </div>
                    
                    <div class="form-group">
                        <label for="ujelszo1">Új Jelszó</label>
                        <input type="password" class="form-control" id="ujelszo1" name="ujelszo1">
                    </div>

                    <div class="form-group">
                        <label for="ujelszo2">Új Jelszó mégegyszer</label>
                        <input type="password" class="form-control" id="ujelszo2" name="ujelszo2">
                    </div>
                    
                    <div>
                        <?php echo validation_errors(); ?>
                        <?php  if(isset($rjelszoerror)){print($rjelszoerror);} ?>
                        <?php if(isset($success)){print($success);} ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary" role="submit" >Ment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
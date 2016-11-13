<form action="" method="post" class="form-horizontal">
          <div class="form-group">
              <div class="col-sm-3">
                <input type="text" name="myndanafn" id="myndanafn" class="form-control" placeholder="myndanafn"><span class="text-error"><?php echo $imagename; ?></span>
              </div>
            </div>

          <div class="form-group">
              <div class="col-sm-3">
                <input type="text" name="myndaslod" id="myndaslod" class="form-control" placeholder="Slóð á mynd">
                <span class="text-error"><?php echo $urlimage; ?></span>
              </div>

          </div>

          <div class="form-group">
              <div class="col-sm-3">
                <textarea class="form-control" name="lysing" id="lysing" rows="3" placeholder="Myndalýsing"></textarea>
              </div>
          </div>             
            <div class="form-group">
              <div class="col-sm-3">
                <button type="submit" value="Send" class="btn btn-default">Submit</button>
              </div>
            </div>
            
        </form>
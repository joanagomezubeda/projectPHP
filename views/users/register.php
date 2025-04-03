<div class="mt-5">
    <h3>Register User!</h3>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" placeholder="Introduce a name" name="name" class="form-control" id="name">
        </div>
        <div class="form-group mt-3">
            <label for="email">Email:</label>
            <input type="email" placeholder="Introduce a email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group mt-3">
            <label for="password">Password:</label>
            <input type="password" placeholder="Introduce a password" name="password" class="form-control" id="password">
        </div>
        <div class="mt-3">
            <button class="btn btn-primary-color" name="submit" type="submit" value="submit">Submit</button>
            <a href="<?php echo ROOT_PATH;?>shares" class="btn btn-secondary-color">Cancel</a>
        </div>
    </form>
</div>
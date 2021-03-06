
<?php include __DIR__. '/part/html-head.php'; ?>
<?php include __DIR__. '/part/navbar.php'; ?>

<div class="container">
    <pre>
        <?php
        print_r($_POST);
        ?>
    </pre>
    <div class="row">
        <div class="col-lg-6">
            <form novalidate method="post" action="">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__. '/part/html-footer.php'; ?>
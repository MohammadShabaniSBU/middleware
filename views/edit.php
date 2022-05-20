<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">

                        <h4 class="text-center my-3 pb-3">To Do App</h4>

                        <form action="/task/update" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                            <div class="col-12">
                                <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
                                <div class="form-outline">
                                    <input type="text" id="form1" class="form-control" name="name" value="<?php echo $data[0]['name']?>" placeholder="Enter a task"/>
                                </div>
                                <div class="form-outline">
                                    <textarea id="form1" class="form-control" name="description" placeholder="description"><?php echo $data[0]['description']?></textarea>
                                </div>
                                <div class="form-outline">
                                    <input type="text" id="form1" class="form-control" name="deadline" value="<?php echo $data[0]['deadline']?>" placeholder="deadline"/>
                                </div>
                                <div class="form-outline">

                                    <select class="form-select" name="color">
                                        <option selected>Colors</option>
                                        <option value="blue" <?php if($data[0]['color'] == "blue") {echo "selected";}?> >blue</option>
                                        <option value="red" <?php if($data[0]['color'] == "red") {echo "selected";}?>>red</option>
                                        <option value="green" <?php if($data[0]['color'] == "green") {echo "selected";}?>>green</option>
                                    </select>
                                </div>
                                <div class="form-outline">
                                    <input type="radio" class="btn-check" value="done" name="status" <?php if($data[0]['status'] == "done") {echo "checked";}?> id="option1" autocomplete="off">
                                    <label class="btn btn-secondary" for="option1">Done</label>
                                    <input type="radio" class="btn-check" value="undone" name="status" <?php if($data[0]['status'] == "undone") {echo "checked";}?> id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Undone</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
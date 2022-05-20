<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">

                        <h4 class="text-center my-3 pb-3">To Do Create</h4>

                        <form action="" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                            <div class="row gap-3">
                                <div class="form-outline">
                                    <input type="text" id="form1" class="form-control" name="name" placeholder="Enter a task here"/>
                                </div>
                                <div class="form-outline">
                                    <input type="text" id="form1" class="form-control" name="deadline" placeholder="deadline"/>
                                </div>
                                <div class="form-outline">
                                    <select class="form-select" name="color">
                                        <option selected>Colors</option>
                                        <option value="blue">blue</option>
                                        <option value="red">red</option>
                                        <option value="green">green</option>
                                    </select>
                                </div>
                                <div class="form-outline">
                                    <textarea id="form1" class="form-control" name="description" placeholder="description"></textarea>
                                </div>
                                <div class="form-outline">
                                    <input type="radio" class="btn-check" value="done" name="status" id="option1" autocomplete="off">
                                    <label class="btn btn-secondary" for="option1">Done</label>
                                    <input type="radio" class="btn-check" value="undone" name="status" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Undone</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
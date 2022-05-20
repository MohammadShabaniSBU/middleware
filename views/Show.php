<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <table class="table mb-4">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Color</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($data as $key => $value){
                            ?>
                            <tr id="row<?php echo $value['id']?>">
                                <th scope="row"><?php echo $value['id']?></th>
                                <td><?php echo $value['name']?></td>
                                <td><?php echo $value['description']?></td>
                                <td><?php echo $value['color']?></td>
                                <td><?php echo $value['deadline']?></td>
                                <td><?php echo $value['status']?></td>
                                <td>
                                    <button type="submit" class="btn btn-danger" id="<?php echo $value['id']?>" onclick="deleteTask(this)">Delete</button>
                                    <a href="/task/edit?id=<?php echo $value['id']?>"><button type="submit" class="btn btn-success ms-1">Edite</button></a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

    function deleteTask (del){

        $.ajax({
            url: '/',
            type: 'post',
            data: {'id': del.id},

            success: function (result){
                location.reload();
            }
            }

        )}

</script>
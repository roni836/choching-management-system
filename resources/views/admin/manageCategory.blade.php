@extends('admin.base')

@section('content')
    
<div class="container mt-3">
    <div class="d-flex">
        <h2>Manage Category (5)</h2>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Category ID</th>
                      <th>Category Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="calling_cat">
                  </tbody>
                </table>
              </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Add New Category
                </div>
                <div class="card-body">
                    <form id="insertCategory">
                        <div class="mb-3">
                            <label for="">Category Name</label>
                            <input type="text" name="cat_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="cat_description" id="cat_description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success w-100" type="submit">
                                Add new Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>

<script>
    $(document).ready(function(){
        // calling

        let callingCat = () => {
            $.ajax({
                type:"get",
                url:"{{route('category.index')}}",
                success: function(response){
                    let table = $("#calling_cat")
                    table.empty();

                    let data = response.data;

                    data.forEach((item)=>{
                        table.append(`
                            <tr>
                                <td>${item.id}</td>
                                <td>${item.cat_title}</td>
                                <td>${item.cat_description}</td>
                                <td>
                                    <button class='btn btn-danger' type='button' id=${"btn"+item.id}>X</button>
                                    <button class='btn btn-primary' type='button'>Edit</button>
                                </td>
                            </tr>
                        `)

                        // delete

                        $("#btn" + item.id).click(function(){
                            $.ajax({
                                type:"delete",
                                url: `api/category/${item.id}`,
                                success: function(response){
                                    alert(response.msg)
                                    callingCat();  //refreshing
                                }
                            })
                        })
                    })
                }
            })
        }
        // insertion

        $("#insertCategory").submit(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('category.store')}}",
                data: $('#insertCategory').serialize(),
                success: function(response){
                    alert(response.msg)
                    callingCat();
                    $('#insertCategory').trigger("reset");
                }
            })
        })
        callingCat();
    })

</script>

@endsection
@extends('admin.base')

@section('content')

<div class="mt-3">
    <div class="d-flex items-center justify-content-between">
        <h2>Manage Course (5)</h2>
        <a href="{{route('admin.insert.course')}}" class="btn btn-success mt-3">Add course</a>
    </div>
    <div class="table-responsive mt-3">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Language</th>
            <th>Duration</th>
            <th>Category</th>
            <th>Instructor</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="calling_course"></tbody>
      </table>
    </div>
</div>

<script>
  $(document).ready(function(){
    let callingCourse = ()=>{
      $.ajax({
        type:"GET",
        url:"{{route('course.index')}}",
        success: function(response){
          let table = $("#calling_course")
          table.empty();

          let data = response.data;

          let len = data.length;
          $("countCourse").html(len);
          data.forEach((course)=>{
            table.append(`
          <tr>
            <td>${course.id}</td>
            <td>${course.name}</td>
            <td>${course.lang}</td>
            <td>${course.duration}</td>
            <td>${course.category_id.cat_title}</td>
            <td>${course.instructor}</td>
            <td>${course.fees}</td>
            <td>${course.discount_fees}</td>
            <td></td>
            <td>${course.description}</td>
            <td>
              <button class='btn btn-danger' type='button' id='${'btn'+course.id}'>X</button>
              <button class='btn btn-primary' type='button'>Edit</button>
              </td>
          </tr>
            `);

            // delete 

            $("btn"+course.id).click(function(){
              $.ajax({
                type:"delete",
                url: `api/product/${course.id}`,
                success:function(response){
                  alert(response.msg)
                  callingCourse();
                }
              })
            })
          })
        }
      })
    }
    callingCourse();
  })
</script>
    
@endsection
@extends('admin.base')

@section('content')

<div class="mt-3">
    <h2>Insert New Course</h2>
    <form id="insertCourse">
      <div class="mb-3">
        <label for="courseName" class="form-label">Course Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control" id="duration" name="duration" required>
      </div>
      <div class="mb-3">
        <label for="instructor" class="form-label">Instructor</label>
        <input type="text" class="form-control" id="instructor" name="instructor" required>
      </div>
      <div class="mb-3">
        <label for="fees" class="form-label">Fees</label>
        <input type="number" class="form-control" id="fees" name="fees" required>
      </div>
      <div class="mb-3">
        <label for="discountFees" class="form-label">Discounted Fees</label>
        <input type="number" class="form-control" id="discount_fees" name="discount_fees" required>
      </div>
      <div class="mb-3">
        <label for="language" class="form-label">Language</label>
        <select class="form-select" id="lang" name="lang" required>
          <option value="en">English</option>
          <option value="hi">Hindi</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="callingCategoryForSelect" name="category_id" required>
          <option value="">Choose Here</option>
          <option value=""></option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="mb-3">
        <label for="featuredImage" class="form-label">Featured Image</label>
        <input type="file" class="form-control" id="featured_image" name="featured_image" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add New Courses</button>
    </form>
  </div>

<script>
  $(document).ready(function(){

    $.ajax({
      type:"GET",
      url:"{{route('category.index')}}",
      success:function(response){
        let select = $("#callingCategoryForSelect");
        select.empty()

        response.data.forEach((cat)=>{
          select.append(`<option value='${cat.id}'>${cat.cat_title}</option>`)
        })
      }
    })
    $("#insertCourse").submit(function(e){
      e.preventDefault();

      $.ajax({
        type:"POST",
        url:"{{route('course.store')}}",
        data:new FormData(this),
        dataType:"JSON",
        contentType:false,
        cache:false,
        processData:false,
        success:function(response){
          alert(response.msg);
          $("#insertCourse").trigger("reset");

          window.open("{{route('admin.manage.course')}}","_self");
        }
      })
    })
  })
  </script> 
    
@endsection
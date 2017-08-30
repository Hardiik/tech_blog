@section('que')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        @include('layouts.partials.form_errors')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Having A Question !!</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ url('/PostQuestion') }}">
                                  {{ csrf_field() }} 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Question Title</label>
                                                <input name="title" type="text" class="form-control" placeholder="Put Question title">
                                            </div>
                                        </div>
                                  </div>
           
                                     <div class="row">
                                        <div class="col-md-12">
                                                 <div class="form-group">
                                                         <label for="sel1">Category</label>
                                                             <select name="category_id" class="form-control" id="sel1">

                                                                 @foreach($categories as $category)
                                                                 <option value= "{{ $category->id }}" >{{ $category->name }}</option>
                                                                 @endforeach
                                                            </select>
                                                  </div>
                                            </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Question Description</label>
                                                <textarea name="body" rows="5" class="form-control" placeholder="Question Details" ></textarea>
                                            </div>
                                        </div>
                                    </div>
              
                                    
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Post Question</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endsection
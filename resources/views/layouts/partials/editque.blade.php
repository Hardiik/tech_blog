@section('editque')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        @include('layouts.partials.form_errors')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Update Question</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ url('/SaveEditQuestion') }}">
                                  {{ csrf_field() }} 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Question Title</label>
                                                <input name="title" type="text" class="form-control" value="{{$post->title}}">
                                                <input name="post_id" type="hidden"  value="{{$post->id}}">
                                           
                                            </div>
                                        </div>
                                  </div>
           
                                     <div class="row">
                                        <div class="col-md-12">
                                                 <div class="form-group">
                                                         <label for="sel1">Category</label>
                                                             <select name="category_id" class="form-control" id="sel1">

                                                                 @foreach($categories as $category)
                                                                 @if($category->id==$post->category_id)
                                                                        <option value= "{{ $category->id }}" selected>{{ $category->name }}</option>
                                                                 @else
                                                                       <option value= "{{ $category->id }}" >{{ $category->name }}</option>
                                                                 @endif
                                                                  @endforeach
                                                            </select>
                                                  </div>
                                            </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Question Description</label>
                                                <textarea name="body" rows="5" class="form-control">{{$post->body}}</textarea>
                                            </div>
                                        </div>
                                    </div>
              
                                    
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Question</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endsection
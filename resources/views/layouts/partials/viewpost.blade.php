
@section('viewpost')

      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class='well'>
                                 <div class='media'>
                                     <div class='media-body'>
                                        <h4 class='media-heading'>{{$post->title}}</h4>
                                        <p class='text-right'>By: {{$post->user->name}}
                                        <p>{{$post->body}}</p>
                                        <ul class='list-inline list-unstyled'>
                                           <li><span><i class='pe-7s-date'> </i>
                                                    {{$post->created_at}}     
                                           </span>
                                           </li>
                                        </ul>
                                     </div>
                                 </div>
                            </div>
                       </div>
                
              @forelse($post->reply as $rply)

                     <div class="row">
		                <div class="col-md-12">
		                  <div class="blog-comment">
				            <ul class="comments">
			         	       <li class="clearfix">
				               <img src="https://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
				               <div class="post-comments">
				               <p class="meta"><a href="#">{{$rply->user->name}}</a> says :</p>
							   <p>{{$rply->body}}</p>
							   <hr>
							   <p style="font-size:13px;" class="text-right"> Replied on: {{$rply->created_at}} </p>
                             
                                      @if(Auth::user() && Auth::user()->id==$rply->user_id)
                                            <form method="POST" action="{{ url('/Deletereply') }}"> 
                                                    {{ csrf_field() }} 
                                                 <input type="hidden" name="reply_id" value="{{$rply->id}}">
                                                 <button type="submit" class="btn btn-danger btn-fill pull-right">Delete</button>
                                                <div class="clearfix"></div>
                                                
                                            </form>
                                     @endif
                                         
                               </div>
                          </div>

		                </div>
	                 </div>
        @empty
             Be the first to answer.
        @endforelse
        @if(Auth::user())
	

                    <div class="row">
		                <div class="col-md-12">
		                    <div class="blog-comment">
							<hr>
							 <div class="post-comments">
                                     <div class="header">
                                        <h4 class="title">Drop your answer</h4>
                                     </div>
                        
			         	         <div class="content">
                                 <form method="POST" action="{{ url('/SaveReply') }}">
                                  {{ csrf_field() }} 
                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <textarea name="body" rows="5" class="form-control" placeholder="Answer here..." ></textarea>
                                               <input type="hidden" name="slug" value="{{$post->slug}}">
										    </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Post Answer</button>
                                    <div class="clearfix"></div>
                                </form>
								</div>
                            </div>
                          </div>
		                </div>
	                 </div>
                
              	@endif
</div>
</div>
</div>


      
@endsection 